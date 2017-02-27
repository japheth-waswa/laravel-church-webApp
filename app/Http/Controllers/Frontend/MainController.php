<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slider;
use App\Model\Event;
use App\Model\Gallery;
use App\Model\Blog;
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

class MainController extends Controller {

    public function __construct(Request $request, Slider $slider, Event $event, Gallery $gallery, EventCategory $eventcategory
    , Blog $blog, Sermon $sermon, Donation $donation, Staff $staff, GalleryCategory $gallerycategory
    , Contact $contact, Comment $comment, EventRegister $eventRegistar, SundaySchedule $sundayschedule) {
        $this->request = $request;
        $this->slider = $slider;
        $this->event = $event;
        $this->gallery = $gallery;
        $this->blog = $blog;
        $this->sermon = $sermon;
        $this->donation = $donation;
        $this->staff = $staff;
        $this->eventcategory = $eventcategory;
        $this->gallerycategory = $gallerycategory;
        $this->contact = $contact;
        $this->comment = $comment;
        $this->eventRegistar = $eventRegistar;
        $this->sundayschedule = $sundayschedule;
    }

    //returns homepage
    public function index() {
        $sliders = $this->slider->where('visible', 1)->orderBy('id', 'desc')->get();
        $events = $this->event->where('visible', 1)->where('event_date', '>', date('Y-m-d H:i:s'))->limit(4)->orderBy('event_date', 'asc')->get();
//        $blogs = $this->blog->where('visible', 1)->where('publish_date', '>=', date('Y-m-d'))->limit(4)->orderBy('publish_date', 'asc')->get();
        $donation = $this->donation->where('visible', 1)->first();
        $sermons = $this->sermon->where('visible', 1)->limit(4)->orderBy('sermon_date', 'desc')->get();
        $galleries = $this->gallery->where('visible', 1)->orderBy('id', 'desc')->whereHas('gallerycategory', function ($query) {
                    $query->where('url_key', '!=', 'slideshow');
                })->get();
        return view('app.homepage', compact('sliders', 'events', 'galleries', 'sermons', 'donation'));
    }

    //returns aboutus
    public function about() {

        $staffs = $this->staff->where('visible', 1)->where('priority', 1)->limit(3)->orderBy('id', 'asc')->get();
        return view('app.about', compact('staffs'));
    }

    //returns sermons
    public function sermon() {
        $sermons = $this->sermon->where('visible', 1)->orderBy('sermon_date', 'desc')->get();
        return view('app.sermons', compact('sermons'));
    }

    //returns events
    public function event() {
        $eventcategories = $this->eventcategory->where('visible', 1)->orderBy('id', 'desc')->whereHas('events', function ($query) {
                    $query->where('event_date', '>', date('Y-m-d H:i:s'));
                    $query->where('visible', '=', '1');
                })->get();
        $events = $this->event->where('visible', 1)->where('event_date', '>', date('Y-m-d H:i:s'))->orderBy('event_date', 'asc')->get();
        return view('app.events', compact('events', 'eventcategories'));
    }

    //ajax post event registar
    public function postEventRegister() {

        $data = $this->request->all();
        $this->eventRegistar->create($data);
        return json_encode(array('status' => 200, 'message' => 'Saved successfuly'));
    }

    //returns gallery
    public function gallery() {
        $gallerycategories = $this->gallerycategory->where('visible', 1)->orderBy('id', 'desc')->whereHas('gallerys', function ($query) {
                    $query->where('visible', '=', '1');
                })->get();
        $galleries = $this->gallery->where('visible', 1)->orderBy('id', 'desc')->get();
        return view('app.gallery', compact('gallerycategories', 'galleries'));
    }

    //returns all blogs
    public function blog() {
        $blogs = $this->blog->where('visible', 1)->where('publish_date', '<=', date('Y-m-d'))->orderBy('publish_date', 'desc')->get();
        return view('app.blog', compact('blogs'));
    }

    //returns all single blogs
    public function singleblog($urlkey) {
        $blog = $this->blog->where('visible', 1)->where('publish_date', '<=', date('Y-m-d'))->where('url_key', $urlkey)->first();
        if (count($blog) != 1) {
            return redirect(route('blog'));
        }
        return view('app.blogdetails', compact('blog'));
    }

    //ajax post blog comments
    public function blogCommentPost() {

        $data = $this->request->all();
        $this->comment->create($data);
        return json_encode(array('status' => 200, 'message' => 'Saved successfuly'));
    }

    //returns contactus
    public function contactus() {
        return view('app.contactus');
    }

    //ajax post contacts
    public function contactPost() {

        $data = $this->request->all();
        $this->contact->create($data);
        return json_encode(array('status' => 200, 'message' => 'Saved successfuly'));
    }

    public function sundaySchedule() {
        $sundayschedule = $this->sundayschedule->where('sunday_date', '>=', date('Y-m-d'))->where('visible',1)->whereHas('sundaypages', function ($query) {
                    $query->where('visible', '=', '1');
                })->orderBy('sunday_date', 'desc')->first();
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('homepage', 404, "Homepage");
        }
        if (count($sundayschedule->sundaypages) < 1) {
            return Helpers::redirectWithMessage('homepage', 404, "Homepage");
        }
        
        return view('app.sundayschedule', compact('sundayschedule'));
    }

}
