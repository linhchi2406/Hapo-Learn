<?php

use Illuminate\Database\Seeder;

class LessonUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\course\LessonUser::class, 20)->create();
    }
}
