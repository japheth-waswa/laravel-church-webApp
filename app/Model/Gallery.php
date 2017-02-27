<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'brief_description', 'image_urls','video_url','link_url','gallery_category_id','visible'];
    
      /**
     * Get the category that owns the gallery.
     */
    public function gallerycategory()
    {
        return $this->belongsTo('App\Model\GalleryCategory','gallery_category_id');
    }
}
