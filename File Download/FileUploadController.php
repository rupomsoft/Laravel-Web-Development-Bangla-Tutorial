<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FileUploadController extends Controller
{
    function onFileUp(Request $request){
      $path=  $request->file('FileKey')->store('MyFile');
      $result=  DB::table('myfile')->insert(['file_path'=>$path]);
      if($result==true){
          return 1;
      }
      else {
          return 0;
      }

    }
}
