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
use App\Model\Donation;

class DonationController extends Controller
{
     public function __construct(Request $request, Donation $donation) {
        $this->request = $request;
        $this->donation = $donation;
    }

    public function index() {
        $donations = $this->donation->orderBy('id', 'desc')->get();
        return view('admin.donation.list', compact('donations'));
    }

    public function create() {
        return view('admin.donation.add');
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
            $this->donation->create($data);
            return Helpers::redirectWithMessage('donation.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {

        $donation = $this->donation->find($id);
        if (count($donation) != 1) {
            return Helpers::redirectWithMessage('donation.list', 404, "Sorry error occured !");
        }
        return view('admin.donation.add', compact('donation'));
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

        $donation = $this->donation->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($donation->image_url));
        }

        $donation->update($data);
        return Helpers::redirectWithMessage('donation.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $donation = $this->donation->find($id);
        if (count($donation) != 1) {
            return Helpers::redirectWithMessage('donation.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($donation->image_url));
        $donation->delete();
        return Helpers::redirectWithMessage('donation.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value,array('0','1'))) {
            return Helpers::redirectWithMessage('donation.list', 500, "Invalid value");
        }
        $donation = $this->donation->find($id);
        if (count($donation) != 1) {
            return Helpers::redirectWithMessage('donation.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $donation->update($data);
        return Helpers::redirectWithMessage('donation.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false) {

        $validationConfigs = [
            'title' => 'required',
            'facebook_url' => 'nullable|active_url',
            'twitter_url' => 'nullable|active_url',
            'youtube_url' => 'nullable|active_url',
            'description' => 'required',
            'content' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }
}
