<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RetriveController extends Controller
{
    function selectAllRows(){
        $result= DB::table('students')->get();
        return  json_encode( $result);
    }

    function selectOneRows(){
         $result= DB::table('students')->where('name','=','Karim')->first();
         return  json_encode( $result);
     }

     function findRows(){
        $result= DB::table('students')->find(12);
        return  json_encode( $result);
    }

    function selectOneColumn(){
        $result= DB::table('students')->pluck('name');
        return  json_encode( $result);
    }

    function selectMultiColumn(){
        $result= DB::table('students')->pluck('name','id');
        return  json_encode( $result);
    }

    function specificData(){
        $result= DB::table('students')->where('id','=','9')->value('name');
        return  json_encode( $result);
    }
   

 


}
