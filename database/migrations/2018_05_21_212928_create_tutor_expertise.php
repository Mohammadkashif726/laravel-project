<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorExpertise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_expertise', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->increments('id');
            $table->integer('sub_cat_id')->unsigned()->index();
            $table->integer('sub_subcat_id')->unsigned()->index();
            $table->integer('tutor_id')->unsigned()->index();
            $table->unsignedTinyInteger('is_deleted')->default(0);


            $table->foreign('sub_cat_id')->references('id')->on('subject_categories')->onDelete('cascade');
            $table->foreign('sub_subcat_id')->references('id')->on('subject_sub_categories')->onDelete('cascade');
            $table->foreign('tutor_id')->references('id')->on('tutors')->onDelete('cascade');
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
        Schema::dropIfExists('tutor_expertise');
    }
}
