<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Role;
use App\Country;
use App\Course;
use App\Instructor;

use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'country_id' => $faker->numberBetween(1,4),
        'role_id'   =>  $faker->numberBetween(1,3),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'api_token' => Str::random(10),
        'remember_token' => Str::random(10),
        'phone'          => $faker->numberBetween(01122334455,01122334400),

    ];
});



$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['admin','user','author']),
    ];
});


$factory->define(Instructor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'photo_id' => $faker->numberBetween(1,10),
    ];
});






