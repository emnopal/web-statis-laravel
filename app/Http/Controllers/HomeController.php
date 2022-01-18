<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        try{
            return view('home');
        } catch (\Exception) {
            return redirect()->route('/');
        }
    }
}
