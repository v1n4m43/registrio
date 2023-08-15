<?php

namespace App\Http\Controllers\Employee\BirthCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EBreportsController extends Controller
{
    public function index()
    {
        //$reports = BirthCertificateDetail::all();

        return view('employee.birthcertificate.reports.index'); //, ['reports' => $reports]);
    }
}
