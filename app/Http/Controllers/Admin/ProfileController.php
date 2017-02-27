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
use App\User;

class ProfileController extends Controller {

    public function __construct(Request $request, User $user) {
        $this->request = $request;
        $this->user = $user;
    }

    public function edit($id) {

        $user = $this->user->find($id);
        if (count($user) != 1) {
            return Helpers::redirectWithMessage('dashboard', 404, "Sorry error occured !");
        }
        return view('admin.profile.add', compact('user'));
    }

    public function update(Request $request, $id) {

            $this->myValidator($request, true, $id);

        //get all form input data
        $data = $request->except('file', '_token');
        if ($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $user = $this->user->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($user->image_url));
        }

        $user->update($data);
        return Helpers::redirectWithMessage('profile.edit', 200, "Congragulations updated !", array($user->id));
    }

    public function myValidator($request, $update = false, $id = null) {

        $validationConfigs = [
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($id)],
            'file' => 'nullable|image|max:100000',
        ];

        if ($update == false) {
            $validationConfigs['password'] = 'required';
        }

        $this->validate($request, $validationConfigs);
    }

}
