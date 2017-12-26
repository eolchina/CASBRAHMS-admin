<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Data\Botanist::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;


    return [
        'labelName' => $faker->name,
        'name' => $faker->name,
        'birthDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'deathDate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'fullName' => $faker->name,
        'BPH' => $faker->name,
        'geographyOf' => $faker->country,
        'specialty' => $faker->jobTitle,
        'remark' => $faker->word,
        'refLink' => $faker->url,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Collector::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'colname' => $faker->name,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Specimen::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'botanist_id' => $faker->numberBetween(1, 10),
        'herbarium_id' => $faker->numberBetween(1, 10),
        // 'collector_id' => $faker->numberBetween(1, 10),
        'collection_id' => $faker->numberBetween(1, 10),
        'geolocation_id' => $faker->numberBetween(1, 10),
        'geomountain_id' => $faker->numberBetween(1, 10),
        'nomentype_id' => $faker->numberBetween(1, 10),
        'barcode' => $faker->isbn13,
        'colnumber' => $faker->randomNumber,
        'colyear' => $faker->year,
        'colmonth' => $faker->month,
        'colday' => $faker->dayOfMonth,
        'geography' => $faker->address,
        'elevation' => $faker->address,
        'habitat' => $faker->address,
        'isType' => $faker->randomElement($array = array('T', 'F')),
        'typeOf' => $faker->name,
        'verifiedBy' => $faker->numberBetween(1, 10),
        'annotation' => $faker->sentence,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\SpecimenImage::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'specimen_id' => $faker->numberBetween(1, 10),
        'title' => $faker->slug,
        'pictures' => $faker->imageUrl(400, 200, 'nature'),
        'note' => $faker->sentence,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Determination::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'specimen_id' => $faker->numberBetween(1, 10),
        'botanist_id' => $faker->numberBetween(1, 10),
        'annotation' => $faker->sentence,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Nomentype::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Collection::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'botanist_id' => $faker->numberBetween(1, 10),
        'collector_id' => $faker->numberBetween(1, 10),
        'geolocation_id' => $faker->numberBetween(1, 10),
        'geomountain_id' => $faker->numberBetween(1, 10),
        'dups' => $faker->randomDigitNotNull,
        'annotation' => $faker->languageCode,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Geolocation::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'country' => $faker->country,
        'province' => $faker->state,
        'county' => $faker->city,
        'locality' => $faker->address,
        'geography' => $faker->address,
        'annotation' => $faker->sentence,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Geomountain::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'monname' => $faker->name,
        'country' => $faker->country,
        'province' => $faker->state,
        'county' => $faker->city,
        'locality' => $faker->address,
        'geography' => $faker->address,
        'annotation' => $faker->sentence,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\Herbarium::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'hname' => $faker->name,
        'abbr' => $faker->stateAbbr,
        'agency' => $faker->company,
        'address' => $faker->address,
        'homepage' => $faker->url,
        'email' => $faker->email,
        'phone' => $faker->e164PhoneNumber,
        'contactor' => $faker->name,
        'curator' => $faker->name,
        'description' => $faker->sentence,
        'logo' => $faker->languageCode,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
