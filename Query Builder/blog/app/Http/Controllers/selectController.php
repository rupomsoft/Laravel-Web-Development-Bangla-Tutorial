<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class selectController extends Controller
{

    function UniqueSelect(){
       $result= DB::table('students')->distinct()->get();
       return  $result;     
    }

    function singleColumnSelect(){
        $result= DB::table('students')->select('name')->get();
        return  $result;   

    }

    function multiColumnSelect(){
        $result= DB::table('students')->select('name','roll')->get();
        
        return  $result;   

    }





}
