<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    //
    public function fileUpload(Request $request)
    {

        // file Validation...
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        // fetch file from requrest:-
        $file = $request->file('file');

        // give the uniqure name to file :-
        $fileName = time() . "_" . $file->getClientOriginalName();

        // store the file in the  storage/app/public/upload
        $path = $file->storeAs('upload', $fileName, 'public');
        // echo " file path". $path;

        // show file 
        $fileNameArray = explode('/', $path);
        $displayFile = $fileNameArray[1];

        // return ..
        return redirect('/upload')->with('success', 'file uplaod successfully...')->with('file', $displayFile);

        // to access this file run cmd :- php artisan storage:link

    }
}
