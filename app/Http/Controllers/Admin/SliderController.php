<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use EntOps;
use Helpers;
use FileManps;
use Validator;
use Response;
use Redirect;
use Illuminate\Support\Facades\Storage;
use File;
use App\Model\Slider;

class SliderController extends Controller
{
       public function __construct(Request $request, Slider $slider) {
        $this->request = $request;
        $this->slider = $slider;
    }

    public function index() {
        $sliders = $this->slider->orderBy('id', 'desc')->get();
        return view('admin.slider.list', compact('sliders'));
    }

    public function create() {
        return view('admin.slider.add');
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
            //create the model
            $this->slider->create($data);
            return Helpers::redirectWithMessage('slider.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {

        $slider = $this->slider->find($id);
        if (count($slider) != 1) {
            return Helpers::redirectWithMessage('slider.list', 404, "Sorry error occured !");
        }
        return view('admin.slider.add', compact('slider'));
    }

    public function update(Request $request, $id) {


        if ($this->request->file('file') != null) {
            $this->myValidator($request);
        } else {
            $this->myValidator($request, true);
        }

        //get all form input data
        $data = $request->except('file', '_token');

        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $slider = $this->slider->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($slider->image_url));
        }

        $slider->update($data);
        return Helpers::redirectWithMessage('slider.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $slider = $this->slider->find($id);
        if (count($slider) != 1) {
            return Helpers::redirectWithMessage('slider.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($slider->image_url));
        $slider->delete();
        return Helpers::redirectWithMessage('slider.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value,array('0','1'))) {
            return Helpers::redirectWithMessage('slider.list', 500, "Invalid value");
        }
        $slider = $this->slider->find($id);
        if (count($slider) != 1) {
            return Helpers::redirectWithMessage('slider.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $slider->update($data);
        return Helpers::redirectWithMessage('slider.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false) {

        $validationConfigs = [
            'title' => 'required',
            'description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }
}
