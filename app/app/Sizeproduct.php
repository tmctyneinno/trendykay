<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sizeproduct extends Model
{
    //
    protected $table = 'size_product';
    protected $fillable = [
        'id', 'name',
    ];

} 
