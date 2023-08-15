<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeathStoredController extends Controller
{
    public function index()
    {
        // $deathstored = MarriageLicense::all();

        return view('admin.database.deathstored.index'); //, ['deathstored' => $deathstored]);
    }
}
