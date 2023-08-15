<?php

namespace App\Http\Controllers\Employee\MarriageCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EMreportsController extends Controller
{
    public function index()
    {
        //$reports = BirthCertificateDetail::all();

        return view('employee.marriagecertificate.reports.index'); //, ['reports' => $reports]);
    }
}
