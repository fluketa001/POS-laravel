<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function company()
    {
        return view('company');
    }

    public function product()
    {
        return view('product');
    }

    public function user()
    {
        return view('user');
    }

    public function sell()
    {
        return view('sell');
    }

    public function stock()
    {
        return view('stock');
    }

    public function report()
    {
        return view('report');
    }

    public function report_summary()
    {
        return view('report_summary');
    }

    public function personal_information()
    {
        return view('personal_information');
    }
}
