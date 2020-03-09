<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
   
        public function __invoke(){
            return "I am single Action Controller";
        }

}
