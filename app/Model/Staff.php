<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['names', 'email', 'phone','image_url','title','brief_description','facebook_url','twitter_url','youtube_url','priority','visible'];
}
