@extends('frontend.layouts.master')
@section('title', trans('İletişim'))
@section('description', trans('İletişim'))
@section('styles')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        iframe{
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <!--=====CONTACT PAGE START=======-->

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">{{__('$ANGELX İLE İLETİŞİME GEÇİN')}}</span>
                        <h2 class="text-white text-anime-style-3">{{__('Bize Bir Mesaj Bırakın')}}</h2>


                    </div>
                </div>
            </div>

            <div class="space60"></div>

            <div class="contact-page-bg">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="heading1">
                            <h3>{{__('Bize Mesaj Gönderin')}}</h3>
                            <div class="space16"></div>
                            <p>
                                {{__('İletişim Formu Açıklaması')}}
                            </p>
                        </div>
                        <form  method="post"  action="{{route('contact.sendForm')}}">
                            @csrf
                            <div class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="name" placeholder="{{__('Ad Soyad')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <input type="email" name="email" placeholder="{{__('E-posta')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="phone" placeholder="{{__('Telefon')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="subject" placeholder="{{__('Konu')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-input">
                                            <textarea rows="3" name="message" placeholder="{{__('Mesajınız')}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="space30"></div>
                                    <div class="col-md-12">
                                        <div class="button">
                                            <button type="submit" class="theme-btn1 btn btn--ripple ripple">{{__('Mesaj Gönder')}} <i
                                                    class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="col-lg-5">
                        <div class="contact-boxs">
                            <div class="single-box">
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/contact-page-icon1.png" alt="">
                                </div>
                                <div class="heading">
                                    <h5>Call</h5>
                                    <a href="tel:{{setting('speed_contact_phone')}}">{{setting('speed_contact_phone')}}</a>
                                </div>
                            </div>

                            <div class="single-box">
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/contact-page-icon2.png" alt="">
                                </div>
                                <div class="heading">
                                    <h5>Email</h5>
                                    <a href="mailto:{{setting('speed_contact_email')}}">{{setting('speed_contact_email')}}</a>
                                </div>
                            </div>

                            <div class="single-box">
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/contact-page-icon3.png" alt="">
                                </div>
                                <div class="heading">
                                    <h5>Adres</h5>
                                    <a href="#">{{setting('speed_contact_address')}}</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="w-100 mt-5">
            {!! setting('speed_address_map') !!}
        </div>
    </div>

    <!--=====CONTACT PAGE END=======-->


@endsection

@section('scripts')

@endsection
