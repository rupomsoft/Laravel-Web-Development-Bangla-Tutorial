<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ExamMarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exam_marks')->insert([

            'name'=>Str::random(5),
            'marks'=>Str::random(6),
            'roll'=>Str::random(2),
            'grade'=>'A',

        ]);
    }
}
