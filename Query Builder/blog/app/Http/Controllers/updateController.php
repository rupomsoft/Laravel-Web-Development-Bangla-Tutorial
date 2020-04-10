<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class updateController extends Controller
{


    function onUpdate(){

       $result= DB::table('students')
            ->where('name','=','Karim')
            ->update(['name'=>'Karim mia','class'=>'one','roll'=>'one']);

       if($result==true){
           return "Update Success";
       }
       else{
           return "Update fail";
       }

    }
}
