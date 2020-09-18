<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\Review::class, function (Faker $faker) {
    $comment = " Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus,
                 sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis 
                 malesuada felis quis, ultricies convallis neque. Pellentesque tristique. ";

    return [
        'rating' => mt_rand(0, 5),
        'comment' => $comment,
        'user_id' => mt_rand(62, 81),
        'lesson_id' => mt_rand(0, 20),
    ];
});
