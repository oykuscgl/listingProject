<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('layouts.services', ['services' => $services]);
    }

    public function show($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('layouts.service', ['service' => $service]);
    }

}
