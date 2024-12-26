<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;

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
        $payments = auth('user')->user()->payments()->latest()->get();
        $topUserTokens = Customer::with('cryptoTokens')
            ->withSum('cryptoTokens as total_tokens', 'token') // cryptoTokens üzerinden toplamı hesapla
            ->having('total_tokens', '>', 0)
            ->orderByDesc('total_tokens') // Toplamı azalan sırada sırala
            ->get();

        return view('user.home.index', compact('payments', 'topUserTokens'));
    }

}
