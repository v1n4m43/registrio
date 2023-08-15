<?php

namespace App\Http\Controllers\Employee\MarriageCert;

use Illuminate\Http\Request;
use App\Models\MarriageLicense;
use App\Models\CertificateRequest;
use App\Http\Controllers\Controller;

class EMdashboardController extends Controller
{
    public function index()
    {
        return view('employee.marriagecertificate.dashboard');
    }

    public function dashboardShow()
    {
        //Total Registered
        $totalMarriageRegistered = MarriageLicense::count();

        //Total Request
        $totalMarriageCount = CertificateRequest::where('certificate_type', 'Marriage')->count();

    return view('employee.marriagecertificate.dashboard', [

        'totalMarriageRegistered' => $totalMarriageRegistered,
        'totalMarriageCount' => $totalMarriageCount,

        ]);
    }
}
