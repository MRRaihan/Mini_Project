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
}
