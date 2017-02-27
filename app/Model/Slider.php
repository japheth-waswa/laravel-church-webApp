<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
   use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'image_url', 'description','visible'];
    
}
