<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Members;

class SessionsController extends Controller
{
    public function create()
    {
        $members = Members::where(['status' => 1])->orderBy('name', 'ASC')->get();

        return view('session.login-session', compact('members'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('dashboard');
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/')->with(['success'=>'You\'ve been logged out.']);
    }
}
