<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to the intended page
            return $this->authenticated($request, Auth::user());
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    protected function authenticated($user)
    {
        switch ($user->role) {
            case 'admin':
                return redirect('/dashboard');
            case 'birth_employee':
                return redirect('/ebdashboard');
            case 'marriage_employee':
                return redirect('/emdashboard');
            case 'death_employee':
                return redirect('/eddashboard');
            default:
                return redirect('/');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
