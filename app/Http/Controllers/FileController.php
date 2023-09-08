<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Files;

class FileController extends Controller
{
    public function create(Request $request) {

        $datetime = date('Ymd-His');

        $filename = \Str::slug($request->ordinance.'-'.$datetime).'.'.$request->file->extension(); 
        $transferfile = $request->file('file')->storeAs('public/files/', $filename);

        Files::create([
            'admin_id' => Auth::user()->id,
            'folder_id' => $request->parent_id,
            'ordinance' => $request->ordinance,
            'ord_number' => $request->ordinancenumber,
            'author' => $request->author,
            'co_author' => $request->coauthor,
            'date_approved'  => $request->dateapproved,
            'description' => $request->description,
            'filename' => $filename,
            'extension' => $request->file->extension()
        ]);

        return response()->json(['Error' => 0, 'Message'=> 'File Uploaded Successfully']); 

    }

    public function update(Request $request) {

        if(empty($request->file('file'))) {

            Files::where(['id' => $request->file_id])
                ->update([
                'ordinance' => $request->ordinance,
                'ord_number' => $request->ordinancenumber,
                'author' => $request->author,
                'co_author' => $request->coauthor,
                'date_approved'  => $request->dateapproved,
                'description' => $request->description,
            ]);

            return response()->json(['Error' => 0, 'Message' => 'File Updated Successfully']); 
        }
        if(!empty($request->file('file'))) {

            File::delete(public_path('storage/files/'.$request->oldfile.''));

            $datetime = date('Ymd-His');

            $filename = \Str::slug($request->ordinance.'-'.$datetime).'.'.$request->file->extension(); 
            $transferfile = $request->file('file')->storeAs('public/files/', $filename);

            Files::where(['id' => $request->file_id])
                ->update([
                'ordinance' => $request->ordinance,
                'ord_number' => $request->ordinancenumber,
                'author' => $request->author,
                'co_author' => $request->coauthor,
                'date_approved'  => $request->dateapproved,
                'description' => $request->description,
                'filename' => $filename,
                'extension' => $request->file->extension()
            ]);

            return response()->json(['Error' => 0, 'Message' => 'File Updated Successfully']); 
        }

    }

    public function delete(Request $request) {

        foreach(Files::where(['id' => $request->fileid])->get() as $fn) {

            File::delete(public_path('storage/files/'.$fn->filename.''));

        }

        Files::where(['id' => $request->fileid])->delete();
return response()->json(['Error' => 0]); 

    }
}
