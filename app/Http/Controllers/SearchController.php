<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Others;
use App\Models\Category;
use App\Models\Files;
use App\Models\Members;

class SearchController extends Controller
{
    public function user(Request $request) {

        $users = User::where('name', 'like', '%' .$request->user_search. '%')->where(['type' => 0])
        
        ->where(['admin_id' => Auth::user()->id])->orderBy('created_at', 'DESC')->get();

        return view('table.user-table', compact('users'));

    }

    public function member(Request $request) {

        $members = Members::where('name', 'like', '%' .$request->member_search. '%')

        ->where(['admin_id' => Auth::user()->id])->orderBy('created_at', 'DESC')->get();

        return view('table.member-table', compact('members'));

    }

    public function category(Request $request) {

        $countfiles = Files::where(['admin_id' => Auth::user()->id])->orWhere(['admin_id' => Auth::user()->admin_id])->get();

        $category = Category::where('category', 'like', '%' .$request->category_search. '%')

        ->where(['parent_id' => $request->folderid])->where(['admin_id' => Auth::user()->id])->orderBy('created_at', 'DESC')->get();

        return view('table.category-table', compact('category', 'countfiles'));

    }

    public function file(Request $request) {

        $files = Files::orWhere('ordinance', 'like', '%' .$request->file_search. '%', 'ord_number', 'like', '%' .$request->file_search. '%')

        ->where(['folder_id' => $request->folderid])->where(['admin_id' => Auth::user()->id])->orderBy('created_at', 'DESC')->get();

        return view('table.file-table', compact('files'));

    }

    public function allfiles(Request $request) {

        $files = Files::orWhere('ordinance', 'like', '%' .$request->all_files_search. '%', 'ord_number', 'like', '%' .$request->all_files_search. '%')

        ->where(['admin_id' => Auth::user()->id])->orderBy('created_at', 'DESC')->get();

        return view('table.all-files-table', compact('files'));

    }
}
