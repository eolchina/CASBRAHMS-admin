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
        
        Schema::create('data_botanists', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('labelName');
            $table->string('name');
            $table->year('birthDate');
            $table->year('deathDate');
            $table->string('fullName');
            $table->string('BPH');
            $table->string('geographyOf');
            $table->string('specialty');
            $table->string('remark');
            $table->string('refLink');
            $table->timestamps();

         });

         Schema::create('data_specimens', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('botanist_id');
            $table->integer('herbarium_id');
            $table->integer('collecction_id');
            $table->integer('geolocation_id');
            $table->integer('geomountain_id');
            $table->integer('determination_id');
            $table->integer('nomentype_id');
            $table->string('barcode');
            $table->string('number');
            $table->date('coldate');
            $table->string('geography');
            $table->string('elevation');
            $table->string('habitat');
            $table->text('annotation');
            $table->enum('isNomentype', ['T', 'F'])->default('F');
            $table->integer('typeOfterm_id');
            $table->integer('verifiedBy');
            $table->timestamps();
        });

          Schema::create('data_determinations', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('specimen_id');
            $table->integer('botanist_id');
            $table->integer('annotation');
            $table->timestamps();

         });

          Schema::create('data_nomentypes', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();

         });

         

         Schema::create('data_collections', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('botanists_id');
            $table->integer('geolocation_id');
            $table->text('annotation');
            $table->integer('dups');
            $table->timestamps();

         });

         

         Schema::create('data_geolocations', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('country');
            $table->string('province');
            $table->string('county');
            $table->string('locality');
            $table->string('geography');
            $table->string('annotation');
            $table->string('lat');
            $table->string('lng');
            $table->text('pictures');
            $table->timestamps();

         });

          Schema::create('data_geomountains', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('country');
            $table->string('province');
            $table->string('county');
            $table->string('locality');
            $table->string('geography');
            $table->string('annotation');
            $table->string('lat');
            $table->string('lng');
            $table->text('pictures');
            $table->timestamps();

         });

         Schema::create('data_herbaria', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('agency');
            $table->string('address');
            $table->string('homepage');
            $table->string('email');
            $table->string('phone');
            $table->string('contactor');
            $table->string('curator');
            $table->string('description');
            $table->string('lat');
            $table->string('lng');
            $table->string('logo');
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
        Schema::dropIfExists('data_specimens');
        Schema::dropIfExists('data_determinations');
        Schema::dropIfExists('data_geomountains');
        Schema::dropIfExists('data_geolocations');
        Schema::dropIfExists('data_collections');
        Schema::dropIfExists('data_nomentypes');
        Schema::dropIfExists('data_herbaria');
    }
}
