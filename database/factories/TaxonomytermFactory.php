<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Taxonomyterm::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'parent_id' => $faker->randomDigit,
        'name' => $faker->name,
        'lft' => $faker->randomDigit,
        'rgt' => $faker->randomDigit,
        'depth' => $faker->randomDigit,
        'name' => $faker->name,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
