<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->increments('id');
            $table->string('user_name')->unique()->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string ('verified')->default(User::UNVERIFIED);
            $table->string('verify_token')->nullable();
            $table->string('password');
            $table->unsignedTinyInteger('is_active')->default(User::NOT_ACTIVE);
            $table->unsignedTinyInteger('is_deleted')->default(User::NOT_DELETED);
            $table->string('verify_id')->unique()->nullable();
            $table->integer('role_id')->unsigned()->index();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

            $table->string('profile_image')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('gender', 8)->nullable();
            $table->date('dateofbirth')->nullable();
            $table->integer('phone_code')->unsigned()->index()->nullable();
            $table->string('phone')->nullable();
            $table->integer('profile_views')->unsigned()->nullable();
            $table->string('tag_line')->nullable();
            $table->string('short_desc', 250)->nullable();
            $table->string('over_view', 1000)->nullable();
            $table->string('is_instructor')->default(User::INSTRUCTOR_NO);

            //Location
            $table->decimal('latitude', 19,7)->nullable();
            $table->decimal('longitude', 19,7)->nullable();

            $table->integer('country_id')->unsigned()->index()->nullable();
            $table->integer('state_id')->unsigned()->index()->nullable();
            $table->integer('city_id')->unsigned()->index()->nullable();
            $table->integer('area_id')->unsigned()->index()->nullable();
            $table->string('zipcode')->nullable();

            // Social information
            $table->integer('whatsapp_phone_code')->unsigned()->index()->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('skype_reference')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_linkedin')->nullable();
            $table->string('social_pinterest')->nullable();
            $table->string('social_googlePlus')->nullable();
            $table->string('social_instagram')->nullable();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
