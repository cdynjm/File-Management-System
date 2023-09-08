<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    public function create(Request $request)
    {

        User::create([
            'name' => $request->lastname." ".$request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'location' => $request->address,
            'about_me' => null,
            'admin_id' => Auth::user()->id,
            'type' => 0
        ]);

        return response()->json(['Error' => 0, 'Message'=> 'Account Created Successfully']); 
       
    }

    public function update(Request $request) {

        User::where(['id' => $request->userid])
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->address
        ]);

        return response()->json(['Error' => 0, 'Message'=> 'User Updated Successfully']); 

    }

    public function delete(Request $request) {

        User::where(['id' => $request->userid])->delete();

        return response()->json(['Error' => 0, 'Message'=> 'User Deleted Successfully']); 

    }
}
