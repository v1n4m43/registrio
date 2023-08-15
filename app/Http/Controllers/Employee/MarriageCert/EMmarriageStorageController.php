<?php

namespace App\Http\Controllers\Employee\MarriageCert;

use Illuminate\Http\Request;
use App\Models\MarriageLicense;
use App\Http\Controllers\Controller;

class EMmarriageStorageController extends Controller
{
    public function index()
    {
        $marriagestored = MarriageLicense::all();

        return view('employee.marriagecertificate.marriagestorage.index', ['marriagestored' => $marriagestored]);
    }
}
