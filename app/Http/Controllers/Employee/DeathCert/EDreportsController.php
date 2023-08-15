<?php

namespace App\Http\Controllers\Employee\DeathCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EDreportsController extends Controller
{
    public function index()
    {
        //$reports = BirthCertificateDetail::all();

        return view('employee.deathcertificate.reports.index'); //, ['reports' => $reports]);
    }
}
