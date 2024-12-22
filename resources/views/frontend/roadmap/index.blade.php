@extends('frontend.layouts.master')
@section('title', trans('RoadMap'))
@section('description', trans('RoadMap'))
@section('styles')

@endsection
@section('content')
    <!--=====HERO AREA START=======-->

    <div class="common-hero" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">{{__('Roadmap')}}</h1>
                        <div class="space16"></div>
                        <p class="text-white">
                            {{__('Roadmap Açıklama')}}
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
    @include('frontend.roadmap.parts.desktop')
    @include('frontend.roadmap.parts.mobile')
@endsection

@section('scripts')

@endsection
