<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chanel;
use Faker\Generator as Faker;

$factory->define(Chanel::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});
