<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('welcome');
});


//Admin Auth Routes
// Route::get('/', 'HomeController@index');

Route::group(['prefix'=> 'admin','namespace'=>'ADMIN'],function(){
    Route::get('login','Auth\LoginController@showLoginForm')->name('login');
    Route::post('login','Auth\LoginController@login')->name('login');
    Route::post('logout','Auth\LoginController@logout')->name('logout');
});

//Admin Resource Mange Routes
Route::group(['prefix' => 'admin','namespace' => 'ADMIN', 'middleware' => 'auth'], function (){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    // Route::resource('/users', 'UserController');
    Route::get('/users', 'UserController@index')->name('users.list');
    Route::get('/user/instructor/request/list', 'UserController@instructorRequest')->name('instructor.request.list');
    Route::get('/user/instructor/request/show/{id}', 'UserController@instructorRequestShow')->name('instructor.request.show');

    Route::resource('posts', 'BlogPostsController');
    Route::resource('categories', 'BlogCategoriesController');
    Route::resource('tags', 'BlogTagsController');

    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
});

// Sitemap
Route::get('/sitemap/index', [SitemapController::class, 'index']);
Route::get('/sitemap/users.xml', [SitemapController::class, 'users']);
Route::get('/sitemap/jobs.xml', [SitemapController::class, 'jobs']);
Route::get('/sitemap/tutorialCategories.xml', [SitemapController::class, 'tutorialCategories']);
Route::get('/sitemap/tutorialSubCategories.xml', [SitemapController::class, 'tutorialSubCategories']);
Route::get('/sitemap/eventCategories.xml', [SitemapController::class, 'eventCategories']);
Route::get('/sitemap/courses.xml', [SitemapController::class, 'courses']);
Route::get('/sitemap/events.xml', [SitemapController::class, 'events']);
Route::get('/sitemap/institutes.xml', [SitemapController::class, 'institutes']);
Route::get('/sitemap/batches.xml', [SitemapController::class, 'batches']);

//Route::get('/cms/roles/list', function () {
//    return view('cms/UsersRolesManagement/userRolesList');
//});
//
//Route::get('/cms/users/add-new', function () {
//    return view('cms/UsersRolesManagement/AddNewUser');
//});


//Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared api.ilmyst.com';
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared now api.ilmyst.com';
});

// Clear application cache:
Route::get('/cache-clear', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared api.ilmyst.com';
});

Route::get('/config-clear', function() {
    $exitCode = Artisan::call('config:clear');
    return 'Config cache cleared api.ilmyst.com';
});

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared api.ilmyst.com';
});

// Clear view cache:
Route::get('/compiled-clear', function() {
    $exitCode = Artisan::call('clear-compiled');
    return 'View cache cleared api.ilmyst.com';
});

// Clear view cache:
Route::get('/public-path', function() {
    return public_path();
});

