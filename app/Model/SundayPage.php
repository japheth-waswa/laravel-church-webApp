<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SundayPage extends Model
{
     use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['page_content','sunday_schedule_id', 'page_order','visible'];
//    protected $table = 'sunday_pages';
    
    public function sundayschedule()
    {
        return $this->belongsTo('App\Model\SundaySchedule');
    }
 
}
