<?php

use App\Models\UserExperience;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExperiences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_experiences', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('experience_type_id')->unsigned()->index();
            $table->string('name');
            // $table->integer('company_id')->unsigned()->nullable();
            // $table->integer('institute_id')->unsigned()->index();
            $table->string('from_year');
            $table->string('to_year')->nullable();
            $table->string('from_month');
            $table->string('to_month')->nullable();
            $table->string('tagline');
            $table->text('description');
            $table->unsignedTinyInteger('is_currently_work')->default(UserExperience::IS_CURRENTLY_WORK);
            $table->unsignedTinyInteger('is_deleted')->default(UserExperience::IS_DELETED);

            $table->foreign('experience_type_id')->references('id')->on('experience_types')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_experiences');
    }
}
