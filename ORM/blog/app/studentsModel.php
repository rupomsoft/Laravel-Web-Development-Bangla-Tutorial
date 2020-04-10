<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentsModel extends Model
{
    public $table='students';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;
}
