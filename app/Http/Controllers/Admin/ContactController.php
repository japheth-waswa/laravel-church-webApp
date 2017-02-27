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
use App\Model\Contact;

class ContactController extends Controller {

    public function __construct(Request $request, Contact $contact) {
        $this->request = $request;
        $this->contact = $contact;
    }

    public function index() {
        $contacts = $this->contact->orderBy('created_at', 'desc')->get();
        return view('admin.contact.list', compact('contacts'));
    }
    public function show($id){
        $contact = $this->contact->find($id);
        if(count($contact) != 1){
            return Helpers::redirectWithMessage('contact.list', 500, "Invalid request !");
        }
        $data['viewed'] = 1;
        $contact->update($data);
        return view('admin.contact.managecontact', compact('contact'));
    }
//
//    public function create() {
//        return view('admin.contact.add');
//    }
//
//    public function store(Request $request) {
//
//        //validate inputs
//        $this->myValidator($request);
//
//        //get all form input data
//        $data = $request->except('file', '_token');
//
//        //validate file
//        $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');
//
//        if ($uploadStatus['status'] == 200) {
//            $data['image_url'] = $uploadStatus['fileLocationName'];
//            $data['contact_date'] = Helpers::formatDateBasic($data['contact_date']);
//            //create the model
//            $this->contact->create($data);
//            return Helpers::redirectWithMessage('contact.list', 200, "Congragulations saved !");
//        }
//        if ($uploadStatus['status'] != 200) {
//            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
//        }
//    }
//
//    public function edit($id) {
//
//        $contact = $this->contact->find($id);
//        if (count($contact) != 1) {
//            return Helpers::redirectWithMessage('contact.list', 404, "Sorry error occured !");
//        }
//        return view('admin.contact.add', compact('contact'));
//    }
//
//    public function update(Request $request, $id) {
//
//
//        if ($this->request->file('file') != null) {
//            $this->myValidator($request);
//        } else {
//            $this->myValidator($request, true);
//        }
//
//        //get all form input data
//        $data = $request->except('file', '_token');
//        $data['contact_date'] = Helpers::formatDateBasic($data['contact_date']);
//
//        //upload file if isset
//        $uploadStatus = array();
//        if ($this->request->file('file') != null) {
//            //validate file if not empty
//            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');
//
//            if ($uploadStatus['status'] != 200) {
//                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
//            }
//        }
//
//        $contact = $this->contact->find($id);
//
//        //file upload passed successfuly and now perfom a delete
//        if ($this->request->file('file') != null) {
//            $data['image_url'] = $uploadStatus['fileLocationName'];
//            $deleteStatus = FileManps::deleteFiles(array($contact->image_url));
//        }
//
//        $contact->update($data);
//        return Helpers::redirectWithMessage('contact.list', 200, "Congragulations updated !");
//    }

//    public function destroy($id) {
//        $contact = $this->contact->find($id);
//        if (count($contact) != 1) {
//            return Helpers::redirectWithMessage('contact.list', 500, "Invalid operation");
//        }
//
//        $deleteStatus = FileManps::deleteFiles(array($contact->image_url));
//        $contact->delete();
//        return Helpers::redirectWithMessage('contact.list', 200, "Successfuly deleted");
//    }
//
//    public function visiblity($id, $value) {
//        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value,array('0','1'))) {
//            return Helpers::redirectWithMessage('contact.list', 500, "Invalid value");
//        }
//        $contact = $this->contact->find($id);
//        if (count($contact) != 1) {
//            return Helpers::redirectWithMessage('contact.list', 500, "Invalid operation");
//        }
//        $data['visible'] = $value;
//        $contact->update($data);
//        return Helpers::redirectWithMessage('contact.list', 200, "Successful update !");
//    }

//    public function myValidator($request, $update = false) {
//
//        $validationConfigs = [
//            'title' => 'required',
//            'link_url' => 'nullable|active_url',
//            'video_url' => 'nullable|active_url',
//            'brief_description' => 'required',
//        ];
//
//        if ($update == false) {
//            $validationConfigs['file'] = 'required|image|max:100000';
//        } elseif ($update == true) {
//            $validationConfigs['file'] = 'nullable|image|max:100000';
//        }
//
//        $this->validate($request, $validationConfigs);
//    }

}
