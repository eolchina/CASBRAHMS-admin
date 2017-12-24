<?php

use Faker\Generator as Faker;

// locale data faker
// $faker = Faker\Factory::create('zh_CN');

$factory->define(App\Models\ChinaArea::class, function (Faker $faker) {


    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'parent_id' => $faker->numberBetween(1, 100),
        'name' => $faker->city, //or $faker->state
        'type' => $faker->numberBetween(1, 3),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});