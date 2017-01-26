<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

class FileUploadController extends Controller
{
    public function index()
    {
    	return view('upload.index');
    }

    public function upload(Request $request)
    {
    	$file = $request->file('filename');
    	echo "File name :" . $file->getClientOriginalName() . '<br>';
    	echo "File extension :" . $file->getClientOriginalExtension() . '<br>';
    	echo "File path :" . $file->getRealPath() . '<br>';
    	echo "File size :" . $file->getSize() . '<br>';
    	echo "File MIME type :" . $file->getMimeType() . '<br>';

    	// upload file 
    	$destinationPath = 'uploads';
    	$filename = $file->getClientOriginalName();
    	if ($file->move($destinationPath,$file->getClientOriginalName())) {
    		echo "<img src='uploads/".$filename."'>";
    	}

    }


}
