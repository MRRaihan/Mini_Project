<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['services'] = Service::where('status', 'active')->get();
        return view('frontend.index', $data);

    }

    public function details($id){
        $data['services'] = Service::where('status', 'active')->get();
        $data['service']= Service::findOrFail($id);
        return view('frontend.details', $data);
    }
}
