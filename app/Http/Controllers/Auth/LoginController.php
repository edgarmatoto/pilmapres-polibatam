<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authentication(Request $request)
    {
        $rules = [
            'nim'       => 'required',
            'password'  => 'required'
        ];
        $request->validate($rules);

        //== admin authentication
        $credentials['username']    = $request->nim;
        $credentials['password']    = $request->password;
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route("admin.home");
        }

        return back()->withError('Pastikan email dan password telah diinputkan dengan benar.');
    }
}
