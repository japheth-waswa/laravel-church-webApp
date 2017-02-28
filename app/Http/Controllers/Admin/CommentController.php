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
use App\Model\Comment;

class CommentController extends Controller {

    public function __construct(Request $request, Comment $comment) {
        $this->request = $request;
        $this->comment = $comment;
    }

    public function index() {
        $comments = $this->comment->orderBy('created_at', 'desc')->get();
        return view('admin.comment.list', compact('comments'));
    }
    public function show($id){
        $comment = $this->comment->find($id);
        if(count($comment) != 1){
            return Helpers::redirectWithMessage('comment.list', 500, "Invalid request !");
        }
        $data['viewed'] = 1;
        $comment->update($data);
        return view('admin.comment.managecomment', compact('comment'));
    }

    public function destroy($id) {
        $comment = $this->comment->find($id);
        if (count($comment) != 1) {
            return Helpers::redirectWithMessage('comment.list', 500, "Invalid operation");
        }

        $deleteStatus = FileManps::deleteFiles(array($comment->image_url));
        $comment->delete();
        return Helpers::redirectWithMessage('comment.list', 200, "Successfuly deleted");
    }

    public function visiblity($id, $value) {
        if (!is_numeric($value) || !is_numeric($id) || !array_key_exists($value,array('0','1'))) {
            return Helpers::redirectWithMessage('comment.list', 500, "Invalid value");
        }
        $comment = $this->comment->find($id);
        if (count($comment) != 1) {
            return Helpers::redirectWithMessage('comment.list', 500, "Invalid operation");
        }
        $data['visible'] = $value;
        $comment->update($data);
        return Helpers::redirectWithMessage('comment.list', 200, "Successful update !");
    }


}
