<?php

namespace App\Http\Controllers\Employee\DeathCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EDdeathCertController extends Controller
{
    public function index()
    {
        // $deathcerts = MarriageLicense::all();

        return view('employee.deathcertificate.deathregister.index'); //, ['deathcerts' => $deathcerts]);
    }
}
