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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// User
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

// Transaction
$factory->define(App\Transaction::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'description' => $faker->sentence(2),
        // this function will create category and returns category_id so relation can be made
        'category_id' => function() {
            return factory(App\Category::class)->create()->id;
        }
    ];
});

// Categories
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->word
    ];
});