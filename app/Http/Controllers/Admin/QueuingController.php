<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueuingController extends Controller
{
    public function index()
    {
        //$queuings = BirthCertificateDetail::all();

        return view('admin.queuing.index'); //, ['queuings' => $queuings]);
    }
}
