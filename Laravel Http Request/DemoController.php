<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DemoController extends Controller
{

    function simpleGetHttpRequest(){
       $response= Http::get("http://apishooter.com/getSimpleString");
       return $response->headers();
    }

    function simplePostHttpRequest(){
        $response= Http::post("http://apishooter.com/postSimpleString",['text'=>"Dummy Data"]);
        return $response->body();

    }


    function jsonGetHttpRequest(){
        $response= Http::get("http://apishooter.com/getPersonList");
        return $response->body();
    }


    function personAdd(){
        $response= Http::post("http://apishooter.com/addPerson",['name'=>'LaravelHttp','age'=>'laravelHttp','city'=>'laravelHttp','mobile'=>'0000']);
        return $response->body();
    }
    function deletePerson(){
        $response= Http::post("http://apishooter.com/deletePersonById",['id'=>'10']);
        return $response->body();
    }

    function personUpdate(){
        $response= Http::post("http://apishooter.com/updatePersonById",['id'=>'9','name'=>'LaravelHttp','age'=>'laravelHttp','city'=>'laravelHttp','mobile'=>'0000']);
        return $response->body();
    }

    function personbyID(){
        $response= Http::post("http://apishooter.com/getPersonById",['id'=>'8']);
        return $response->json();
    }
}
