<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    //
    protected $fillable = [
        'userId ',
        'status ',
        'adminId',
        'status ',
    ];

    protected $casts = [
        'cratedAt' => 'datetime',
    ];


}
