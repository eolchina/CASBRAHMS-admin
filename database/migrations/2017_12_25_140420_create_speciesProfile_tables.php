<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesProfileTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('data_terms', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft');
            $table->integer('rgt');
            $table->integer('depth');
            $table->integer('term_rank_id');
            $table->integer('term_author_id');
            $table->integer('term_usage_id');
            $table->string('name');
            $table->string('refProto')->nullable()->default(''); 
            $table->string('refLink');
            $table->timestamps();

         });

         Schema::create('data_term_authors', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

         Schema::create('data_term_ranks', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('lft');
            $table->integer('rgt');
            $table->integer('depth');
            $table->string('name');
            $table->string('localName');
            $table->timestamps();
        });

          Schema::create('data_term_usages', function ( Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('localName');
            $table->string('description')->nullable()->default('');
            $table->timestamps();

         });

            Schema::create('data_term_commonnames', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('term_id');
            $table->string('name');
            $table->string('language');
            $table->timestamps();

         });


            Schema::create('data_termables', function ( Blueprint $table) {
            $table->integer('term_id');
            $table->integer('termable_id');
            $table->string('termable_type');
            $table->timestamps();
        });






         
         /**
          * need refine to species model group
          */
         // Schema::create('data_term_profiles', function ( Blueprint $table) {
         //    $table->increments('id');
         //    $table->integer('term_id');
         //    $table->text('overview')->nullable();
         //    $table->text('morpology')->nullable();
         //    $table->text('distribution')->nullable();
         //    $table->text('habitat')->nullable();
         //    $table->text('evolution')->nullable();
         //    $table->text('conservation')->nullable();
         //    $table->text('affinity')->nullable();
         //    $table->text('diagnoses')->nullable();
         //    $table->text('affinity')->nullable();
         //    $table->text('cytoloty')->nullable();
         //    $table->text('ecology')->nullable();
         //    $table->text('annotation')->nullable();
         //    $table->string('language')->nullable();
         //    $table->timestamps();

         // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('data_terms');
        Schema::dropIfExists('data_term_usages');
        Schema::dropIfExists('data_term_ranks');
        // Schema::dropIfExists('data_term_profiles');
        Schema::dropIfExists('data_term_commonnames');
        Schema::dropIfExists('data_term_authors');
        Schema::dropIfExists('data_termables');
    }
}
