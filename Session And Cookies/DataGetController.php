<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class DataGetController extends Controller
{
    function DataGet(Request $request){
       return Cookie::get('nameKey');
    }
}
