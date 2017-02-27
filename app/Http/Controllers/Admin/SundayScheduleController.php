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
use App\Model\SundaySchedule;

class SundayScheduleController extends Controller {

    public function __construct(Request $request, SundaySchedule $sundayschedule) {
        $this->request = $request;
        $this->sundayschedule = $sundayschedule;
    }

    public function index() {
        $sundayscheduless = $this->sundayschedule->orderBy('sunday_date', 'asc')->get();
        return view('admin.sunday.list', compact('sundayscheduless'));
    }

    public function create() {
        return view('admin.sunday.add');
    }
    public function show($id){
         $sundayschedule = $this->sundayschedule->find($id);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 404, "Sorry error occured !");
        }
        $pages  = $sundayschedule->sundaypages->sortBy('page_order');
        
        return view('admin.sunday.page.show', compact('sundayschedule','pages'));
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request, true);

        //get all form input data
        $data = $request->except('_token');
        $data['sunday_date'] = Helpers::formatDateBasic($data['sunday_date']);

        $this->sundayschedule->create($data);
        return Helpers::redirectWithMessage('sunday.list', 200, "Congragulations saved !");
    }

    public function edit($id) {

        $sundayschedule = $this->sundayschedule->find($id);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 404, "Sorry error occured !");
        }
        return view('admin.sunday.add', compact('sundayschedule'));
    }

    public function update(Request $request, $id) {

        $this->myValidator($request, true,$id);

        //get all form input data
        $data = $request->except('_token');
        $data['sunday_date'] = Helpers::formatDateBasic($data['sunday_date']);

        $sundayschedule = $this->sundayschedule->find($id);

        $sundayschedule->update($data);
        return Helpers::redirectWithMessage('sunday.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $sundayschedule = $this->sundayschedule->find($id);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 500, "Invalid operation");
        }

        $sundayschedule->delete();
        return Helpers::redirectWithMessage('sunday.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('sunday.list', 500, "Invalid value");
        }
        $sundayschedule = $this->sundayschedule->find($id);
        if (count($sundayschedule) != 1) {
            return Helpers::redirectWithMessage('sunday.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $sundayschedule->update($data);
        return Helpers::redirectWithMessage('sunday.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false,$id=null) {

        $validationConfigs = [
            'theme_title' => 'required',
            'theme_description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
//            if($id != null){}
            $validationConfigs['sunday_date'] = ['required',Rule::unique('sunday_schedules')->ignore($id)];
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
