<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('home.home');
    }
    public function showLogin()
    {
        return view('home.login');
    }
    public function showInfo()
    {
        return view('home.info');
    }
    public function showRequest()
    {
        return view('home.request.index');
    }
}
