<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   
        function Home(){

            return "I am from SiteController Home Method";
        }

        function About(){
            return "I am from SiteController About Method";
        }

        function Contact(){
            return "I am from SiteController Contact Method";
        }

}
