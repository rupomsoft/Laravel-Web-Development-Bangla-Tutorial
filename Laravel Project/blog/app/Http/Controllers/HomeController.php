<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

        function ShowHome(){

            $Data=array("bangladesh","India","Canada","America");

            return view('Home',['DataKey'=>$Data]);
        }

}
