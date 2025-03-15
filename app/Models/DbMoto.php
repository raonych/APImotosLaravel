<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DbMoto extends Model
{
    protected $fillable = [ 
        'modelo',
        'marca',
        'ano',
    ];
}
