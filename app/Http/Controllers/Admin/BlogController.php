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
use App\Model\Blog;
use App\Model\BlogCategory;

class BlogController extends Controller {

    public function __construct(Request $request, Blog $blog, BlogCategory $blogCategory) {
        $this->request = $request;
        $this->blog = $blog;
        $this->blogCategory = $blogCategory;
    }

    public function index() {
        $blogs = $this->blog->orderBy('id', 'desc')->get();

        return view('admin.blog.list', compact('blogs'));
    }

    public function create() {
        $blogCategories = $this->blogCategory->where('visible', 1)->get();
        if (count($blogCategories) < 1) {
            return Helpers::redirectWithMessage('blogcategory.list', 404, "please add category or set visible!");
        }
        return view('admin.blog.add', compact('blogCategories'));
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
            $data['url_key'] = Helpers::strToSlug($data['title']);
            $data['publish_date'] = Helpers::formatDateBasic($data['publish_date']);
            //create the model
            $this->blog->create($data);
            return Helpers::redirectWithMessage('blog.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {
        $blogCategories = $this->blogCategory->where('visible', 1)->get();
        if (count($blogCategories) < 1) {
            return Helpers::redirectWithMessage('blogcategory.list', 404, "please add category or set visible!");
        }
        $blog = $this->blog->find($id);
        if (count($blog) != 1) {
            return Helpers::redirectWithMessage('blog.list', 404, "Sorry error occured !");
        }
        return view('admin.blog.add', compact('blog','blogCategories'));
    }

    public function update(Request $request, $id) {


        if ($this->request->file('file') != null) {
            $this->myValidator($request,null,$id);
        } else {
            $this->myValidator($request, true, $id);
        }

        //get all form input data
        $data = $request->except('file', '_token');
        $data['url_key'] = Helpers::strToSlug($data['title']);
        $data['publish_date'] = Helpers::formatDateBasic($data['publish_date']);
        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $blog = $this->blog->find($id);

        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null) {
            $data['image_url'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($blog->image_url));
        }

        $blog->update($data);
        return Helpers::redirectWithMessage('blog.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $blog = $this->blog->find($id);
        if (count($blog) != 1) {
            return Helpers::redirectWithMessage('blog.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($blog->image_url));
        $blog->delete();
        return Helpers::redirectWithMessage('blog.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('blog.list', 500, "Invalid value");
        }
        $blog = $this->blog->find($id);
        if (count($blog) != 1) {
            return Helpers::redirectWithMessage('blog.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $blog->update($data);
        return Helpers::redirectWithMessage('blog.list', 200, "Successful update !");
    }

    public function myValidator($request, $update = false, $id = null) {

        $validationConfigs = [
            'title' => ['required', Rule::unique('blogs')->ignore($id)],
            'content' => 'required',
            'brief_description' => 'required',
            'publish_date' => 'required|date',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
