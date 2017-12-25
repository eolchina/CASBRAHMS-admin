<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageinfoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('images', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('uploader');
            $table->string('caption');
            $table->string('image');
            $table->timestamps();

         });

         Schema::create('multiple_images', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('pictures');
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
        
        Schema::dropIfExists('images');
        Schema::dropIfExists('multiple_images');
    }
}
