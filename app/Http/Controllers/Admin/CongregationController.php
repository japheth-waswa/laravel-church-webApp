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
use App\Model\Congregation;

class CongregationController extends Controller
{
   public function __construct(Request $request, Congregation $congregation) {
        $this->request = $request;
        $this->congregation = $congregation;
    }
    public function index() {
        $congregations = $this->congregation->orderBy('id', 'desc')->get();
        return view('admin.congregation.list', compact('congregations'));
    }

    public function create() {
        return view('admin.congregation.add');
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
            $data['date_of_birth'] = Helpers::formatDateBasic($data['date_of_birth']);
            //create the model
            $this->congregation->create($data);
            return Helpers::redirectWithMessage('congregation.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {

        $congregation = $this->congregation->find($id);
        if (count($congregation) != 1) {
            return Helpers::redirectWithMessage('congregation.list', 404, "Sorry error occured !");
        }
        return view('admin.congregation.add', compact('congregation'));
    }

    public function update(Request $request, $id) {


        if ($this->request->file('file') != null) {
            $this->myValidator($request);
        } else {
            $this->myValidator($request, true);
        }

        //get all form input data
        $data = $request->except('file', '_token');
        $data['date_of_birth'] = Helpers::formatDateBasic($data['date_of_birth']);

        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $congregation = $this->congregation->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($congregation->image_url));
        }

        $congregation->update($data);
        return Helpers::redirectWithMessage('congregation.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $congregation = $this->congregation->find($id);
        if (count($congregation) != 1) {
            return Helpers::redirectWithMessage('congregation.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($congregation->image_url));
        $congregation->delete();
        return Helpers::redirectWithMessage('congregation.list', 200, "Successfuly deleted");
    }


    public function myValidator($request, $update = false) {

        $validationConfigs = [
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'type' => 'required',
            'date_of_birth' => 'required|date',
            'email' => 'nullable|email',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }
}
