<?php

use Illuminate\Database\Seeder;

class TotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StudentSeeder::class,
            ExamMarksSeeder::class,
        ]);
    }
}
