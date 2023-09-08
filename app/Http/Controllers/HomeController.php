<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Others;
use App\Models\Category;
use App\Models\Files;
use App\Models\Members;

class HomeController extends Controller
{

    public function guest() {

        $recent_files = Files::orderBy('date_approved', 'DESC')->limit(4)->get();
        
        $files = Files::orderBy('date_approved', 'DESC')->get();

        $members = Members::where(['status' => 1])->orderBy('name', 'ASC')->get();

        return view('guest', compact('files', 'recent_files', 'members'));

    }

    public function home()
    {

        if(Auth::user()->type == 1) {
            foreach(Others::where(['admin_id' => Auth::user()->id])->get() as $others) {
                $vision = $others->vision;
                $mission = $others->mission;
            }
            $members = Members::where(['admin_id' => Auth::user()->id])->where(['status' => 1])->orderBy('name', 'ASC')->get();
            $users = User::where(['admin_id' => Auth::user()->id])->count();
            $categories = Category::where(['admin_id' => Auth::user()->id])->count();
            $files = Files::where(['admin_id' => Auth::user()->id])->count();
            $sbmembers = Members::where(['admin_id' => Auth::user()->id])->count();
        }
        if(Auth::user()->type == 0) {
            foreach(Others::where(['admin_id' => Auth::user()->admin_id])->get() as $others) {
                $vision = $others->vision;
                $mission = $others->mission;
            }
            $members = Members::where(['admin_id' => Auth::user()->admin_id])->where(['status' => 1])->orderBy('name', 'ASC')->get();
            $users = User::where(['admin_id' => Auth::user()->admin_id])->count();
            $categories = Category::where(['admin_id' => Auth::user()->admin_id])->count();
            $files = Files::where(['admin_id' => Auth::user()->admin_id])->count();
            $sbmembers = Members::where(['admin_id' => Auth::user()->admin_id])->count();
        }

        return view('dashboard', compact('users', 'categories', 'files', 'vision', 'mission', 'members', 'sbmembers'));
    }

    public function allusers() {

        if(Auth::user()->type == 1) {
            $users = User::where(['type' => 0])->where(['admin_id' => Auth::user()->id])->orderBy('name', 'ASC')->get();
            $members = Members::where(['admin_id' => Auth::user()->id])->where(['status' => 1])->orderBy('name', 'ASC')->get();
            return view('laravel-examples.user-management', compact('users', 'members'));
        }
        else {
            $home = new HomeController;
            return $home->home();
        }

    }
    public function sbmember() {

        if(Auth::user()->type == 1) {
            $members = Members::where(['admin_id' => Auth::user()->id])->orderBy('from_year', 'DESC')->get();
        }
        if(Auth::user()->type == 0) {
            $members = Members::where(['admin_id' => Auth::user()->admin_id])->orderBy('from_year', 'DESC')->get();
        }

        return view('sbmember', compact('members'));

    }
    public function filemanager(Request $request) {

         $folderid = $request->id;

         $countfiles = Files::where(['admin_id' => Auth::user()->id])->orWhere(['admin_id' => Auth::user()->admin_id])->get();

        if(Auth::user()->type == 1) { 

            if($folderid == 0) {

                $category = Category::where(['parent_id' => $folderid])->where(['admin_id' => Auth::user()->id])->orderBy('category', 'ASC')->get();

                $members = Members::where(['admin_id' => Auth::user()->id])->where(['status' => 1])->orderBy('name', 'ASC')->get();

                return view('file-manager', compact('category', 'folderid', 'countfiles', 'members'));

            }
            if($folderid != 0) {

                $category = Category::where(['parent_id' => $folderid])->where(['admin_id' => Auth::user()->id])->orderBy('category', 'ASC')->get();

                $files = Files::where(['folder_id' => $folderid])->where(['admin_id' => Auth::user()->id])->orderBy('date_approved', 'DESC')->get();
                
                $get = Category::where(['id' => $folderid])->get();

                $authors = Members::orderBy('from_year', 'DESC')->get();

                foreach($get as $get) { $foldername = $get->category; break; }

                $members = Members::where(['admin_id' => Auth::user()->id])->where(['status' => 1])->orderBy('name', 'ASC')->get();

                return view('file-manager', compact('category', 'folderid', 'foldername', 'files', 'authors', 'countfiles', 'members'));

            }
        }

        if(Auth::user()->type == 0) { 

            if($folderid == 0) {

                $category = Category::where(['parent_id' => $folderid])->where(['admin_id' => Auth::user()->admin_id])->orderBy('category', 'ASC')->get();

                $members = Members::where(['admin_id' => Auth::user()->admin_id])->where(['status' => 1])->orderBy('name', 'ASC')->get();

                return view('file-manager', compact('category', 'folderid', 'countfiles', 'members'));

            }
            if($folderid != 0) {

                $category = Category::where(['parent_id' => $folderid])->where(['admin_id' => Auth::user()->admin_id])->orderBy('category', 'ASC')->get();

                $files = Files::where(['folder_id' => $folderid])->where(['admin_id' => Auth::user()->admin_id])->orderBy('date_approved', 'DESC')->get();
                
                $get = Category::where(['id' => $folderid])->get();

                $authors = Members::orderBy('from_year', 'DESC')->get();

                foreach($get as $get) { $foldername = $get->category; break; }

                $members = Members::where(['admin_id' => Auth::user()->admin_id])->where(['status' => 1])->orderBy('name', 'ASC')->get();

                return view('file-manager', compact('category', 'folderid', 'foldername', 'files', 'authors', 'countfiles', 'members'));

            }
        }

    }

    public function allfiles() {

        if(Auth::user()->type == 1) {

            $files = Files::where(['admin_id' => Auth::user()->id])->orderBy('date_approved', 'DESC')->get();

            $members = Members::where(['admin_id' => Auth::user()->id])->where(['status' => 1])->orderBy('name', 'ASC')->get();

        }

        if(Auth::user()->type == 0) {

            $files = Files::where(['admin_id' => Auth::user()->admin_id])->orderBy('date_approved', 'DESC')->get();

            $members = Members::where(['admin_id' => Auth::user()->admin_id])->where(['status' => 1])->orderBy('name', 'ASC')->get();

        }

        return view('all-files', compact( 'files', 'members'));

    }
}
