<?php

namespace App\Http\Controllers\Employee\BirthCert;

use Illuminate\Http\Request;
use App\Models\CertificateRequest;
use App\Http\Controllers\Controller;
use App\Models\BirthCertificateDetail;

class EBdashboardController extends Controller
{
    public function index()
    {
        return view('employee.birthcertificate.dashboard');
    }

    public function dashboardShow()
    {
        //Total Registered
        $totalBirthRegistered = BirthCertificateDetail::count();

        //Total Request
        $totalBirthCount = CertificateRequest::where('certificate_type', 'Birth')->count();

    return view('employee.birthcertificate.dashboard', [
        'totalBirthRegistered' => $totalBirthRegistered,

        'totalBirthCount' => $totalBirthCount,

        ]);
    }
}
