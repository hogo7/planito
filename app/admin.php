<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    protected $fillable = [
        'name', 'email','userName','accessLevel', 'password',
    ];
    protected $casts = [
        'cratedAt' => 'datetime',
    ];
}
