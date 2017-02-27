<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
     use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'url_key', 'description', 'visible'];

    /**
     * Get the blogs for the blog category.
     */
    public function blogs()
    {
        return $this->hasMany('App\Model\Blog');
    }
}
