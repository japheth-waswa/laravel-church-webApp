<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Validation\Rule;
use EntOps;
use Helpers;
use FileManps;
use Validator;
use Response;
use Redirect;
use Illuminate\Support\Facades\Storage;
use File;
use App\Model\Event;
use App\Model\EventCategory;

class EventController extends Controller
{
    public function __construct(Request $request, Event $event, EventCategory $eventCategory) {
        $this->request = $request;
        $this->event = $event;
        $this->eventCategory = $eventCategory;
    }

    public function index() {
        $events = $this->event->orderBy('id', 'desc')->get();

        return view('admin.event.list', compact('events'));
    }
     public function show($id){
        $event = $this->event->find($id);
        if(count($event) != 1){
            return Helpers::redirectWithMessage('event.list', 500, "Invalid request !");
        }
        return view('admin.event.eventregistar', compact('event'));
    }

    public function create() {
        $eventCategories = $this->eventCategory->where('visible', 1)->get();
        if (count($eventCategories) < 1) {
            return Helpers::redirectWithMessage('eventcategory.list', 404, "please add category or set visible!");
        }
        return view('admin.event.add', compact('eventCategories'));
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request);

        //get all form input data
        $data = $request->except('file', '_token');

        //validate file
        $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

        if ($uploadStatus['status'] == 200) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $data['url_key'] = Helpers::strToSlug($data['title']);
            $data['event_date'] = $data['event_date'].':00';
            //create the model
            $this->event->create($data);
            return Helpers::redirectWithMessage('event.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {
        $eventCategories = $this->eventCategory->where('visible', 1)->get();
        if (count($eventCategories) < 1) {
            return Helpers::redirectWithMessage('eventcategory.list', 404, "please add category or set visible!");
        }
        $event = $this->event->find($id);
        if (count($event) != 1) {
            return Helpers::redirectWithMessage('event.list', 404, "Sorry error occured !");
        }
        return view('admin.event.add', compact('event','eventCategories'));
    }

    public function update(Request $request, $id) {


        if ($this->request->file('file') != null) {
            $this->myValidator($request,null,$id);
        } else {
            $this->myValidator($request, true, $id);
        }

        //get all form input data
        $data = $request->except('file', '_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);
        $data['event_date'] = $data['event_date'].':00';
        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $event = $this->event->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($event->image_url));
        }

        $event->update($data);
        return Helpers::redirectWithMessage('event.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $event = $this->event->find($id);
        if (count($event) != 1) {
            return Helpers::redirectWithMessage('event.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($event->image_url));
        $event->delete();
        return Helpers::redirectWithMessage('event.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('event.list', 500, "Invalid value");
        }
        $event = $this->event->find($id);
        if (count($event) != 1) {
            return Helpers::redirectWithMessage('event.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $event->update($data);
        return Helpers::redirectWithMessage('event.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false, $id = null) {

        $validationConfigs = [
            'title' => ['required', Rule::unique('events')->ignore($id)],
            'content' => 'required',
            'brief_description' => 'required',
            'event_date' => 'required|date',
            'event_location' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
