<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InsertController extends Controller
{


    function insertRow(){

      $result=  DB::table('students')->insertOrIgnore(
          [
              ['id'=>32,'name'=>'Rain','class'=>'5','roll'=>'9'],
              ['id'=>33,'name'=>'Nuraz','class'=>'1','roll'=>'4'],
              ['id'=>34,'name'=>'Salif','class'=>'2','roll'=>'7'],
          ]

      );

      if($result==true){
          return "Insert Success";
      }
      else{
          return "Insert Fail";
      }

    }

}
