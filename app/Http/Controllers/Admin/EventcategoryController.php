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
use App\Model\EventCategory;

class EventcategoryController extends Controller {

    public function __construct(Request $request, EventCategory $eventcategory) {
        $this->request = $request;
        $this->eventcategory = $eventcategory;
    }

    public function index() {
        $eventcategoryss = $this->eventcategory->orderBy('id', 'desc')->get();
        return view('admin.event.category.list', compact('eventcategoryss'));
    }

    public function create() {
        return view('admin.event.category.add');
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request, true);

        //get all form input data
        $data = $request->except('_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);

        $this->eventcategory->create($data);
        return Helpers::redirectWithMessage('eventcategory.list', 200, "Congragulations saved !");
    }

    public function edit($id) {

        $eventcategory = $this->eventcategory->find($id);
        if (count($eventcategory) != 1) {
            return Helpers::redirectWithMessage('eventcategory.list', 404, "Sorry error occured !");
        }
        return view('admin.event.category.add', compact('eventcategory'));
    }

    public function update(Request $request, $id) {

        $this->myValidator($request, true,$id);

        //get all form input data
        $data = $request->except('_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);

        $eventcategory = $this->eventcategory->find($id);

        $eventcategory->update($data);
        return Helpers::redirectWithMessage('eventcategory.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $eventcategory = $this->eventcategory->find($id);
        if (count($eventcategory) != 1) {
            return Helpers::redirectWithMessage('eventcategory.list', 500, "Invalid operation");
        }

        $eventcategory->delete();
        return Helpers::redirectWithMessage('eventcategory.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('eventcategory.list', 500, "Invalid value");
        }
        $eventcategory = $this->eventcategory->find($id);
        if (count($eventcategory) != 1) {
            return Helpers::redirectWithMessage('eventcategory.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $eventcategory->update($data);
        return Helpers::redirectWithMessage('eventcategory.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false,$id=null) {

        $validationConfigs = [
            'description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
//            if($id != null){}
            $validationConfigs['title'] = ['required',Rule::unique('event_categories')->ignore($id)];
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
