<?php

namespace App\Http\Controllers\Employee\MarriageCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EMqueuingController extends Controller
{
    public function index()
    {
        //$queuings = BirthCertificateDetail::all();

        return view('employee.marriagecertificate.queuing.index'); //, ['queuings' => $queuings]);
    }
}
