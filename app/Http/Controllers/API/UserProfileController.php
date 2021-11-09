<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\TutorListCollection;
use App\Http\Resources\UserCollection;
use App\Models\User;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Response;

class UserProfileController extends AppBaseController
{

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function followUser(int $id)
    {
        $user = User::find($id);
        if(! $user) {
            return redirect()->back()->with('error', 'User does not exist.');
        }
        $user->followers()->attach(auth()->user()->id);
        return response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
        ]);
    }

    public function followUnfollow($username)
    {
        $authUser = auth()->user()->id;
        $user = User::all()->where('user_name', $username)->first();
        if($user->followers->contains($authUser)){
            $user->followers()->detach($authUser);
        } else {
            $user->followers()->attach($authUser);
        };

//        if(!$user){
//            return redirect()->back()->with('error', 'User does not exist.');
//        }
//        $user->followers()->attach(auth()->user()->id);
        return response()->json([
            'is_following' => !$user->followers->contains($authUser),
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
        ]);
    }

    /**
     * Follow the user.
     *
     * @param $profileId
     *
     */
    public function unFollowUser(int $profileId)
    {
        $user = User::find($profileId);
        if(! $user) {
            return redirect()->back()->with('error', 'User does not exist.');
        }
        $user->followers()->detach(auth()->user()->id);
        return response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
        ]);
    }

    /**
     * Show the user details page.
     * @param int $userId
     *
     */
    public function followersList(Request $request, int $userId)
    {
        $user = User::find(auth()->user()->id);
        $take = $request->take;
        $followers = UserCollection::collection($user->followers->take($take));
        $followings = UserCollection::collection($user->followings);

        return response()->json([
            'data' => compact('followers' , 'followings')
        ]);
    }

    /**
     * Check if a given user is following this user.
     *
     * @param User $user
     * @return bool
     */
    public function isFollowing(int $userId)
    {
        $user = User::find($userId);
        $follower = $user->followers()->where('follower_id', auth()->user()->id);
//        if($follower == 0){
//            return false;
//        } else {
//            return true
//        }
        return $follower->count();
    }

    public function searchByNameEmail(Request $request){
        $email = $request->email;
        $selectedSpeakersList = array_map('intval', $request->get('selectedSpeakersList', []));
        $tutors = User::where('email', 'LIKE', '%'.$email.'%')
            ->where('role_id', 2)
            ->whereNotIn('id', $selectedSpeakersList)
            ->get(['id', 'user_name', 'email', 'first_name', 'last_name', 'profile_image', 'tag_line']);
        $users = Response::json([
                'data' => $tutors,
                'selectedSpeakersList' => $selectedSpeakersList,
            ]);
        return $users;
    }

    public function requestInstructor() {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->is_instructor = User::INSTRUCTOR_REQUESTED;
        $user->update();
        $response = response()->json([
            'message'=>'Success',
            'success_code'=>200,
            'user' => $user,
        ]);

        return $response;
    }

    public function isRegistered (Request $request)
    {
        $user = User::where('email', $request->email)->orWhere('phone', $request->phone);
        if ($user->exists()) {
            // $userId = User::where('email', $request->email)->orWhere('phone', $request->phone)->first()->id;
            // saveActivityLog('Method: signup', $request, "{$request->email} already exist", ActivityLog::REGISTER_SIGNUP_ALREADY_EIST, $userId);
            $response = response()->json([
                'message' => 'User found',
                'user' => $user->first(),
            ], 200);
        } else {
            $response = response()->json([
                'message' => 'User not found',
            ], 404);
        }
        return $response;

    }
}
