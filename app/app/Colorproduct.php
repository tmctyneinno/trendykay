<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colorproduct extends Model
{
    //
    protected $table = 'color_product';
    protected $fillable = [
        'id', 'name',
    ];

} 
