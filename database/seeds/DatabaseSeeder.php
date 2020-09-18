<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CourseTableSeeder::class);
        $this->call(UserTableSeeder::class);
        //$this->call(LessonTableSeeder::class);
        //$this->call(CourseUserTableSeeder::class);
        //$this->call(TagTableSeeder::class);
        //$this->call(CourseTagTableSeeder::class);
        //$this->call(LessonUserTableSeeder::class);
        //$this->call(ReviewTableSeeder::class);
    }
}
