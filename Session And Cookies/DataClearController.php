<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DataClearController extends Controller
{
    function DataClear(Request $request)
    {
        Cookie::queue(Cookie::forget('nameKey'));
    }
}
