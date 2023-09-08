<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Category;
use App\Models\Files;

class CategoryController extends Controller
{
    public function create(Request $request) {

        Category::create([
            'admin_id' => Auth::user()->id,
            'category' => $request->category,
            'parent_id' => $request->parent_id
        ]);

        return response()->json(['Error' => 0, 'Message'=> 'Category Created Successfully']); 

    }

    public function update(Request $request) {

        Category::where(['id' => $request->folderid])
            ->update(['category' => $request->category]);

        return response()->json(['Error' => 0, 'Message'=> 'Category Updated Successfully']); 

    }

    public function delete(Request $request) {

        Category::where(['id' => $request->folderid])->orWhere(['parent_id' => $request->folderid])->delete();

        foreach(Files::where(['folder_id' => $request->folderid])->get() as $fn) {

            File::delete(public_path('storage/files/'.$fn->filename.''));

        }

        Files::where(['folder_id' => $request->folderid])->delete();

        return response()->json(['Error' => 0]); 

    }
}
