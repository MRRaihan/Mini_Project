<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    public function clientlogin()
    {
        return view('frontend.login');
    }

    public function clientreg()
    {
        return view('frontend.registration');
    }

    public function clientRegistration(Request $request)
    {
        $data= new User();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*public function index()
    {
        return view('home');
    }*/
}
