<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlashMsg extends Model
{
    //

    protected $fillable = [
        'title', 'sub_title', 'content', 'image', 'button'
    ];
}
