<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    $image = "storage\image\account.png";
    $role = mt_rand(0, 1);
    if ($role == 1) {
        $introduction = "Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.
            Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urn 
            feugiat rutrun. ";
    } else {
        $introduction = null;
    }
    
    return [
        'name' => $faker->name,
        'avatar' => $image,
        'role' => $role,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('12345678'), // password
        'introduction' => $introduction,
        'remember_token' => Str::random(10),
    ];
});
