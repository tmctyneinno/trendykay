<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $table = 'colors';
    protected $fillable = [
        'product_id', 'name',
    ];

} 
