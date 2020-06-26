<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class DataSaveController extends Controller
{
    function DataSave(Request $request){
        Cookie::queue('nameKey','Rabbil Hasan',40000);
    }

}
