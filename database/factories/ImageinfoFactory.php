<?php

use Faker\Generator as Faker;


$factory->define(App\Models\Image::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'uploader' => $faker->numberBetween(1, 100),
        'caption' => $faker->userName,
        'image' => $faker->imageUrl(400, 200, 'nature'),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\MultipleImage::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    // TODO need fix unrecognized value
    $pictures = "[\"images\\/enid.png\",\"images\\/logo.png\",\"images\\/thumblogo.png\"]";

    return [
        'title' => $faker->word,
        'pictures' => $pictures,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
