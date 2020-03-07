<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
   
        function Home(){

            return view('HomePage');
        }
        function About(){
            return view('AboutPage');
        }
        function Contact(){
            return view('ContactPage');
        }

}
