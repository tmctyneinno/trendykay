<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacypolicy extends Model
{
    //

    protected $table = 'privacy_policy';

    protected $fillable = [ 
        'content', 
    ];
}
