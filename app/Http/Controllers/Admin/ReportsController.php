<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        //$reports = BirthCertificateDetail::all();

        return view('admin.reports.index'); //, ['reports' => $reports]);
    }
}