<?php

namespace App\Http\Controllers\Employee\DeathCert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EDdeathStorageController extends Controller
{
    public function index()
    {
        // $deathstored = MarriageLicense::all();

        return view('employee.deathcertificate.deathstorage.index'); //, ['deathstored' => $deathstored]);
    }
}
