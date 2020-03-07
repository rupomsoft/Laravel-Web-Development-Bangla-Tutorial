<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello',function(){
    return "Hello World";
});

Route::get('/name',function(){
    return "My Name is Rabbil hasan";
});
