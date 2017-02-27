<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','image_url', 'brief_description', 'content', 'event_date', 'event_location'
        ,'event_category_id', 'visible'];
    
       /**
     * Get the event category that owns the event.
     */
    public function eventcategory()
    {
        return $this->belongsTo('App\Model\EventCategory','event_category_id');
    }
    
      /**
     * Get the even registers for the event.
     */
    public function eventregisters()
    {
        return $this->hasMany('App\Model\EventRegister');
    }
    
}
