<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
class UploadController extends Controller
{
    public function file_upload(){
        return view('uploads.upload_form');
    }
    public function store(){
        if(request()->hasFile('uploadfile')) {
            $file = request()->file('uploadfile')->store('public');
        }
        $upload = Upload::create([
            'filepath' => $file
        ]);

        return view('uploads.successful_upload', compact('upload'));
    }
}
