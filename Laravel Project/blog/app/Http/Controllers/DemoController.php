<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{


    function MyName($namevalue){
       return $namevalue;
    }


}
