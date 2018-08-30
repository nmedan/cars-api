<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->title,
        'model' => $faker->word,
        'year' => $faker->year,
        'maxSpeed' => $faker->randomNumber,
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 50),
        'engine' => $faker->word,
        'numberOfDoors' => $faker->numberBetween($min=4, $max=4),
    ];
});
