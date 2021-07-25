<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class task extends Model
{
    //
    protected $fillable = [
        'taskScore','taskName','userId' 
    ];

    const UPDATED_AT = 'last_updated_at';
}
