<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarriageLicense;
use Illuminate\Http\Request;

class MarriageCertController extends Controller
{
    public function index()
    {
        $marriagelicense = MarriageLicense::all();

        return view('admin.registers.marriage.index', ['marriagelicense' => $marriagelicense]);
    }
}
