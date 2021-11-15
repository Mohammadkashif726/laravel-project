<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('experience_id')->unsigned()->index();
            $table->string('Title');
            $table->longText('Description');
            $table->string('Thumbnails1')->nullable()->default('NA');
            $table->string('Thumbnails2')->nullable()->default('NA');
            $table->string('Thumbnails3')->nullable()->default('NA');
            $table->string('Thumbnails4')->nullable()->default('NA');
            $table->string('Thumbnails5')->nullable()->default('NA');
            $table->string('Thumbnails6')->nullable()->default('NA');
            $table->string('Thumbnails7')->nullable()->default('NA');
            $table->string('Thumbnails8')->nullable()->default('NA');
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
        Schema::dropIfExists('experiences');
    }
}
