@extends('frontend.layouts.master')
@section('title', trans('Ekip'))
@section('description', trans('Ekip'))
@section('content')
    <div class="common-hero" style="background-image: url(assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">{{__('Ekip')}}</h1>
                        <div class="space16"></div>
                        <p class="text-white">
                           {{__('Ekip Açıklama')}}}
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
    <div class="about-team sp">
        <div class="container _relative">
            <div class="row">
                <div class="col-lg-8 m-auto text-center">
                    <div class="heading1">
                        <span class="span">{{__('Ekibimiz')}}</span>
                        <h2 class="text-white">{{__('Ekip')}}</h2>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            @include('frontend.team.team-component')
            <img class="box-shape1 animate3" src="/frontend/assets/img/shapes/footer-shape2.png" alt="">
            <img class="box-shape2" src="/frontend/assets/img/shapes/footer-shape5.png" alt="">
            <img class="box-shape3 animate1" src="/frontend/assets/img/shapes/footer-shape5.png" alt="">
        </div>
        <img class="shape1 animate3" src="/frontend/assets/img/shapes/footer-shape4.png" alt="">
        <img class="shape2 animate4" src="/frontend/assets/img/shapes/footer-shape1.png" alt="">
    </div>
@endsection
