<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required|confirmed'
        ], [
            'name.required' => trans('Ad Soyad alanı zorunludur.'),
            'email.required' => trans('E-Posta alanı zorunludur.'),
            'email.unique' => trans('E-Posta adresi sistemde kayıtlı lütfen başka bir e-posta adresi giriniz.'),
            'email.email' => trans('E-Posta adresi geçerli bir e-posta adresi olmalıdır.'),
            'password.required' => trans("Şifre alanı zorunludur."),
            'password.confirmed' => trans("Şifreler uyuşmuyor.")
        ],[
            'name' => trans('Ad Soyad'),
            'email' => trans('E-Posta'),
            'password' => trans('Şifre')
        ]);

        $user = $this->create($request->all());
        $this->guard()->login($user);
        return to_route('user.panel.index')->with('response', [
            'status' => 'success',
            'message' => trans('Hesabınız Başarıyla Oluşturuldu.')
        ]);
    }

    public function guard()
    {
        return auth('user');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
