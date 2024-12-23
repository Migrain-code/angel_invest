@extends('frontend.layouts.master')
@section('title', trans('Bilgi'))
@section('description', trans('Bilgi'))
@section('styles')

@endsection
@section('content')
    <!--=====HERO AREA START=======-->

    <div class="common-hero" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">{{__('Bilgi')}}</h1>
                        <div class="space16"></div>
                        <p class="text-white">
                            {{__('Bilgi Açıklama')}}
                        </p>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="common-hero-images">
                        <div class="image1">
                            <img src="/frontend/assets/img/about/common-hero-coin.png" alt="">
                        </div>

                        <div class="image2">
                            <img src="/frontend/assets/img/about/about-hero-area.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====HERO AREA END=======-->
    <div class="faq3 sp" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading2">
                <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                    <span>{{__('Bilgi')}}</span>
                </span>
                        <h2 class="text-anime-style-3">{{__('Site Bilgisi')}} </h2>
                    </div>
                </div>
            </div>

            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-10 m-auto" style="color: #fff !important;">
                    {!! setting('info_content_'.app()->getLocale()."_text") !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
