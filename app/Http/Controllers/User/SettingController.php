<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function settings()
    {
        return view('user.settings.index');
    }

    public function settingUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ], [
            'name.required' => trans('Ad Soyad alanı zorunludur.'),
            'email.required' => trans('E-Posta alanı zorunludur.'),
            'email.email' => trans('E-Posta adresi geçerli bir e-posta adresi olmalıdır.')
        ],[
            'name' => trans('Ad Soyad'),
            'email' => trans('E-Posta'),
        ]);
        $user = auth('user')->user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->file('image')){
            $user->image = $request->file('image')->store('userImages');
        }
        if ($request->filled('password')){
            $request->validate([
                'password' => 'required|confirmed'
            ], [
                'password.required' => trans("Şifre alanı zorunludur."),
                'password.confirmed' => trans("Şifreler uyuşmuyor.")
            ]);
            $user->password = Hash::make($request->password);
        }
        if ($user->save()){
            return back()->with('response', [
                'status' => 'success',
                'message' => trans('Profil bilgileriniz başarıyla güncellendi.')
            ]);
        }
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
        $payment->tx_id = $request->tx_id;
        $payment->save();

        if ($payment->save()){
            return back()->with('response', [
               'status' => "success",
               'message' => "Ödeme İşleminiz Başarılı. Ödemeniz incelendikten sonra tokenleriniz hesabınıza yüklenecektir."
            ]);
        }
    }

    public function notification()
    {
        $user = auth('user')->user();
        $unreadNotifications = $user->unreadNotifications();
        $readNotifications = $user->readNotifications();
        return view('user.notification.index', compact('unreadNotifications', 'readNotifications'));
    }

    public function notificationDetail(Request $request)
    {
        $notification = auth('user')->user()->notifications()->where('id', $request->notification_id)->first();
        $notification->markAsRead();
        return response()->json($notification);
    }

    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('user.faq.index', compact('faqs'));
    }
}
