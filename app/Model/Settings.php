<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Settings extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['website_name', 'logo_url','login_logo_url','fav_icon_url','page_menu_url', 'theme_title','theme_description','about_us','physical_address','primary_email',
        'secondary_email','primary_phone','secondary_phone','facebook_url','twitter_url','youtube_url','quotation','quotation_origin'];
}
