<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\News;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{

    public function index()
    {
        $infos = CompanyInfo::all();
        return view('layouts.aboutus', ['infos' => $infos]);
    }

    public function show($info_id)
    {
        $info = CompanyInfo::findOrFail($info_id);
        return view('layouts.aboutusPage', ['info' => $info]);
    }

}
