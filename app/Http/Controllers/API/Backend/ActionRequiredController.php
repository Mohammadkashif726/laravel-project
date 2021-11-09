<?php

namespace App\Http\Controllers\API\backend;

use App\Http\Controllers\API\ApiBaseController;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActionRequiredController extends ApiBaseController
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_instructor', User::INSTRUCTOR_REQUESTED)->orderBy('created_at', 'desc')->paginate(100);
        $usersCollection = UserCollection::collection($users);
        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
            'data'=> [
                'user' => $usersCollection,
            ],
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
        $user = User::where('user_name', $username)->first();
        $user->update($request->all());

        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
        ]);
        return $response;
    }
}
