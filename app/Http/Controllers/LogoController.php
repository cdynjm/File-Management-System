<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Logo;

class LogoController extends Controller
{
    public function create(Request $request) {

        $datetime = date('Ymd-His');

        $logoname = \Str::slug(Auth::user()->name.'-'.$datetime).'.'.$request->profile->extension(); 
        $transferfile = $request->file('profile')->storeAs('public/logo/', $logoname);

        Logo::where(['admin_id' => Auth::user()->id])->update([
            'admin_id' => Auth::user()->id,
            'logo' => $logoname
        ]);

        return response()->json(['Error' => 0, 'Message'=> 'Logo Uploaded Successfully']); 

    }
}
