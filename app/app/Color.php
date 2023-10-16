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

    public function products()
    {
        return $this->belongsToMany(Product::class, 'color_product'); // 'color_product' is the pivot table name
    }

} 
