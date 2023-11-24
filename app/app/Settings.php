<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Settings;


class Settings extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'logo',
        'site_name',
        'site_phone',
        'site_email',
        'site_copyright',
        'footer_menu',
        'opening_hours',
        'facebook',
        'twitter',
        'linkedIn',
        'instagram',
        'tiktok', // tiktok
        'pinterest', // pinterest
        'address',
        'about'
    ];
}
