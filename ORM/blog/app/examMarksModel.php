<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examMarksModel extends Model
{
    public $table='exam_marks';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;
}
