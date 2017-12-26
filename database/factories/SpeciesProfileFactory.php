<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Data\Term::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;


    return [
        'parent_id' => $faker->numberBetween(1, 10),
        'lft' => $faker->numberBetween(1, 10),
        'rgt' => $faker->numberBetween(1, 10),
        'depth' => $faker->numberBetween(1, 10),
        'term_rank_id' => $faker->numberBetween(1, 10),
        'term_author_id' => $faker->numberBetween(1, 10),
        'term_usage_id' => $faker->numberBetween(1, 10),
        'name' => $faker->name,
        'refProto' => $faker->sentence,
        'refLink' => $faker->url,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\TermAuthor::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->name,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\TermRank::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'parent_id' => $faker->numberBetween(1, 10),
        'lft' => $faker->numberBetween(1, 10),
        'rgt' => $faker->numberBetween(1, 10),
        'depth' => $faker->numberBetween(1, 10),
        'name' => $faker->randomElement($array = array('Kingdom', 'Pylum', 'Class', 'Order', 'Family', 'Genus', 'Species', 'Variety')),
        'localName' => $faker->randomElement($array = array('界', '门', '纲', '目', '科', '属', '种', '变种')),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\TermUsage::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => $faker->randomElement($array = array('Accepted', 'Synonym')),
        'localName' => $faker->randomElement($array = array('接受名', '异名')),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(App\Models\Data\TermCommonName::class, function (Faker $faker) {

    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'term_id' => $faker->numberBetween(1, 10),
        'name' => $faker->name,
        'language' => $faker->languageCode,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

// $factory->define(App\Models\Data\TermProfile::class, function (Faker $faker) {

//     $date_time = $faker->date . ' ' . $faker->time;

//     return [
//         'name' => $faker->name,
//         'localName' => $faker->name,
//         'created_at' => $date_time,
//         'updated_at' => $date_time,
//     ];
// });
