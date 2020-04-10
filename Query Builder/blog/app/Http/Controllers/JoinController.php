<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JoinController extends Controller
{


    function LeftJoinData(){

              $result=  DB::table('students')
                ->leftjoin('exam_marks', 'students.roll' ,'=','exam_marks.roll')
                ->get();

                return  $result;
            
    }


    function RightJoinData(){
        $result=  DB::table('students')
        ->rightjoin('exam_marks', 'exam_marks.roll' ,'=','students.roll')
        ->get();

        return  $result;
        
    }



}
