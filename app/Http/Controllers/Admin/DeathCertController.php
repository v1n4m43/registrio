<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeathCertController extends Controller
{
    public function index()
    {
        // $deathcerts = MarriageLicense::all();

        return view('admin.registers.death.index'); //, ['deathcerts' => $deathcerts]);
    }
}
