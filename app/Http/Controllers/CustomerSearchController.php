<?php

namespace App\Http\Controllers;

use App\Models\ConsumerResearch;
use App\Models\News;
use Illuminate\Http\Request;

class CustomerSearchController extends Controller
{

    public function index()
    {
        $researches = ConsumerResearch::all();
        return view('layouts.customersearches', compact('researches'));
    }

    public function show($research_id)
    {
        $research = ConsumerResearch::findOrFail($research_id);
        return view('layouts.customerSearchPage', compact('research'));
    }

}
