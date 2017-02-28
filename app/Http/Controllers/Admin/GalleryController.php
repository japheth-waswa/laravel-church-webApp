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
use App\Model\Gallery;
use App\Model\GalleryCategory;

class GalleryController extends Controller {

    public function __construct(Request $request, Gallery $gallery, GalleryCategory $galleryCategory) {
        $this->request = $request;
        $this->gallery = $gallery;
        $this->galleryCategory = $galleryCategory;
    }

    public function index() {
        $gallerys = $this->gallery->orderBy('id', 'desc')->get();

        return view('admin.gallery.list', compact('gallerys'));
    }

    public function create() {
        $galleryCategories = $this->galleryCategory->where('visible', 1)->get();
        if (count($galleryCategories) < 1) {
            return Helpers::redirectWithMessage('gallerycategory.list', 404, "please add category or set visible!");
        }
        return view('admin.gallery.add', compact('galleryCategories'));
    }

    public function store(Request $request) {

        //validate inputs
        $this->myValidator($request);

        //get all form input data
        $data = $request->except('file', '_token');

        //validate file
        $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

        if ($uploadStatus['status'] == 200) {
            $data['image_urls'] = $uploadStatus['fileLocationName'];
            //create the model
            $this->gallery->create($data);
            return Helpers::redirectWithMessage('gallery.list', 200, "Congragulations saved !");
        }
        if ($uploadStatus['status'] != 200) {
            return Redirect::back()->with('errorCustom', $uploadStatus['message']);
        }
    }

    public function edit($id) {
        $galleryCategories = $this->galleryCategory->where('visible', 1)->get();
        if (count($galleryCategories) < 1) {
            return Helpers::redirectWithMessage('gallerycategory.list', 404, "please add category or set visible!");
        }
        $gallery = $this->gallery->find($id);
        if (count($gallery) != 1) {
            return Helpers::redirectWithMessage('gallery.list', 404, "Sorry error occured !");
        }
        return view('admin.gallery.add', compact('gallery', 'galleryCategories'));
    }

    public function update(Request $request, $id) {
        //not allowed to edit image for slideshows when updating
        $gallerySlideshow = $this->confirmCategory($id);


        if ($this->request->file('file') != null) {
            $this->myValidator($request, null, $id);
        } else {
            $this->myValidator($request, true, $id);
        }

        //get all form input data
        $data = $request->except('file', '_token');
        //upload file if isset
        $uploadStatus = array();
        if ($this->request->file('file') != null && array_key_exists('status', $gallerySlideshow) == true) {
            //validate file if not empty
            $uploadStatus = FileManps::uploadFile($this->request->file('file'), 'image');

            if ($uploadStatus['status'] != 200) {
                return Redirect::back()->with('errorCustom', $uploadStatus['message']);
            }
        }

        $gallery = $this->gallery->find($id);
        //file upload passed successfuly and now perfom a delete
        if ($this->request->file('file') != null && array_key_exists('status', $gallerySlideshow) == true) {
            $data['image_urls'] = $uploadStatus['fileLocationName'];
            $deleteStatus = FileManps::deleteFiles(array($gallery->image_urls));
        }

        $gallery->update($data);
        return Helpers::redirectWithMessage('gallery.list', 200, "Congragulations updated !");
    }

    public function destroy($id) {
        $gallery = $this->gallery->find($id);
        if (count($gallery) != 1) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($gallery->image_url));
        $gallery->delete();
        return Helpers::redirectWithMessage('gallery.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value, array('0', '1'))) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid value");
        }
        $gallery = $this->gallery->find($id);
        if (count($gallery) != 1) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $gallery->update($data);
        return Helpers::redirectWithMessage('gallery.list', 200, "Successful update !");
    }

    public function manageImages($id) {
        $gallery = $this->confirmCategory($id);

        if (array_key_exists('status', $gallery)) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid reqeust");
        }

        return view('admin.gallery.manageimages', compact('gallery'));
    }

    public function manageImageStore($id) {

        $gallery = $this->confirmCategory($id);
        if (array_key_exists('status', $gallery)) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid reqeust");
        }

        $inputData = $this->request->except('file', '_token');
        $idsHolder = $inputData['idsHolder'];
        if ($idsHolder == null) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid request to manage images.");
        }

        //get the string containing the files unique name ids
        $fileInputIdsArray = explode(',', $inputData['idsHolder']);
        //loop through each confirming if they exist,uploading and geting the image_url and storing in an array.
        $newArrayImageUrls = array();
        foreach ($fileInputIdsArray as $fileInputId) {
            if ($this->request->file('file_' . $fileInputId) != null) {
                //perfom an upload
                $uploadStatus = FileManps::uploadFile($this->request->file('file_' . $fileInputId), 'image');

                if ($uploadStatus['status'] == 200) {
                    //store in the newArrayImageUrls variable
                    $newArrayImageUrls[] = $uploadStatus['fileLocationName'];
                }
            }
        }
        $currentImageUrlsArray = explode(',', $gallery->image_urls);
        $mergedImageUrlsArray = array_merge($currentImageUrlsArray, $newArrayImageUrls);
        $finalImageUrls = implode(',', $mergedImageUrlsArray);

        $data['image_urls'] = $finalImageUrls;
        $gallery->update($data);
        return Helpers::redirectWithMessage('gallery.list', 200, "Congragulations images successfuly managed!");
    }

    public function deleteImageCollection($id) {

        $gallery = $this->confirmCategory($id);
        if (array_key_exists('status', $gallery)) {
            return Helpers::redirectWithMessage('gallery.list', 500, "Invalid reqeust");
        }

        $inputData = $this->request->all();
        $fileLink = $inputData['file_link'];
        $imageLinksArray = explode(',', $gallery->image_urls);
        $i = -1;
        foreach ($imageLinksArray as $imageLink) {
            $i++;
            if ($imageLink == $fileLink) {
                unset($imageLinksArray[$i]);
            }
        }

        $finalImageUrls = implode(',', $imageLinksArray);

        $data['image_urls'] = $finalImageUrls;
        $gallery->update($data);
        return Helpers::redirectWithMessage('gallery.manageimages', 200, "Congragulations deleted image successfuly!", array($id));
    }

    public function confirmCategory($id) {
        $gallery = $this->gallery->find($id);

        if (count($gallery) != 1 && $gallery->gallerycategory == null) {
            return array('status' => 500);
        }
        if ($gallery->gallerycategory->url_key != "slideshow") {
            return array('status' => 500);
        }

        return $gallery;
    }

    public function myValidator($request, $update = false, $id = null) {

        $validationConfigs = [
            'title' => 'required',
            'audio_url' => 'nullable|active_url',
            'video_url' => 'nullable|active_url',
            'pdf_url' => 'nullable|active_url',
            'sermon_date' => 'date',
            'brief_description' => 'required',
        ];

        if ($update == false) {
            $validationConfigs['file'] = 'required|image|max:100000';
        } elseif ($update == true) {
            $validationConfigs['file'] = 'nullable|image|max:100000';
        }

        $this->validate($request, $validationConfigs);
    }

}
