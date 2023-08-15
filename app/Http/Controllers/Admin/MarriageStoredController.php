<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarriageLicense;
use Illuminate\Http\Request;

class MarriageStoredController extends Controller
{
    public function index()
    {
        $marriagestored = MarriageLicense::all();

        return view('admin.database.marriagestored.index', ['marriagestored' => $marriagestored]);
    }
}
