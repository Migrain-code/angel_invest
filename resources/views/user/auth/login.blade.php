@extends('frontend.layouts.master')
@section('title', __("ANGELX`e giriş yapın"))
@section('content')
    <div class="login-page sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="login-bg">
                        <div class="heading1 text-center">
                            <span class="span">{{__('HESAP GİRİŞİ')}}</span>
                            <h2 class="text-white">{{__("ANGELX`e giriş yapın")}}</h2>
                        </div>

                        <div class="login-area">

                            <div class="form-area">
                                <form action="{{route('user.login')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label>{{__('E-posta')}}</label>
                                                <input type="text" name="email" placeholder="{{__('E-posta')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label>{{__('Şifre')}}</label>
                                                <input type="password" name="password" placeholder="*******">
                                            </div>
                                        </div>
                                        <div class="check-box-area">
                                            <div class="box">
                                                <input type="checkbox" id="vehicle1" name="remember_me" value="1">
                                                <label for="vehicle1">{{__('Beni Hatırla')}}</label>
                                            </div>
                                            <div class="pera">
                                                <a href="#">{{__('Şifremi Unuttum')}}?</a>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <button type="submit" class="theme-btn1 btn btn--ripple ripple">
                                                {{__('Giriş Yap')}}
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>

                                        <div class="qr-code-area">
                                            <p>{{__("Üye değil misiniz")}}? <a href="{{route('user.register')}}">{{__("Kayıt Olun")}}</a></p>
                                            <div class="space20"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
