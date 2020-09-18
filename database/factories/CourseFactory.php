<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\course\Course::class, function (Faker $faker) {
    $name = array ("HTML Fundamentals", "PHP Tutorial", "Swift 4 Fundamentals",
                   "Ruby Tutorial", "jQuery Tutorial", "Data Science with Python",
                   "CSS Fundamentals", "SQL Fundamentals", "C# Tutorial", "C Tutorial");
    $image = "storage/image/course.png";
    $requements = "Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat
    dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit
    amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies
    convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in
    dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc.";
    $description = "Practice during lessons, practice between lessons, practice whenever you can.
    Master the task, then reinforce and test your knowledge with fun, hands-on exercises and interactive quizzes.";
    
    return [
        'name' => $name[ mt_rand(0, 12)],
        'image' => $image,
        'requements' => $requements,
        'description' => $description,
        'price' => mt_rand(100, 300),
        'time' => mt_rand(50, 100)
    ];
});
