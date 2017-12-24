<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User\Profile::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;
    // $loremImages = "http://lorempixel.com/400/200/nature";


    return [
        'user_id' => $faker->numberBetween(1, 100),
        'homepage' => $faker->url,
        'mobile' => $faker->phoneNumber,
        'avatar' => $faker->url,
        'document' => $faker->imageUrl($width = 400, $height = 200, 'nature'),
        'gender' => $faker->randomElement($array = array ('m','f')),
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->address,
        'color' => $faker->hexcolor,
        'age' => $faker->randomDigit,
        'last_login_at' => $faker->dateTime,
        'last_login_ip' => $faker->ipv4,
        'lat' => $faker->latitude($min = -90, $max = 90),
        'lng' => $faker->longitude($min = -180, $max = 180),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\User\Address::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'user_id' => $faker->numberBetween(1, 100),
        'province_id' => $faker->numberBetween(1,100),
        'city_id' => $faker->numberBetween(1, 100),
        'district_id' => $faker->numberBetween(1, 100),
        'address' => $faker->address,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\User\Sns::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'user_id' => $faker->numberBetween(1, 100),
        'qq' => $faker->randomNumber,
        'wechat' => $faker->randomNumber,
        'weibo' => $faker->randomNumber,
        'github' => $faker->randomNumber,
        'google' => $faker->randomNumber,
        'facebook' => $faker->name,
        'twitter' => $faker->name,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
