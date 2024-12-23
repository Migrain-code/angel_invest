@extends('frontend.layouts.master')
@section('title', trans('Tokenomics'))
@section('description', trans('Tokenomics'))
@section('styles')

@endsection
@section('content')
    <!--=====HERO AREA START=======-->

    <div class="common-hero" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">{{__('Tokenomics')}}</h1>
                        <div class="space16"></div>
                        <p class="text-white">
                            {{__('Tokenomics Açıklama')}}
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
    @include('frontend.home.parts.product')
@endsection

@section('scripts')

@endsection
