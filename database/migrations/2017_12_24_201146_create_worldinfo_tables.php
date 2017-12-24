<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorldinfoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('world_country', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('continent');
            $table->string('region');
            $table->float('surfaceArea');
            $table->integer('indepYear');
            $table->integer('population');
            $table->float('lifeExpectancy', 3, 1);
            $table->float('GNP', 10, 2);
            $table->float('GNPold', 10, 2);
            $table->string('localName');
            $table->string('governmentForm');
            $table->string('headOfState');
            $table->integer('capital');
            $table->string('code2');
            $table->timestamps();

        });

         Schema::create('world_city', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('countryCode');
            $table->string('district');
            $table->integer('population');
            $table->timestamps();

         });

         Schema::create('world_language', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('countryCode');
            $table->string('language');
            $table->string('isOfficial');
            $table->integer('percentage');
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
        
        Schema::dropIfExists('world_country');
        Schema::dropIfExists('world_city');
        Schema::dropIfExists('world_language');
    }
}
