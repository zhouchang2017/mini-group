<?php

use Faker\Generator as Faker;
use BrianFaust\Commentable\Models\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text(50),
    ];
});
