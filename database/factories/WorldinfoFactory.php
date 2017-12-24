<?php

use Faker\Generator as Faker;

$factory->define(App\Models\World\Country::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;
    


    return [
        'code' => $faker->countryCode,
        'name' => $faker->country,
        'continent' => $faker->randomElement($array = array('Asia','Europe','North America','Africa','Oceania','Antarctica','South America')),
        'region' => $faker->randomElement($array = array('Africa', 'Asia', 'Central America', 'Eastern Europe', 'European Union', 'Middle East', 'North America', 'Oceania', 'South America', 'The Caribbean')),
        'surfaceArea' => $faker->randomFloat(2, 0, 1000000),
        'indepYear' => $faker->year,
        'population' => $faker->randomNumber,
        'lifeExpectancy' => $faker->randomFloat(1, 0, 100),
        'GNP' => $faker->randomFloat(2, 0, 100),
        'GNPold' => $faker->randomFloat(2, 0, 100),
        'localName' => $faker->country,
        'governmentForm' => $faker->country,
        'headOfState' => $faker->state,
        'capital' => $faker->randomDigitNotNull,
        'code2' => $faker->countryCode,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\World\City::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->city,
        'countryCode' => $faker->countryCode,
        'district' => $faker->state,
        'population' => $faker->randomNumber,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\World\Language::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'countryCode' => $faker->countryCode,
        'language' => $faker->languageCode,
        'isOfficial' => $faker->randomElement($array = array('T', 'F')),
        'percentage' => $faker->randomFloat,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
