<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('file_name1')->nullable();
            $table->string('file_name2')->nullable();
            $table->string('file_name3')->nullable();
            $table->string('file_name4')->nullable();
            $table->string('file_name5')->nullable();
            $table->string('file_name6')->nullable();
            $table->string('file_name7')->nullable();
            $table->string('file_name8')->nullable();
            $table->string('file_name9')->nullable();
            $table->string('file_name10')->nullable();
            $table->string('file_name11')->nullable();
            $table->string('file_name12')->nullable();
            $table->string('file_name13')->nullable();
            $table->string('file_name14')->nullable();
            $table->string('file_name15')->nullable();
            $table->string('file_name16')->nullable();
            $table->string('file_name17')->nullable();
            $table->string('file_name18')->nullable();
            $table->string('file_name19')->nullable();
            $table->string('file_name20')->nullable();
            $table->integer('tour_id');
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
        Schema::dropIfExists('galleries');
    }
}
