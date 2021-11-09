<?php

namespace App\Http\Controllers\API\backend;

use App\Http\Controllers\API\ApiBaseController;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Mail\BecomeInstructorStatusUpdate;
use App\Mail\UserCreated;
use App\Mail\UserCreatedByAdmin;
use App\Models\ActivityLog;
use App\Models\Country;
use App\Models\ProfileSetting;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends ApiBaseController
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $userCount = User::count();
        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
            'data'=>$user,
            'user_count' => $userCount,
        ]);
        return $response;
    }

    public function listUsers(Request $request) {
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $phone = $request->phone;
        $username = $request->username;

        $users = User::when($startDate, function($query) use ($startDate, $endDate) {
            return $query->whereBetween('created_at', [$startDate, $endDate]);
        })->when($phone, function($query) use ($phone) {
            return $query->where('phone',  'like', '%'.$phone.'%');
        })->when($username, function($query) use ($username) {
            return $query->where('user_name',  'like', '%'.$username.'%');
        })->orderBy('created_at', 'desc')->paginate(100);


        $usersCollection = UserCollection::collection($users);
        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
            'data'=>$usersCollection,
        ]);
        return $response;
    }

    /**
     * Display the specified Tutor.
     * GET|HEAD /tutors/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($username) {
        $user = User::where('user_name', $username)->first();
        // $tutor = $user->tutor;
        $userResource = new UserResource($user);
        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
            'data'=> $userResource,
        ]);
        return $response;
    }

    public function statusUpdate(Request $request){
        $username = $request->username;
        $instructorStatus = $request->instructorStatus;
        $user = User::where('user_name', $username)->first();
        $user->is_instructor = $instructorStatus;
        $user->update();

        Mail::to($user->email)->send(new BecomeInstructorStatusUpdate($user));

        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
        ]);
        return $response;
    }

    public function store(Request $request)
    {
        if (User::where('email', $request->email)->exists() || User::where('phone', $request->phone)->exists()) {
            $userId = User::where('email', $request->email)->orWhere('phone', $request->phone)->first()->id;
            saveActivityLog('Method: signup', $request, "{$request->email} already exist", ActivityLog::REGISTER_SIGNUP_ALREADY_EIST, $userId);
            return $this->errorResponse('User is already exists in our system, please try with different email address or phone number', 409);
        }
        try {
            $user = $this->create($request->all());
            $profileSetting = $this->createProfileSetting($request->all(), $user);
            $http = new Client;
            saveActivityLog('Method: signup by admin', $request, "{$user->email} Registered successfully", ActivityLog::REGISTER_SIGNUP_SUCCESS, $user->id);
            $response = $http->post(\Config::get('app.url') . '/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => \Config::get('app.client_id'),
                    'client_secret' => \Config::get('app.client_secret'),
                    'username' => $request->get('email'),
                    'password' => $request->get('password'),
                    'remember' => false,
                    'scope' => '',
                ],
            ]);

            $file = $request->resume;
            if(!empty($request->resume) && $request->resume !== 'null'){
                $userId = $user->id;
                $cv_title = $request->cv_title;
                $is_featured = $request->is_featured;

                saveCV($file, $userId, $cv_title, $is_featured);
            }

             Mail::to($user->email)->send(new UserCreatedByAdmin($user));

            return $this->successResponse([
                'token_data' => json_decode($response->getBody()),
                'user' => [
                    'email' => $user->email,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'role_id' => $user->role_id,
                    'user_name' => $user->user_name,
                    'verified' => $user->verified,
                ]
            ]);

        } catch (\Exception $e) {
            saveActivityLog('Method: signup', $request, "Exception: {$e->getMessage()}", ActivityLog::REGISTER_SIGNUP_SUCCESS, '');
            return $this->errorResponse($e->getMessage(), 403);
        }
    }

    protected function create(array $data)
    {
        $country = Country::where('phone_code', '=', $data['phone_code'])->first();
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'profile_image' => $data['profile_image'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'phone_code' => $data['phone_code'],
            'created_by_admin' => $data['created_by_admin'],
            'password' => bcrypt($data['password']),
            'generated_pwd' => $data['password'],
            'country_id' => $country->id,
            'role_id' => $data['role'],
            'verify_id' => Str::random(60),
            'verify_token' => $data['created_by_admin'] && $data['mark_as_verified'] ? null : Str::random(60),
            'verified' => $data['created_by_admin'] && $data['mark_as_verified'] ? User::VERIFIED : User::UNVERIFIED,
            'tag_line' => $data['tag_line'],
            'short_desc' => $data['short_desc'],
            'over_view' => $data['over_view'],
            'is_active' => 1,
        ]);
    }

    protected function createProfileSetting(array $data, $user){
        return ProfileSetting::create([
            'viewmode'=>ProfileSetting::TUTOR,
            'user_id'=>$user->id
        ]);
    }
}
