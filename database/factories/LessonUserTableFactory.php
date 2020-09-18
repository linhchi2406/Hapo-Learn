<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\LessonUser::class, function (Faker $faker) {
    return [
        'lesson_id' => mt_rand(0, 20),
        'user_id' => mt_rand(62, 81),
    ];
});
