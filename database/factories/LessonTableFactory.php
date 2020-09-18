<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\Lesson::class, function (Faker $faker) {
    $name = "Bai 1" .mt_rand(1, 50);
    $requements = "Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
    dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet
    urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis
    neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a
    euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc.";
    
    return [
        'name' => $name,
        'requements' => $requements,
        'description' => $requements,
        'course_id' => mt_rand(0, 20)
    ];
});
