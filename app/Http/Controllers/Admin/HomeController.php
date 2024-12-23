<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
        return view('admin.home.index');
    }

    public function kvkk()
    {
        return view('admin.home.kvkk');
    }
    public function info()
    {
        return view('admin.home.info');
    }

    public function mobileApp()
    {
        return view('admin.mobile-app.index');
    }

    public function tokenomics()
    {
        return view('admin.tokenomics.index');
    }

    public function footerTop()
    {
        return view('admin.footer-top.index');
    }
}
