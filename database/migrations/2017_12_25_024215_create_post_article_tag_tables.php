<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostArticleTagTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('picture');
            $table->integer('order');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author_id');
            $table->text('content');
            $table->integer('rate');
            $table->enum('released', ['0', '1']);
            $table->string('keywords');
            $table->string('foo_bar');
            $table->text('extra');
            $table->timestamp('released_at');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('post_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->string('content');
            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('hot');
            $table->integer('new');
            $table->integer('recommend');
            $table->string('options')->default('');
            $table->timestamps();
        });

        Schema::create('taggables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tag_id');
            $table->integer('taggable_id');
            $table->string('taggable_type');
            $table->timestamps();
        });

        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id');
            $table->string('slug');
            $table->text('files');
            $table->text('pictures');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('order');
            $table->string('title');
            $table->string('desc');
            $table->string('logo');
            $table->timestamps();
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('video');
            $table->string('status');
            $table->timestamp('release_at');
            $table->timestamps();
        });

        Schema::create('friends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('friend_id');
            $table->string('remark');
            $table->timestamps();
        });

        Schema::create('painters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('bio');
            $table->timestamps();
        });

        Schema::create('paintings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('painter_id');
            $table->string('title');
            $table->text('body');
            $table->timestamp('completed_at');
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from');
            $table->integer('to');
            $table->string('title');
            $table->text('body');
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
        Schema::dropIfExists('articles');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('post_comments');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('taggables');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('attachments');
        Schema::dropIfExists('videos');
        Schema::dropIfExists('friends');
        Schema::dropIfExists('painters');
        Schema::dropIfExists('paintings');
        Schema::dropIfExists('messages');
    }
}
