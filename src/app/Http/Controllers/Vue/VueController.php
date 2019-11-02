<?php


namespace App\Http\Controllers\Vue;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VueController extends Controller
{
    public function index(){
        return view("vue/index");
    }

    public function uploadFile(Request $request){
        $ret = $request->file();
        return response()->json(array("message"=>"dd"));
    }

    public function viewer(){
        return view("vue.viewer");
    }
}
