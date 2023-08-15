<?php

namespace App\Http\Controllers\Employee\DeathCert;

use Illuminate\Http\Request;
use App\Models\CertificateRequest;
use App\Http\Controllers\Controller;

class EDdashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function dashboardShow()
    {
        //Total Registered
        //$totalDeathRegistered = DeathCertificate::count();

        $totalDeathCount = CertificateRequest::where('certificate_type', 'Death')->count();


    return view('employee.deathcertificate.dashboard', [

        //'totalDeathRegistered' => $totalDeathRegistered,

        'totalDeathCount' => $totalDeathCount,

        ]);
    }
}
