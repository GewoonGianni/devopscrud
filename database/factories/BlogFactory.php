<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'body' => $faker->paragraph(20),
        'writer'=> 'faker',
    ];
});
