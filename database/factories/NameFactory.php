<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Name;
use Faker\Generator as Faker;

$factory->define(Name::class, function (Faker $faker) {
    return [

        'name' => $faker->name,

        'last_name' => $faker->lastName,
    ];
});
