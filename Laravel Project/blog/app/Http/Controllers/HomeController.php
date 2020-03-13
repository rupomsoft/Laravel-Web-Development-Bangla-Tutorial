<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

        function ShowHome(){

            $Data=array("bangladesh","India","Canada","America");
            $LoginStatus=false;

            return view('Home',['DataKey'=>$Data, 'LoginStatusKey'=>$LoginStatus]);
        }

}
