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
use App\Model\Settings;

class SettingsController extends Controller {

    public function __construct(Request $request, Settings $settings) {
        $this->request = $request;
        $this->settings = $settings;
    }

    public function edit($id) {
        $settings = $this->settings->first();

        return view('admin.settings.edit', compact('settings'));
    }

    public function update(Request $request, $id) {

        $this->myValidator($request, true);

        //get all form input data
        $data = $request->except('file', '_token');
        //upload file if isset
        $uploadStatus = array();
        $uploadStatusLoginImage = array();
        $uploadStatusFaviconImage = array();
        $uploadStatusPageImage = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }
        if ($this->request->file('login_image') != null) {
            //validate file if not empty
            $uploadStatusLoginImage = FileManps::uploadFile($this->request->file('login_image'), 'image');

            if ($uploadStatusLoginImage['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatusLoginImage['message']);
            }
        }
        if ($this->request->file('favicon_image') != null) {
            //validate file if not empty
            $uploadStatusFaviconImage = FileManps::uploadFile($this->request->file('favicon_image'), 'image');

            if ($uploadStatusFaviconImage['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatusFaviconImage['message']);
            }
        }
        if ($this->request->file('page_menu_image') != null) {
            //validate file if not empty
            $uploadStatusPageImage = FileManps::uploadFile($this->request->file('page_menu_image'), 'image');

            if ($uploadStatusPageImage['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatusPageImage['message']);
            }
        }

        $settings = $this->settings->first();

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['logo_url'] = $uploadStatus['fileLocationName'];
            if ($settings != null) {
                $deleteStatus = FileManps::deleteFiles(array($settings->logo_url));
            }
        }
        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('login_image') != null) {
            $data['login_logo_url'] = $uploadStatusLoginImage['fileLocationName'];
            if ($settings != null) {
                $deleteStatus = FileManps::deleteFiles(array($settings->login_logo_url));
            }
        }
        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('favicon_image') != null) {
            $data['fav_icon_url'] = $uploadStatusFaviconImage['fileLocationName'];
            if ($settings != null) {
                $deleteStatus = FileManps::deleteFiles(array($settings->fav_icon_url));
            }
        }
        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('page_menu_image') != null) {
            $data['page_menu_url'] = $uploadStatusPageImage['fileLocationName'];
            if ($settings != null) {
                $deleteStatus = FileManps::deleteFiles(array($settings->page_menu_url));
            }
        }

        if ($settings == null) {
            $settings = $this->settings->create($data);
        } else {
            $settings->update($data);
        }

        return Helpers::redirectWithMessage('settings.edit', 200, "Congragulations updated !", array($settings->id));
    }

    public function myValidator($request, $update = false, $id = null) {

        $validationConfigs = [
            'website_name' => 'required',
            'theme_description' => 'required',
            'theme_title' => 'required',
            'physical_address' => 'required',
            'primary_email' => 'required|email',
            'secondary_email' => 'nullable|email',
            'primary_phone' => 'required',
            'facebook_url' => 'nullable|active_url',
            'twitter_url' => 'nullable|active_url',
            'youtube_url' => 'nullable|active_url',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
            $validationConfigs['login_image'] = 'required|image|max:100000';
            $validationConfigs['favicon_image'] = 'required|image|max:100000';
            $validationConfigs['page_menu_image'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
            $validationConfigs['login_image'] = 'nullable|image|max:100000';
            $validationConfigs['favicon_image'] = 'nullable|image|max:100000';
            $validationConfigs['page_menu_image'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
