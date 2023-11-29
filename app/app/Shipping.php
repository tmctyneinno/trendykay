<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
        'user_id',
        'receiver_name',
        'receiver_email',
        'receiver_phone' ,
        'address' ,
        'state',
        'city',
        'phone',
        'country',
        'zip_code',
        'delivery_method',
        'lng',
        'is_default',
        'lat'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
