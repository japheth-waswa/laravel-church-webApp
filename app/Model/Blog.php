<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
     use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['title','url_key', 'image_url', 'brief_description', 'content','author_name',
        'publish_date','blog_category_id','author_id','visible'];
    
       /**
     * Get the blog category that owns the blog.
     */
    public function blogcategory()
    {
        return $this->belongsTo('App\Model\BlogCategory','blog_category_id');
    }
    
    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Model\Comment');
    }
}
