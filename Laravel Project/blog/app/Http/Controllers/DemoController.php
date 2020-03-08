<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{


    function MyName($firstName, $MiddleName,$lastName){
       
       
       
        return " First Name: ". $firstName . "<br> Middle Name:" .$MiddleName. "<br>Last Name: ". $lastName;
    }


}
