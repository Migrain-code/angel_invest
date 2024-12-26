@extends('frontend.layouts.master')
@section('title', __("ANGELX`e Kayıt Olun"))
@section('content')
    <div class="login-page sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="login-bg">
                        <div class="heading1 text-center">
                            <span class="span">{{__('Hesap Oluştur')}}</span>
                            <h2 class="text-white">{{__("ANGELX`e Kayıt Olun")}}</h2>
                        </div>

                        <div class="login-area">

                            <div class="form-area">
                                <form action="{{route('user.register')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label>{{__('Ad Soyad')}}</label>
                                                <input type="text" name="name" placeholder="{{__('Ad Soyad')}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label>{{__('E-posta')}}</label>
                                                <input type="text" name="email" placeholder="{{__('E-posta')}}">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="single-input">
                                                <label>{{__('Şifre')}}</label>
                                                <input type="password" name="password" placeholder="*******">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="single-input">
                                                <label>{{__('Şifre Tekrarı')}}</label>
                                                <input type="password" name="password_confirmation" placeholder="*******">
                                            </div>
                                        </div>
                                        <div class="button">
                                            <button type="submit" class="theme-btn1 btn btn--ripple ripple">
                                                {{__('Kayıt Ol')}}
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </button>
                                        </div>

                                        <div class="qr-code-area">
                                            <p>{{__("Bir Hesabınız Var Mı")}}? <a href="{{route('user.login')}}">{{__("Giriş Yap")}}</a></p>
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
