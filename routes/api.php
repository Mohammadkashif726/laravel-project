<?php

use Illuminate\Http\Request;
use App\Models\BlogCategories;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/
/**
 * Auth Routes
 */

Route::group(['namespace' => 'Auth'], function(){
    Route::post('signup','RegisterController@signup');
    Route::get('verify', 'RegisterController@verify')->name('verify');
    Route::post('resendVerifyEmail','RegisterController@resendVerifyEmail');
    Route::post('login','LoginController@login');

    Route::post('password/email','ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset','ResetPasswordController@reset')->name('password.reset');
    Route::middleware('auth:api')->get('/user', 'LoginController@user');

    // Backend
    Route::post('backend/login','LoginController@backendlogin');
    Route::middleware('auth:api')->get('/backend/user', 'LoginController@backendUser');
});

Route::group(['middleware' => 'auth:api'],function (){
    //Tutor Routes
    Route::get('/tutor/profile/personal-detail', 'TutorAPIController@personalDetail');

    //Tutor Personal Detail
    Route::post('/tutor/profile/personal-detail/update', 'TutorAPIController@updatePersonalDetail');
    Route::post('/tutor/porfile/personal-detail/avatar-update', 'TutorAPIController@updateProfilePhoto');
    Route::get('/tutor/subject-categories', 'TutorAPIController@subjectCategories');

    //Tutor Qualification
    Route::resource('/user/qualifications', 'UserQualificationAPIController')->except([
        'create', 'edit'
    ]);

    //Tutor Subjects
    Route::resource('/tutor/subjects', 'TutorSubjectAPIController')->except([
        'create', 'edit', 'show', 'update'
    ]);

    Route::get('/roles', 'RoleController@index');
    Route::post('/profile-setting/update', 'ProfileSettingController@update');
    Route::group(['prefix' => 'backend'], function(){

        Route::get('/user/list', 'Backend\UserController@listUsers');
        Route::post('/user/create', 'Backend\UserController@store');
    });

    Route::group(['prefix' => 'mobile'], function(){
    });
    // Route::get('/backend/user/personal-detail', 'backend\UserController@personalDetail');
});

//Location Routes
Route::get('/languages', 'LanguageController@index');
Route::get('/countries', 'LocationController@countries');
Route::get('/states/{countryId}', 'LocationController@states');
Route::get('/cities/{stateId}', 'LocationController@cities');
Route::get('/areas/{cityId}', 'LocationController@areas');

//Route::group(['prefix' => 'products'], function(){
//    Route::apiResource('/{product}/reviews', 'ReviewController');
//});