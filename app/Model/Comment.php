<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['names','email', 'phone', 'message', 'blog_id', 'visible','viewed'];
     /**
     * Get the post that owns the comment.
     */
    public function blog()
    {
        return $this->belongsTo('App\Model\Blog');
    }
    
}
