<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MarriageLicense;
use App\Models\RequesterDetail;
use App\Models\CertificateRequest;
use App\Http\Controllers\Controller;
use App\Models\BirthCertificateDetail;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function dashboardShow()
    {
        //Total Registered
        $totalBirthRegistered = BirthCertificateDetail::count();
        $totalMarriageRegistered = MarriageLicense::count();
        //$totalDeathRegistered = DeathCertificate::count();

        //Total Request
        $totalBirthCount = CertificateRequest::where('certificate_type', 'Birth')->count();
        $totalMarriageCount = CertificateRequest::where('certificate_type', 'Marriage')->count();
        $totalDeathCount = CertificateRequest::where('certificate_type', 'Death')->count();

        $mergedTotalRegistered = $totalBirthRegistered + $totalMarriageRegistered;
        $mergedTotalRequest = $totalBirthCount + $totalMarriageCount + $totalDeathCount;

    return view('admin.dashboard', [
        'totalBirthRegistered' => $totalBirthRegistered,
        'totalMarriageRegistered' => $totalMarriageRegistered,
        //'totalDeathRegistered' => $totalDeathRegistered,

        'totalBirthCount' => $totalBirthCount,
        'totalMarriageCount' => $totalMarriageCount,
        'totalDeathCount' => $totalDeathCount,

        'mergedTotalRegistered' => $mergedTotalRegistered,
        'mergedTotalRequest' => $mergedTotalRequest,

        ]);
    }
}
