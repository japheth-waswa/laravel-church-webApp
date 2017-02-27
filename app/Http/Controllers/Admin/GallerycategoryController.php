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
use App\Model\GalleryCategory;

class GallerycategoryController extends Controller {

    public function __construct(Request $request, GalleryCategory $gallerycategory) {
        $this->request = $request;
        $this->gallerycategory = $gallerycategory;
    }

    public function index() {
        $gallerycategoryss = $this->gallerycategory->orderBy('id', 'desc')->get();
        return view('admin.gallery.category.list', compact('gallerycategoryss'));
    }

    public function create() {
        return view('admin.gallery.category.add');
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request, true);

        //get all form input data
        $data = $request->except('_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);

        $this->gallerycategory->create($data);
        return Helpers::redirectWithMessage('gallerycategory.list', 200, "Congragulations saved !");
    }

    public function edit($id) {

        $gallerycategory = $this->gallerycategory->find($id);
        if (count($gallerycategory) != 1) {
            return Helpers::redirectWithMessage('gallerycategory.list', 404, "Sorry error occured !");
        }
        return view('admin.gallery.category.add', compact('gallerycategory'));
    }

    public function update(Request $request, $id) {

        $this->myValidator($request, true,$id);

        //get all form input data
        $data = $request->except('_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);

        $gallerycategory = $this->gallerycategory->find($id);

        $gallerycategory->update($data);
        return Helpers::redirectWithMessage('gallerycategory.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        return Helpers::redirectWithMessage('gallerycategory.list', 404, "That operation is not allowed contact the system administrator.");
        
        $gallerycategory = $this->gallerycategory->find($id);
        if (count($gallerycategory) != 1) {
            return Helpers::redirectWithMessage('gallerycategory.list', 500, "Invalid operation");
        }

        $gallerycategory->delete();
        return Helpers::redirectWithMessage('gallerycategory.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('gallerycategory.list', 500, "Invalid value");
        }
        $gallerycategory = $this->gallerycategory->find($id);
        if (count($gallerycategory) != 1) {
            return Helpers::redirectWithMessage('gallerycategory.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $gallerycategory->update($data);
        return Helpers::redirectWithMessage('gallerycategory.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false,$id=null) {

        $validationConfigs = [
            'description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
//            if($id != null){}
            $validationConfigs['title'] = ['required',Rule::unique('gallery_categories')->ignore($id)];
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
