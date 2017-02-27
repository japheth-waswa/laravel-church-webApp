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
use App\Model\SundayPage;
use App\Model\SundaySchedule;

class SundayPageController extends Controller {

    public function __construct(Request $request, SundayPage $sundayPage, SundaySchedule $sundayschedule) {
        $this->request = $request;
        $this->sundayPage = $sundayPage;
        $this->sundayschedule = $sundayschedule;
    }

//    public function index() {
//        $sundays = $this->sundayPage->orderBy('id', 'desc')->get();
//
//        return view('admin.sunday.page.list', compact('sundays'));
//    }

    public function create($id) {
        $sundayschedule = $this->sundayschedule->find($id);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 404, "Sorry error occured !");
        }
        return view('admin.sunday.page.add', compact('sundayschedule'));
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request);

        //get all form input data
        $data = $request->except('_token');

        $this->sundayPage->create($data);
        return Helpers::redirectWithMessage('sunday.show', 200, "Congragulations saved !", array($data['sunday_schedule_id']));
    }

    public function edit($id, $parent) {
        $sundayschedule = $this->sundayschedule->find($parent);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 404, "Sorry error occured !");
        }
        $sundayPage = $this->sundayPage->find($id);
        if (count($sundayPage) != 1) {
            return Helpers::redirectWithMessage('sunday.show', 404, "Sorry error occured !", array($parent));
        }
        return view('admin.sunday.page.add', compact('sundayschedule', 'sundayPage'));
    }

    public function update(Request $request, $id) {


        $this->myValidator($request, true, $id);
        //get all form input data
        $data = $request->except('_token');

        $sunday = $this->sundayPage->find($id);

        $sunday->update($data);
        return Helpers::redirectWithMessage('sunday.show', 200, "Congragulations updated !", array($data['sunday_schedule_id']));
    }

    public function orderPages(Request $request, $parent) {
        //get all form input data
        $data = $request->except('_token', '_method');
        if (count($data) > 0) {
            foreach ($data as $key => $value) {
                $sunday = $this->sundayPage->find($key);
                $fin['page_order'] = $value;
                $sunday->update($fin);
            }
        }

        return Helpers::redirectWithMessage('sunday.show', 200, "Congragulations ordered !",array($parent));
    }

    public function destroy($id, $parent) {
        $sundayschedule = $this->sundayschedule->find($parent);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 404, "Sorry error occured !");
        }
        $sundayPage = $this->sundayPage->find($id);
        if (count($sundayPage) != 1) {
            return Helpers::redirectWithMessage('sunday.show', 404, "Sorry error occured !", array($parent));
        }
        $sundayPage->delete();
        return Helpers::redirectWithMessage('sunday.show', 200, "Successfuly deleted", array($parent));
    }

    public function visiblity($id, $value, $parent) {
        $sundayschedule = $this->sundayschedule->find($parent);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 404, "Sorry error occured !");
        }
        $sundayPage = $this->sundayPage->find($id);
        if (count($sundayPage) != 1) {
            return Helpers::redirectWithMessage('sunday.show', 404, "Sorry error occured !", array($parent));
        }
        $data['visible'] = $value;
        $sundayPage->update($data);

        return Helpers::redirectWithMessage('sunday.show', 200, "Successful update !", array($parent));
    }

    public function myValidator($request, $update = false, $id = null) {

        $validationConfigs = [
            'page_content' => 'required',
            'page_order' => 'required',
        ];

        $this->validate($request, $validationConfigs);
    }

}
