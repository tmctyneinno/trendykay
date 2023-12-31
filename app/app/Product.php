<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use App\Color;

class Product extends Model
{
    protected $fillable = [
        'name',
        'color',
        'size',
        'variation', 
        'category_id',
        'image',
        'gallery',
        'description',
        'price' ,
        'sale_price',
        'percentage',
        'exchange_rate',
        'discount',
    ];

    public function colors()
    {
        return $this->hasMany(Color::class);
    }

    public function color()
    {
        return $this->belongsToMany(Color::class, 'color_product'); // 'color_product' is the pivot table name
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    
    public function category(){
      return $this->belongsTo(Category::class);
    }
      
    public function PriceList(){
        return $this->hasMany(ProductVariation::class);
    }

    public function subCategory(){
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
}
