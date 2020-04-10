<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BasicCurdController extends Controller
{
   
        function onSelect(){
           $jsonData= DB::select('select * from students where name=?',['Rain']);
           $jsonString= json_encode($jsonData);
           $selectData=json_decode($jsonString);
           return view('select',['selectKey'=>$selectData]);    
        }

        function onInsert(Request $req){
                $name= $req->input('name');
                $roll= $req->input('roll');
                $class=$req->input('class');
                $result=DB::insert('INSERT INTO `students`(`name`, `class`, `roll`) VALUES (?,?,?)',[$name, $class,$roll]);
                
                if($result==true){

                        return "Succcess";
                }
                else{
                        return "fail"; 
                }
            
        }


        function onDelete(Request $req){
                $id= $req->input('id');
                $result= DB::delete('DELETE FROM `students` WHERE `id`=?',[$id]);

                if($result==true){

                        return "Delete Succcess";
                }
                else{
                        return "Delete fail"; 
                }

            
        }

        function onUpdate(Request $req){
         
                $name= $req->input('name');
                $roll= $req->input('roll');
                $class=$req->input('class');
                $id= $req->input('id');

                $result= DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?',[$name,$class,$roll,$id]);
                

                if($result==true){
                        return "update Succcess";
                }
                else{
                        return "update fail"; 
                }

            
        }

}
