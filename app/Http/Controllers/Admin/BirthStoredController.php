<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BirthCertificateDetail;
use Illuminate\Http\Request;

class BirthStoredController extends Controller
{
    public function index()
    {
        $birthstored = BirthCertificateDetail::all();

        return view('admin.database.birthstored.index', ['birthstored' => $birthstored]);
    }
}
