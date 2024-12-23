<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'email';
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    public function showLoginForm()
    {
        if (Auth::guard('user')->check()) {
            return redirect()->route('user.panel.index');
        }
        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        $user = Customer::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return to_route('user.login')->with('response', [
                'status' => "error",
                'message' => "E-posta Adresiniz Veya Şifreniz Hatalı",
            ]);
        }
        Auth::guard('user')->loginUsingId($user->id);

        return to_route('user.panel.index')->with('response', [
            'status' => "success",
            'message' => $user->name. " Hoşgeldiniz",
        ]);

    }


    public function logout(Request $request)
    {
        $user = Auth::guard('user')->user();
        Auth::guard('user')->logout();
        return to_route('user.login')->with('response', [
            'status' => "success",
            'message' => $user->name. " Oturumunuz Kapatıldı",
        ]);
    }
}
