<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authentication(Request $request)
    {
        dd(array_keys(config('auth.guards')), config('auth.guards'));
        $rules = [
            'username'  => 'required',
            'password'  => 'required'
        ];
        $credentials = $request->validate($rules);

        $admin = auth()->guard('admin')->attempt($credentials);
        if ($admin) {
            $request->session()->regenerate();
            return redirect()->route('admin.home');
        }

        return back()->withError('Pastikan email dan password telah diinputkan dengan benar.');
    }
}
