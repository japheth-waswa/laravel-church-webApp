<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventCategory extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'url_key', 'description','visible'];

    /**
     * Get the events for the event category.
     */
    public function events() {
        return $this->hasMany('App\Model\Event');
    }

}
