<?php

namespace App\Providers;

use App\Mail\UserCreated;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);

        User::created(function($user){
            // $user_name=$user->first_name.$user->last_name.($user->id+100);
            $user_name = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $user->first_name)). ($user->id);
            if($user->role_id == User::STUDENT){
                Student::create(['user_id'=>$user->id]);
            }
            if($user->role_id == User::TUTOR){
                Tutor::create(['user_id'=>$user->id]);
            }
            $user->update(['user_name'=>$user_name]);
        });
    }
}
