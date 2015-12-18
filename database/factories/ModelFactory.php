<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Song::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'lyrics' => $faker->email,
        'slug' => str_random(10),
    ];
});

$factory->define(App\Forum::class, function (Faker\Generator $faker) {
    return [
        'author' => $faker->name,
        'title' => $faker->email,
        'post' => str_random(10),
        'slug' => $faker->name,
    ];
});

$factory->define(App\Testimonial::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'testimony' => $faker->email,
    ];
});