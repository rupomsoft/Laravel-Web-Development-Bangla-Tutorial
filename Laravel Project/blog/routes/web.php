<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'account'],function(){

    Route::get('/profile', function(){
            return "Profile";
    });


    Route::get('/login',function(){
        return "login";
    } );


    Route::get('/logout', function(){

        return "logout";

    } );
    Route::get('/signup', function(){

        return "signup";
    } );


    Route::get('/updateprofile', function(){

        return "updateprofile";
    } );



});



