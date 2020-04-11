<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{

    public function run()
    {
        DB::table('students')->insert([

         'name'=>Str::random(5),
         'class'=>Str::random(6),
          'roll'=>Str::random(2)
        ]);

    }


}
