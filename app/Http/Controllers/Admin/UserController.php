<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserEmployee;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserEmployee::all();

        return view('admin.user.index', ['users' => $users]);
    }
}
