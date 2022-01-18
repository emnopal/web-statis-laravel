<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(): Factory|View|Application
    {
        return view('welcome');
    }

    public function register(): Factory|View|Application
    {
        return view('register');
    }

    public function registerForm(Request $request): Application|Factory|View
    {
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'bahasa_indonesia' => $request->input('bahasa_indonesia'),
            'bio' => $request->input('bio')
        ];

        return view('home', compact('data'));
    }
}
