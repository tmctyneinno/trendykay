<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyExchange extends Model
{
    //

    protected $fillable = ['rate', 'currency'];
}
