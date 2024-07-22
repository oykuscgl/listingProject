<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\HR;
use Illuminate\Http\Request;

class HRController extends Controller
{

    public function index()
    {
        $hr = HR::all();
        return view('layouts.HRPage', ['hr' => $hr]);
    }

}
