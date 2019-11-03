<?php


namespace App\Http\Controllers\Vue;

use App\Http\Controllers\Controller;
use Illuminate\Http\FileHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\SafeStorage;
use Symfony\Component\Finder\SplFileInfo;

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

    public function downloadFile(){
        return response()->download("/Users/zhudechao/githup/php_laravel6/src/public/storage/tibet-1.jpg");
    }
}
