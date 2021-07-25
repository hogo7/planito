<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class systems extends Model
{
    //

    protected $fillable = [
        'userId' ,
        'mbtiResult',
        'mbtiScore' ,
        'mbtiStatus',
        'taskStatus',
        'Plan'      ,
        'Position'  ,
        'belive'    ,
        'userStatus',
        'tasksAlt'  ,
    ];



}
