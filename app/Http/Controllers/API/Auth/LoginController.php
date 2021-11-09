<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Resources\ProfileSettingResource;
use App\Models\ActivityLog;
use App\Models\ProfileSetting;
use App\Traits\ApiResponser;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Http\Controllers\API\ApiBaseController;


Class LoginController extends ApiBaseController
{
    use ApiResponser;

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_active) {
                try {
                    $http = new Client;
                    // return \Config::get('app.url') . '/oauth/token';
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
                    saveActivityLog('Method: Login', $request, "Login Success: {$request->get('email')}", ActivityLog::LOGIN_SUCCESS, $user->id);
                    return $this->successResponse([
                        'token_data' => json_decode($response->getBody()),
                        'user' => [
                            'email' => $user->email,
                            'first_name' => $user->first_name,
                            'last_name' => $user->last_name,
                            'role_id' => $user->role_id,
                            'user_name' => $user->user_name,
                        ]
                    ]);
                } catch (\Exception $e) {
                    saveActivityLog('Method: Login', $request, "Login Exception: {$request->get('email')}", ActivityLog::LOGIN_ERROR, $user->id);
                    return $this->errorResponse('Invalid Credentials.', 401);
                }
            } else {
                saveActivityLog('Method: Login', $request, "Login Exception Not Verified: {$request->get('email')}", ActivityLog::LOGIN_ERROR_NOT_VERIFIED, '');
                return $this->errorResponse('Your account is not verified. Please verify your account.', 403);
            }
        } else {
            saveActivityLog('Method: Login', $request, "Login Exception invalid credentials: {$request->get('email')}", ActivityLog::LOGIN_ERROR_INVALID_CREDENTIALS, '');
            return $this->errorResponse('Invalid Credentials.', 401);
        }
    }

    public function user(Request $request)
    {
        $user = $request->user();
        if ($user->is_active) {
            return $this->successResponse([ 'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'user_name' => $user->user_name,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'role_id' => $user->role_id,
                'profile_image' => $user->profile_image,
                'gender' => $user->gender,
                'latitude' => $user->latitude,
                'longitude' => $user->longitude,
                'is_instructor' => $user->is_instructor,
                'verified' => $user->verified,
                'profile_setting' => new ProfileSettingResource($user->profileSetting),
            ]], 200);
        } else {
            return $this->errorResponse('The user either is not verified or active.', 401);
        }
    }

    // Backend login
    public function backendlogin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // return $user->hasPermission();
            if ($user->hasPermission()) {
                try {
                    $http = new Client;
                    // return \Config::get('app.url') . '/oauth/token';
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
                    saveActivityLog('Method: Login', $request, "Login Success: {$request->get('email')}", ActivityLog::LOGIN_SUCCESS, $user->id);
                    return $this->successResponse([
                        'token_data' => json_decode($response->getBody()),
                        'user' => [
                            'email' => $user->email,
                            'first_name' => $user->first_name,
                            'last_name' => $user->last_name,
                            'role_id' => $user->role_id,
                            'user_name' => $user->user_name,
                        ]
                    ]);
                } catch (\Exception $e) {
                    saveActivityLog('Method: Login', $request, "Login Exception: {$request->get('email')} -> error: {$e->getMessage()}", ActivityLog::LOGIN_ERROR, $user->id);
                    return $this->errorResponse('Invalid Credentials.', 401);
                }
            } else {
                saveActivityLog('Method: Login', $request, "Not authorized person to login in backend: {$request->get('email')}", ActivityLog::LOGIN_ERROR_NOT_VERIFIED, '');
                return $this->errorResponse('You are not authorized person to login in backend', 403);
            }
        } else {
            saveActivityLog('Method: Login', $request, "Login Exception invalid credentials: {$request->get('email')}", ActivityLog::LOGIN_ERROR_INVALID_CREDENTIALS, '');
            return $this->errorResponse('Invalid Credentials.', 401);
        }
    }

    public function backendUser(Request $request)
    {
        $user = $request->user();
        if ($user->is_active && $user->hasPermission()) {
            return $this->successResponse([ 'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'user_name' => $user->user_name,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'role_id' => $user->role_id,
                'profile_image' => $user->profile_image,
                'gender' => $user->gender,
                'latitude' => $user->latitude,
                'longitude' => $user->longitude,
                'is_instructor' => $user->is_instructor,
                'verified' => $user->verified,
                'profile_setting' => new ProfileSettingResource($user->profileSetting),
            ]], 200);
        } else {
            return $this->errorResponse('The user either is not authorised or active.', 401);
        }
    }
}
