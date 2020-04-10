<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentsModel;
class StudentController extends Controller
{

  function allSelect(){
     $result= studentsModel::pluck('name');
     return $result;
  }


  function demo(){
      $result= studentsModel::where('name', '=', 'Rahim')->update(['name'=>'Rahim mia']);
      return $result;
  }



}
