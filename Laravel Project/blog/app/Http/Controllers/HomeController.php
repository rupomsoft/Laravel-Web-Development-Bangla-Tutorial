<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

        function ShowHome(){

            $NewsHeadLine="<script>alert('attack');</script>";

            return view('Home',['NewsHeadLineKey'=>$NewsHeadLine]);
        }

}
