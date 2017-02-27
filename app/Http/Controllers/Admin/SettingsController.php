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

//    public function index() {
//        $settingss = $this->settings->orderBy('id', 'desc')->get();
//
//        return view('admin.settings.list', compact('settingss'));
//    }
//
//    public function create() {
//        $settingsCategories = $this->settings->where('visible', 1)->get();
//        if (count($settingsCategories) < 1) {
//            return Helpers::redirectWithMessage('settingscategory.list', 404, "please add category or set visible!");
//        }
//        return view('admin.settings.add', compact('settingsCategories'));
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
//            $data['logo_url'] = $uploadStatus['fileLocationName'];
//            $data['url_key'] = Helpers::strToSlug($data['title']);
//            $data['publish_date'] = Helpers::formatDateBasic($data['publish_date']);
//            //create the model
//            $this->settings->create($data);
//            return Helpers::redirectWithMessage('settings.list', 200, "Congragulations saved !");
//        }
//        if ($uploadStatus['status'] != 200) {
//            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
//        }
//    }

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

//    public function destroy($id) {
//        $settings = $this->settings->find($id);
//        if (count($settings) != 1) {
//            return Helpers::redirectWithMessage('settings.list', 500, "Invalid operation");
//        }
//
//        $deleteStatus = FileManps::deleteFiles(array($settings->logo_url));
//        $settings->delete();
//        return Helpers::redirectWithMessage('settings.list', 200, "Successfuly deleted");
//    }
//
//    public function visiblity($id, $value) {
//        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
//            return Helpers::redirectWithMessage('settings.list', 500, "Invalid value");
//        }
//        $settings = $this->settings->find($id);
//        if (count($settings) != 1) {
//            return Helpers::redirectWithMessage('settings.list', 500, "Invalid operation");
//        }
//        $data['visible'] = $value;
//        $settings->update($data);
//        return Helpers::redirectWithMessage('settings.list', 200, "Successful update !");
//    }

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
