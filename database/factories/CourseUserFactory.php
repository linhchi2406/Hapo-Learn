<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\CourseUser::class, function (Faker $faker) {
    return [
        'course_id' => mt_rand(1, 20),
        'user_id' => mt_rand(62, 81)
    ];
});
