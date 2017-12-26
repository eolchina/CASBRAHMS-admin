<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerbariumInfoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_botanists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('labelName');
            $table->string('name');
            $table->string('birthDate')->nullable();
            $table->string('deathDate')->nullable();
            $table->string('fullName');
            $table->string('BPH');
            $table->string('geographyOf');
            $table->string('specialty');
            $table->string('remark');
            $table->string('refLink');
            $table->timestamps();
        });

        Schema::create('data_collectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('colname');
            $table->timestamps();
        });

        Schema::create('data_specimens', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('collector_id');
            $table->integer('botanist_id');
            $table->integer('herbarium_id');
            $table->integer('collection_id');
            $table->integer('geolocation_id');
            $table->integer('geomountain_id');
            $table->integer('nomentype_id');
            $table->string('barcode');
            $table->string('colnumber');
            $table->string('colyear')->nullable();
            $table->string('colmonth')->nullable();
            $table->string('colday')->nullable();
            $table->string('geography');
            $table->string('elevation');
            $table->string('habitat');
            $table->enum('isType', ['T', 'F'])->default('F');
            $table->string('typeOf');
            $table->integer('verifiedBy');
            $table->text('annotation')->nullable();
            $table->timestamps();
        });

        Schema::create('data_specimen_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('specimen_id');
            $table->string('title');
            $table->string('pictures');
            $table->string('note')->nullable();
            $table->timestamps();
        });

        Schema::create('data_determinations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('specimen_id');
            $table->integer('botanist_id');
            $table->text('annotation')->nullable();
            $table->timestamps();
        });

        Schema::create('data_nomentypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

         
        Schema::create('data_collections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('botanist_id');
            $table->integer('collector_id');
            $table->integer('geolocation_id');
            $table->integer('geomountain_id');
            $table->integer('dups');
            $table->text('annotation')->nullable();
            $table->timestamps();
        });

         

        Schema::create('data_geolocations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('province');
            $table->string('county');
            $table->string('locality');
            $table->string('geography');
            $table->string('annotation')->nullable();
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();
        });

        Schema::create('data_geolocationables', function (Blueprint $table) {
            $table->integer('geolocation_id');
            $table->integer('geolocationable_id');
            $table->string('geolocationable_type');
            $table->timestamps();
        });

        Schema::create('data_geomountains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('monname');
            $table->string('country');
            $table->string('province');
            $table->string('county');
            $table->string('locality');
            $table->string('geography');
            $table->string('annotation');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();
        });

        Schema::create('data_geomountainables', function (Blueprint $table) {
            $table->integer('geomountain_id');
            $table->integer('geomountainable_id');
            $table->string('geomountainable_type');
            $table->timestamps();
        });

        Schema::create('data_herbaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hname');
            $table->string('abbr');
            $table->string('agency');
            $table->string('address');
            $table->string('homepage');
            $table->string('email');
            $table->string('phone');
            $table->string('contactor');
            $table->string('curator');
            $table->string('description')->nullable();
            $table->string('logo');
            $table->string('lat');
            $table->string('lng');
            
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
        Schema::dropIfExists('data_botanists');
        Schema::dropIfExists('data_collectors');
        Schema::dropIfExists('data_specimens');
        Schema::dropIfExists('data_specimen_images');
        Schema::dropIfExists('data_determinations');
        Schema::dropIfExists('data_geomountains');
        Schema::dropIfExists('data_geomountainables');
        Schema::dropIfExists('data_geolocations');
        Schema::dropIfExists('data_geolocationables');
        Schema::dropIfExists('data_collections');
        Schema::dropIfExists('data_nomentypes');
        Schema::dropIfExists('data_herbaria');
    }
}
