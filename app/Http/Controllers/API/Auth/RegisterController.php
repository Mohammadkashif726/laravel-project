<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Requests\RegisterRequest;
use App\Mail\UserCreated;
use App\Models\ActivityLog;
use App\Models\ProfileSetting;
use App\Models\Student;
use App\Traits\ApiResponser;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use Validator;
use App\Http\Controllers\API\ApiBaseController;

Class RegisterController extends ApiBaseController
{
    use ApiResponser;

    public function signup(RegisterRequest $request){

        if (User::where('email', $request->email)->exists() || User::where('phone', $request->phone)->exists()) {
            $userId = User::where('email', $request->email)->orWhere('phone', $request->phone)->first()->id;
            saveActivityLog('Method: signup', $request, "{$request->email} already exist", ActivityLog::REGISTER_SIGNUP_ALREADY_EIST, $userId);
            return $this->errorResponse('User is already exists in our system, please try with different email address or phone number', 409);
        }
        try {
            $user = $this->create($request->all());
            $profileSetting = $this->createProfileSetting($request->all(), $user);
            $http = new Client;
            saveActivityLog('Method: signup', $request, "{$user->email} Registered successfully", ActivityLog::REGISTER_SIGNUP_SUCCESS, $user->id);
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

            if(!$user->created_by_admin){
                 Mail::to($user->email)->send(new UserCreated($user));
            }

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

    public function verify()
    {
        $verify_id = request('verify_id');
        $verify_token = request('verify_token');

        if (!empty($verify_id) && !empty($verify_token)) {
            try {
                $user = User::where('verify_id', $verify_id)->firstOrFail();
                if ($user->verify_token == null && $user->verified == User::VERIFIED) {
                    return $this->successResponse([
                        'verifyStatus' => User::ALREADY_VERIFIED,
                        'message' => 'Account has already been verified.',
                        'user' => [
                            'email' => $user->email,
                            'first_name' => $user->first_name,
                            'last_name' => $user->last_name,
                            'role_id' => $user->role_id,
                            'user_name' => $user->user_name,
                        ]
                    ]);
                } elseif ($user->verify_token == $verify_token) {
                    $user->verified = User::VERIFIED;
                    $user->verify_token = null;
                    $user->save();
                    return $this->successResponse([
                        'verifyStatus' => User::VERIFIED,
                        'message' => 'Account has been successfully verified.',
                        'user' => [
                            'email' => $user->email,
                            'first_name' => $user->first_name,
                            'last_name' => $user->last_name,
                            'role_id' => $user->role_id,
                            'user_name' => $user->user_name,
                        ]
                    ]);
                } else {
                    return $this->errorResponse([
                        'verifyStatus' => User::PENDING,
                        'message' => 'Activation link has been expired.',
                        'user' => [
                            'email' => $user->email
                        ]
                    ], 406);
                }
            } catch (\Exception $exception) {
                return $this->errorResponse([
                    'verifyStatus' => User::INVALID_ACCOUNT,
                    'message' => 'Invalid Account',
                ], 404);
            }
        }
    }

    public function resendVerifyEmail(Request $request){
        $user = User::where('email', $request->email)->firstOrFail();
        try{
            $user->update(['verify_token' => Str::random(60)]);
            Mail::to($user->email)->send(new UserCreated($user));

            saveActivityLog('Method: resendVerifyEmail', $request, "{$user->email} Verification email sent successfully", ActivityLog::REGISTER_RESEND_VERIFICATION_EMAIL, $user->id);
            return $this->successResponse([
                'status' => 200,
                'user' => [
                    'email' => $user->email,
                    'message' => 'Verification link has been sent successfully.'
                ]
            ]);
        }catch (\Exception $e){
            saveActivityLog('Method: resendVerifyEmail', $request, "Couldn't send email becaause of -> {$e}", ActivityLog::REGISTER_RESEND_VERIFICATION_EMAIL_ERROR, $user->id);
            return $this->errorResponse('Something went wrong please try again', 403);
        }
    }

    protected function createProfileSetting(array $data, $user){
        return ProfileSetting::create([
            'viewmode'=>ProfileSetting::TUTOR,
            'user_id'=>$user->id
        ]);
    }
    protected function create(array $data)
    {
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
            'role_id' => $data['role'],
            'verify_id' => Str::random(60),
            'verify_token' => Str::random(60),
            'verified' => User::UNVERIFIED,
            'is_active' => 1,
        ]);
    }

    public function store(Request $request){
        return $request;
    }
}


