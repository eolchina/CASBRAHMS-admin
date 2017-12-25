<?php

use Faker\Generator as Faker;

$factory->define(App\Models\LoginHistory::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'country' => $faker->country,
        'province' => $faker->state,
        'city' => $faker->city,
        'district' => $faker->streetName,
        'isp' => $faker->name,
        'ip' => $faker->ipv4,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});