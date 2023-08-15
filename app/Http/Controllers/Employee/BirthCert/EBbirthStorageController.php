<?php

namespace App\Http\Controllers\Employee\BirthCert;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BirthCertificateDetail;

class EBbirthStorageController extends Controller
{
    public function index()
    {
        $birthstored = BirthCertificateDetail::all();

        return view('employee.birthcertificate.birthstorage.index', ['birthstored' => $birthstored]);
    }
}
