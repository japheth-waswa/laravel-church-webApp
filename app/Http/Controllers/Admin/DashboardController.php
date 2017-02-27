<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use EntOps;
use Helpers;
use FileManps;
use App\Model\Sermon;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\SundaySchedule;

class DashboardController extends Controller
{
     public function __construct(Request $request, Sermon $sermon, Event $event,Gallery $gallery,SundaySchedule $sundayschedule) {
        $this->request = $request;
        $this->sermon = $sermon;
        $this->event = $event;
        $this->gallery = $gallery;
        $this->sundayschedule = $sundayschedule;
    }
    public function index(){
        
        $sermoncount  = $this->sermon->count();
        $eventcount  = $this->event->count();
        $gallerycount  = $this->gallery->count();
        $sundayschedulecount  = $this->sundayschedule->count();
        
        return view('admin.dashboard', compact('sermoncount', 'eventcount','gallerycount','sundayschedulecount'));
    }
}
