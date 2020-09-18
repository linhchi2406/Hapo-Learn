<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\CourseTag::class, function (Faker $faker) {
    return [
        'course_id' => mt_rand(0, 20),
        'tag_id' => mt_rand(0, 20),
    ];
});
