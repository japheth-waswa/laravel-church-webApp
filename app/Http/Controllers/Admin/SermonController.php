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
use App\Model\Sermon;

class SermonController extends Controller {

    public function __construct(Request $request, Sermon $sermon) {
        $this->request = $request;
        $this->sermon = $sermon;
    }

    public function index() {
        $sermons = $this->sermon->orderBy('sermon_date', 'desc')->get();
        return view('admin.sermon.list', compact('sermons'));
    }

    public function create() {
        return view('admin.sermon.add');
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
            $data['sermon_date'] = Helpers::formatDateBasic($data['sermon_date']);
            //create the model
            $this->sermon->create($data);
            return Helpers::redirectWithMessage('sermon.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {

        $sermon = $this->sermon->find($id);
        if (count($sermon) != 1) {
            return Helpers::redirectWithMessage('sermon.list', 404, "Sorry error occured !");
        }
        return view('admin.sermon.add', compact('sermon'));
    }

    public function update(Request $request, $id) {


        if ($this->request->file('file') != null) {
            $this->myValidator($request);
        } else {
            $this->myValidator($request, true);
        }

        //get all form input data
        $data = $request->except('file', '_token');
        $data['sermon_date'] = Helpers::formatDateBasic($data['sermon_date']);

        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $sermon = $this->sermon->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($sermon->image_url));
        }

        $sermon->update($data);
        return Helpers::redirectWithMessage('sermon.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $sermon = $this->sermon->find($id);
        if (count($sermon) != 1) {
            return Helpers::redirectWithMessage('sermon.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($sermon->image_url));
        $sermon->delete();
        return Helpers::redirectWithMessage('sermon.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value,array('0','1'))) {
            return Helpers::redirectWithMessage('sermon.list', 500, "Invalid value");
        }
        $sermon = $this->sermon->find($id);
        if (count($sermon) != 1) {
            return Helpers::redirectWithMessage('sermon.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $sermon->update($data);
        return Helpers::redirectWithMessage('sermon.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false) {

        $validationConfigs = [
            'title' => 'required',
            'audio_url' => 'nullable|active_url',
            'pdf_url' => 'nullable|active_url',
            'video_url' => 'nullable|active_url',
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
