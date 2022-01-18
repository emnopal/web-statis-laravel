<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function registerForm(Request $request)
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'bahasa' => $request->input('bahasa'),
            'bio' => $request->input('bio'),
            'all'=>$request->all()
        ];

        return view('home', compact('data'));
    }
}
