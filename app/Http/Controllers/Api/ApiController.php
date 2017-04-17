<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    //
    public function ApiSermon(){
        return response()->json(array("jean"=>"is my babay"));
    }
}
