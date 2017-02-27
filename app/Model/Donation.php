<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Donation extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'image_url', 'description','content', 'facebook_url', 'twitter_url', 'youtube_url'
        , 'visible'];

}
