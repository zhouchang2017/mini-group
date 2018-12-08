<?php

use Faker\Generator as Faker;

$factory->define(App\Talk::class, function (Faker $faker) {
    return [
        'body'=>$faker->text()
    ];
});
