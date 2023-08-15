<?php

namespace App\Http\Controllers\Employee\MarriageCert;

use Illuminate\Http\Request;
use App\Models\MarriageLicense;
use App\Http\Controllers\Controller;

class EMmarriageCertController extends Controller
{
    public function index()
    {
        $marriagelicense = MarriageLicense::all();

        return view('employee.marriagecertificate.marriageregister.index', ['marriagelicense' => $marriagelicense]);
    }
}
