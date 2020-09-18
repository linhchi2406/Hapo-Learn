<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\Tag::class, function (Faker $faker) {
    $tag = array("#learn", "#code", "#HTML", "#CSS", "#PHP", "#Java", "#develop", "Js");
    
    return [
        'name' => $tag[mt_rand(0, 8)],
    ];
});
