<?php
use App\User;
use Faker\Generator;
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

$factory->define(User::class, function(Generator $faker){
    $array = [
         'name' => $faker->name,
         'email' => 'blog@blog.com',
         'password' => bcrypt('blog'),
         'type' => 'admin',

    ];

    return $array;
});
