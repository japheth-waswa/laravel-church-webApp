<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Sermon;
use Helpers;

class ApiController extends Controller
{
    public function __construct(Request $request,Sermon $sermon) {
        $this->request = $request;
        $this->sermon = $sermon;
    }

    public function ApiSermon(){
        $sermons = $this->sermon->where('visible', 1)->orderBy('sermon_date', 'desc')->get();
        return response()->json($sermons);
        //return response()->json(request()->user());
    }
}
