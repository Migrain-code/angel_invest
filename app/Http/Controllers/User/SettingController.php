<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settings()
    {
        return view('user.settings.index');
    }

    public function buy()
    {
        $payments = auth('user')->user()->payments()->latest()->get();
        return view('user.buy.index', compact('payments'));
    }

    public function buyToken(Request $request)
    {
        $oneTokenPrice = 0.005;
        $dollarPrice = $request->amount;
        $tokenAmount = $dollarPrice / $oneTokenPrice;

        $payment = new Payment();
        $payment->user_id = auth('user')->id();
        $payment->system_wallet_id = $request->system_wallet_address;
        $payment->wallet_id = $request->user_wallet_address;
        $payment->payment_method = 'CRYPTO';
        $payment->currency = $request->amount;
        $payment->token = $tokenAmount;
        $payment->save();

        if ($payment->save()){
            return back()->with('response', [
               'status' => "success",
               'message' => "Ödeme İşleminiz Başarılı. Ödemeniz incelendikten sonra tokenleriniz hesabınıza yüklenecektir."
            ]);
        }
    }
}
