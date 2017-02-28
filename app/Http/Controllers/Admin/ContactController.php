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
use App\Model\Contact;

class ContactController extends Controller {

    public function __construct(Request $request, Contact $contact) {
        $this->request = $request;
        $this->contact = $contact;
    }

    public function index() {
        $contacts = $this->contact->orderBy('created_at', 'desc')->get();
        return view('admin.contact.list', compact('contacts'));
    }
    public function show($id){
        $contact = $this->contact->find($id);
        if(count($contact) != 1){
            return Helpers::redirectWithMessage('contact.list', 500, "Invalid request !");
        }
        $data['viewed'] = 1;
        $contact->update($data);
        return view('admin.contact.managecontact', compact('contact'));
    }

}
