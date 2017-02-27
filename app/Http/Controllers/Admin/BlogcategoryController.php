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
use App\Model\BlogCategory;

class BlogcategoryController extends Controller {

    public function __construct(Request $request, BlogCategory $blogcategory) {
        $this->request = $request;
        $this->blogcategory = $blogcategory;
    }

    public function index() {
        $blogcategoryss = $this->blogcategory->orderBy('id', 'desc')->get();
        return view('admin.blog.category.list', compact('blogcategoryss'));
    }

    public function create() {
        return view('admin.blog.category.add');
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request, true);

        //get all form input data
        $data = $request->except('_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);

        $this->blogcategory->create($data);
        return Helpers::redirectWithMessage('blogcategory.list', 200, "Congragulations saved !");
    }

    public function edit($id) {

        $blogcategory = $this->blogcategory->find($id);
        if (count($blogcategory) != 1) {
            return Helpers::redirectWithMessage('blogcategory.list', 404, "Sorry error occured !");
        }
        return view('admin.blog.category.add', compact('blogcategory'));
    }

    public function update(Request $request, $id) {

        $this->myValidator($request, true,$id);

        //get all form input data
        $data = $request->except('_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);

        $blogcategory = $this->blogcategory->find($id);

        $blogcategory->update($data);
        return Helpers::redirectWithMessage('blogcategory.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $blogcategory = $this->blogcategory->find($id);
        if (count($blogcategory) != 1) {
            return Helpers::redirectWithMessage('blogcategory.list', 500, "Invalid operation");
        }

        $blogcategory->delete();
        return Helpers::redirectWithMessage('blogcategory.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('blogcategory.list', 500, "Invalid value");
        }
        $blogcategory = $this->blogcategory->find($id);
        if (count($blogcategory) != 1) {
            return Helpers::redirectWithMessage('blogcategory.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $blogcategory->update($data);
        return Helpers::redirectWithMessage('blogcategory.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false,$id=null) {

        $validationConfigs = [
            'description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
//            if($id != null){}
            $validationConfigs['title'] = ['required',Rule::unique('blog_categories')->ignore($id)];
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
