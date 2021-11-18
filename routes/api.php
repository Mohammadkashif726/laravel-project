<?php

use Illuminate\Http\Request;
use App\Models\BlogCategories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateExperience;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\TourHostController;
use App\Http\Controllers\UserIdentityController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CityExperienceController;
use App\Http\Controllers\ExperienceController;
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

Route::post('/test', [CreateExperience::class, 'store']);
Route::post('/destination', [DestinationController::class, 'store']);

 Route::get('/test', [CreateExperience::class, 'index']);

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

//Crud Api's For Cities
Route::get('/cities1', [CityController::class, 'index']);
Route::post('/cities1', [CityController::class, 'store']);
Route::get('/cities1/{id}', [CityController::class, 'show']);
Route::delete('/cities1/{id}', [CityController::class, 'destroy']);
Route::put('/cities1/{id}', [CityController::class, 'update']);

//Crud Api's For Countries
Route::get('/countries1', [CountriesController::class, 'index']);
Route::post('/countries1', [CountriesController::class, 'store']);
Route::get('/countries1/{id}', [CountriesController::class, 'show']);
Route::delete('/countries1{id}', [CountriesController::class, 'destroy']);
Route::put('/countries1/{id}', [CountriesController::class, 'update']);

//Crud Api's for Tours
Route::get('/tours1', [ToursController::class, 'index']);
Route::post('/tours1', [ToursController::class, 'store']);
Route::get('/tours1/{id}', [ToursController::class, 'show']);
Route::delete('/tours1/{id}', [ToursController::class, 'destroy']);
Route::put('/tours1/{id}', [ToursController::class, 'update']);

//Crud Api's For TourHost
Route::get('/tourhost1', [TourHostController::class, 'index']);
Route::post('/tourhost1', [TourHostController::class, 'store']);
Route::get('/tourhost1/{id}', [TourHostController::class, 'show']);
Route::delete('/tourhost1/{id}', [TourHostController::class, 'destroy']);
Route::put('/tourhost1/{id}', [TourHostController::class, 'update']);

//Crud Api's For UserIdentity
Route::get('/useridentity1', [UserIdentityController::class, 'index']);
Route::post('/useridentity1', [UserIdentityController::class, 'store']);
Route::get('/useridentity1/{id}', [UserIdentityController::class, 'show']);
Route::delete('/useridentity1/{id}', [UserIdentityController::class, 'destroy']);
Route::put('/useridentity1/{id}', [UserIdentityController::class, 'update']);

//Crud Api's FOr Gallery
Route::get('/gallery1', [GalleryController::class, 'index']);
Route::post('/gallery1', [GalleryController::class, 'store']);
Route::get('/gallery1/{id}', [GalleryController::class, 'show']);
Route::delete('/gallery1/{id}', [GalleryController::class, 'destroy']);
Route::put('/gallery1/{id}', [GalleryController::class, 'update']);

//Crud Api's For CityExperience
Route::get('/cityexperience1', [CityExperienceController::class, 'index']);
Route::post('/cityexperience1', [CityExperienceController::class, 'store']);
Route::get('/cityexperience1{id}', [CityExperienceController::class, 'show']);
Route::delete('/cityexperience1{id}', [CityExperienceController::class, 'destroy']);
Route::put('/cityexperience1/{id}', [CityExperienceController::class, 'update']);

//Crud Api's For Experience
Route::get('/experience1', [ExperienceController::class, 'index']);
Route::post('/experience1', [ExperienceController::class, 'store']);
Route::get('/experience1/{id}', [ExperienceController::class, 'show']);
Route::delete('/experience1/{id}', [ExperienceController::class, 'destroy']);
Route::put('/experience1/{id}', [ExperienceController::class, 'update']);