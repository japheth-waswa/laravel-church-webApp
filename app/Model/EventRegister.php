<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventRegister extends Model
{
     use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['firstname', 'lastname', 'phone','email','event_id'];
    
    /**
     * Get the event that owns the event register.
     */
    public function event()
    {
        return $this->belongsTo('App\Model\Event');
    }
}
