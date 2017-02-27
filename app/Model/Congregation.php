<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Congregation extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['firstname','lastname', 'district', 'gender', 'date_of_birth', 'email'
        , 'phone', 'place_of_stay', 'type','image_url'];
}
