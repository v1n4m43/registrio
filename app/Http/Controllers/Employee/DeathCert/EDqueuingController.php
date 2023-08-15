<?php

namespace App\Http\Controllers\Employee\DeathCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EDqueuingController extends Controller
{
    public function index()
    {
        //$queuings = BirthCertificateDetail::all();

        return view('employee.deathcertificate.queuing.index'); //, ['queuings' => $queuings]);
    }
}
