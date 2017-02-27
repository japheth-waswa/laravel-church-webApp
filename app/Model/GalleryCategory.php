<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryCategory extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'url_key', 'description','visible'];
    
     /**
     * Get the gallery owned by this category
     */
    public function gallerys()
    {
        return $this->hasMany('App\Model\Gallery');
    }
    
}
