<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SundaySchedule extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['theme_title', 'theme_description', 'sunday_date', 'column_count', 'visible'];
//    protected $table = 'sunday_schedules';

    public function sundaypages() {
        return $this->hasMany('App\Model\SundayPage','sunday_schedule_id');
    }

}
