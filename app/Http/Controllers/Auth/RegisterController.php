<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama'      => 'required|string|max:100|regex:/^[a-zA-Z\s]+$/',
            'nim'       => 'required|numeric|max_digits:15',
            'email'     => 'required|string|max:100|email',
            'no_hp'     => 'required|numeric|max_digits:15',
            'tanggal'   => 'required|numeric|between:1,31',
            'bulan'     => 'required|numeric|between:1,12',
            'tahun'     => 'required|numeric|digits:4',
            'password'  => 'required|string|min:5|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ];
        $messages = [
            'nama.regex'        => 'Only accepts letters.',
            'password.regex'    => 'Passwords must contain at least 1 uppercase letter, lowercase letter, and numbers.'
        ];
        $attributes = [
            'nama'      => 'Nama Lengkap',
            'nim'       => 'NIM',
            'email'     => 'Email',
            'no_hp'     => 'No Hp',
            'tanggal'   => 'Tanggal',
            'bulan'     => 'Bulan',
            'tahun'     => 'Tahun',
            'password'  => 'Password',
        ];
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        $validator->after(function ($validator) use ($request) {
            $day    = $request->input('day');
            $month  = $request->input('month');
            $year   = $request->input('year');

            $date = checkdate($day, $month, $year);
            if (!$date) $validator->errors()->add('tanggal', 'Invalid date in the given month and year.');
        });
        if ($validator->fails()) return back()->withErrors($validator)->withInput();



        dd($request->all());
    }
}
