<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{

    function onDownload($FolderPath,$name){
       return Storage::download($FolderPath."/".$name);
    }

    function onSelectFileList(){
        $result=  DB::table('myfile')->get();
       return $result;
    }
}
