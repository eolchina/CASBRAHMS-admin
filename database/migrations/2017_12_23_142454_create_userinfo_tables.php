<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('homepage');
            $table->string('mobile');
            $table->string('avatar');
            $table->string('document');
            $table->string('gender');
            $table->date('birthday');
            $table->string('address');
            $table->string('color');
            $table->integer('age');
            $table->datetime('last_login_at');
            $table->string('last_login_ip');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();

        });

        Schema::create('user_address', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('province_id');
            $table->integer('city_id');
            $table->integer('district_id');
            $table->string('address');
            $table->timestamps();

        });

        Schema::create('user_sns', function ( Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('qq');
            $table->string('wechat');
            $table->string('weibo');
            $table->string('github');
            $table->string('google');
            $table->string('facebook');
            $table->string('twitter');
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
        Schema::dropIfExists('user_profiles');
        Schema::dropIfExists('user_address');
        Schema::dropIfExists('user_sns');
    }
}
