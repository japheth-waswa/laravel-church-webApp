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
use App\Model\Staff;

class StaffController extends Controller
{
    public function __construct(Request $request, Staff $staff) {
        $this->request = $request;
        $this->staff = $staff;
    }

    public function index() {
        $staffs = $this->staff->orderBy('priority', 'asc')->get();
        return view('admin.staff.list', compact('staffs'));
    }

    public function create() {
        return view('admin.staff.add');
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
            $this->staff->create($data);
            return Helpers::redirectWithMessage('staff.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {

        $staff = $this->staff->find($id);
        if (count($staff) != 1) {
            return Helpers::redirectWithMessage('staff.list', 404, "Sorry error occured !");
        }
        return view('admin.staff.add', compact('staff'));
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

        $staff = $this->staff->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($staff->image_url));
        }

        $staff->update($data);
        return Helpers::redirectWithMessage('staff.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $staff = $this->staff->find($id);
        if (count($staff) != 1) {
            return Helpers::redirectWithMessage('staff.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($staff->image_url));
        $staff->delete();
        return Helpers::redirectWithMessage('staff.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value,array('0','1'))) {
            return Helpers::redirectWithMessage('staff.list', 500, "Invalid value");
        }
        $staff = $this->staff->find($id);
        if (count($staff) != 1) {
            return Helpers::redirectWithMessage('staff.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $staff->update($data);
        return Helpers::redirectWithMessage('staff.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false) {

        $validationConfigs = [
            'title' => 'required',
            'names' => 'required',
            'phone' => 'required',
            'priority' => 'required',
            'email' => 'nullable|email',
            'facebook_url' => 'nullable|active_url',
            'twitter_url' => 'nullable|active_url',
            'youtube_url' => 'nullable|active_url',
            'brief_description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }
}
