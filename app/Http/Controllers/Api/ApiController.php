<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\Blog;
use App\Model\BlogCategory;
use App\Model\Sermon;
use App\Model\Donation;
use App\Model\Staff;
use App\Model\EventCategory;
use App\Model\GalleryCategory;
use App\Model\Contact;
use App\Model\Comment;
use App\Model\EventRegister;
use App\Model\SundaySchedule;
use Helpers;

class ApiController extends Controller
{
    public function __construct(Request $request, Slider $slider, Event $event, Gallery $gallery, EventCategory $eventcategory
    , Blog $blog,BlogCategory $blogcategory, Sermon $sermon, Donation $donation, Staff $staff, GalleryCategory $gallerycategory
    , Contact $contact, Comment $comment, EventRegister $eventRegistar, SundaySchedule $sundayschedule) {
        $this->request = $request;
        $this->slider = $slider;
        $this->event = $event;
        $this->gallery = $gallery;
        $this->blog = $blog;
        $this->blogCategory = $blogcategory;
        $this->sermon = $sermon;
        $this->donation = $donation;
        //$this->staff = $staff;
        $this->eventcategory = $eventcategory;
        $this->gallerycategory = $gallerycategory;
        //$this->contact = $contact;
        //$this->comment = $comment;
        //$this->eventRegistar = $eventRegistar;
        $this->sundayschedule = $sundayschedule;
    }

	//check valid token
public function ValidToken(){
	return response()->json(array(),500);
}
	
    //returns donations
    public function Donation(){
        $donation = $this->donation->where('visible', 1)->first();
        return response()->json($donation);
        //return response()->json(request()->user());
    }

    //returns sermons
    public function Sermon(){
        $sermons = $this->sermon->where('visible', 1)->orderBy('sermon_date', 'desc')->get();
        return response()->json($sermons);
        //return response()->json(request()->user());
    }

    //returns sermon
    public function SermonSpecific($id){
        $sermon = $this->sermon->where('id',$id)->where('visible',1)->first();
        return response()->json($sermon);
    }
    //returns events
    public function Event() {
       $eventcategories = $this->eventcategory->where('visible', 1)->orderBy('id', 'desc')->whereHas('events', function ($query) {
                    $query->where('event_date', '>', date('Y-m-d H:i:s'));
                    $query->where('visible', '=', '1');
                })->get();
        $events = $this->event->where('visible', 1)->where('event_date', '>', date('Y-m-d H:i:s'))->orderBy('event_date', 'asc')->get();
        return response()->json(array('eventCategories'=>$eventcategories,'events'=>$events));
    }
    //returns events
    public function EventSpecific($id) {
        $event = $this->event->where('id',$id)->where('visible',1)->first();
        return response()->json($event);
    }
    
    //returns gallery
    public function Gallery() {
        $gallerycategories = $this->gallerycategory->where('visible', 1)->orderBy('id', 'desc')->whereHas('gallerys', function ($query) {
                    $query->where('visible', '=', '1');
                })->get();
        $galleries = $this->gallery->where('visible', 1)->orderBy('id', 'desc')->get();
        return response()->json(array('galleryCategories'=>$gallerycategories,'galleries'=>$galleries));
    }
    
    //returns specific gallery
    public function GallerySpecific($id) {
        $gallery = $this->gallery->where('id',$id)->where('visible',1)->with(['gallerycategory'])->first();
        return response()->json($gallery);
    }
    
    //returns blog
     public function Blog() {
         $blogcategories = $this->blogCategory->where('visible', 1)->orderBy('id', 'desc')->whereHas('blogs', function ($query) {
                    $query->where('publish_date', '<=', date('Y-m-d'));
                    $query->where('visible', '=', '1');
                })->get();
        $blogs = $this->blog->where('visible', 1)->where('publish_date', '<=', date('Y-m-d'))->with(['comments'])->orderBy('publish_date', 'desc')->get();
        return response()->json(array('blogCategories'=>$blogcategories,'blogs'=>$blogs));
    }
    
    //returns specific blog
     public function BlogSpecific($id) {
        $blog = $this->blog->where('id',$id)->where('visible',1)->with(['blogcategory','comments'])->first();
        return response()->json($blog);
    }
    
    //returns sunday schedule
    public function sundaySchedule() {
        $sundayschedule = $this->sundayschedule->where('visible',1)->whereHas('sundaypages', function ($query) {
                    $query->where('visible', '=', '1');
                })->with(['sundaypages' => function($query) {
                        $query->where('visible', 1);
                        $query->orderBy('page_order', 'asc');
                    }])->orderBy('sunday_date', 'desc')->first();
        return response()->json($sundayschedule);
    }
}
