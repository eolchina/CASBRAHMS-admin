<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Article::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'picture' => $faker->imageUrl(400, 200, 'nature'),
        'order' => $faker->randomDigit,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Post::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'title' => $faker->address,
        'author_id' => $faker->numberBetween(1, 10),
        'content' => $faker->numberBetween(1,10),
        'rate' => $faker->numberBetween(1, 10),
        'released' => $faker->randomElement($array = array('0', '1')),
        'keywords' => $faker->word,
        'foo_bar' => $faker->word,
        'extra' => $faker->paragraph,
        'released_at' => $date_time,
        'deleted_at' => NULL,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\PostComment::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'post_id' => $faker->numberBetween(1, 10),
        'content' => $faker->sentence,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Tag::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->word,
        'hot' => $faker->randomDigit,
        'new' => $faker->randomDigit,
        'recommend' => $faker->randomDigit,
        'options' => $faker->randomDigitNotNull,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'parent_id' => $faker->numberBetween(1, 100),
        'order' => $faker->numberBetween(1, 100),
        'title' => $faker->word,
        'desc' => $faker->sentence,
        'logo' => $faker->imageUrl(400, 200, 'nature'),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
