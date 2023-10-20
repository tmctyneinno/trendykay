<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //

    protected $fillable = [ 'logo', 'site_name', 'site_phone', 'site_email', 'site_copyright', 'footer_menu', 'opening_hours', 'facebook', 'twitter', 'linkedIn', 'instagram', 'address', 'about'];
}
