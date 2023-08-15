<?php

namespace App\Http\Controllers\Employee\BirthCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EBqueuingController extends Controller
{
    public function index()
    {
        //$queuings = BirthCertificateDetail::all();

        return view('employee.birthcertificate.queuing.index'); //, ['queuings' => $queuings]);
    }
}
