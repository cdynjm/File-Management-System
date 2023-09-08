<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Members;


class MemberController extends Controller
{
    public function create(Request $request) {

        $datetime = date('Ymd-His');

        $profilename = \Str::slug($request->lastname.'-'.$datetime).'.'.$request->photo->extension(); 
        $transferfile = $request->file('photo')->storeAs('public/photo/', $profilename);

        Members::create([
            'admin_id' => Auth::user()->id,
            'name' => $request->lastname." ".$request->firstname,
            'birthdate' => $request->birthdate,
            'address' => $request->address,
            'civil_status' => $request->civil,
            'position' => $request->position,
            'gender' => $request->gender,
            'status' => $request->status,
            'from_year' => $request->from_year,
            'to_year' => $request->to_year,
            'photo' => $profilename
        ]);

        return response()->json(['Error' => 0, 'Message'=> 'Member Created Successfully']); 
    }

    public function update(Request $request) {

        if(empty($request->file('photo'))) {

            Members::where(['id' => $request->memberid])
            ->update([
                'name' => $request->name,
                'birthdate' => $request->birthdate,
                'address' => $request->address,
                'civil_status' => $request->civil,
                'position' => $request->position,
                'gender' => $request->gender,
                'status' => $request->status,
                'from_year' => $request->from_year,
                'to_year' => $request->to_year,
            ]);

            return response()->json(['Error' => 0, 'Message'=> 'Member Updated Successfully']); 
        }

        if(!empty($request->file('photo'))) {

            File::delete(public_path('storage/photo/'.$request->oldphoto.''));

            $datetime = date('Ymd-His');

            $profilename = \Str::slug($request->name.'-'.$datetime).'.'.$request->photo->extension(); 
            $transferfile = $request->file('photo')->storeAs('public/photo/', $profilename);

            Members::where(['id' => $request->memberid])
            ->update([
                'name' => $request->name,
                'birthdate' => $request->birthdate,
                'address' => $request->address,
                'civil_status' => $request->civil,
                'position' => $request->position,
                'gender' => $request->gender,
                'status' => $request->status,
                'from_year' => $request->from_year,
                'to_year' => $request->to_year,
                'photo' => $profilename
            ]);

            return response()->json(['Error' => 0, 'Message'=> 'Member Updated Successfully']); 
        }
    }

    public function delete(Request $request) {

        Members::where(['id' => $request->memberid])->delete();

        File::delete(public_path('storage/photo/'.$request->photo.''));

        return response()->json(['Error' => 0, 'Message'=> 'SB Member Deleted Successfully']); 

    }
}
