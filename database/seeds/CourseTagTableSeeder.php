<?php

use Illuminate\Database\Seeder;

class CourseTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\course\CourseTag::class, 20)->create();
    }
}
