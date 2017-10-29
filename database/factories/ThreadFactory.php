<?php

use Faker\Generator as Faker;
use App\Thread;
/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'title' => $faker->sentence,
        'body'  => $faker->paragraph,
    ];
});