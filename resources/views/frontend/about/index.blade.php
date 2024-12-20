@extends('frontend.layouts.master')
@section('title', setting('about_meta_title_'.app()->getLocale().'_text'))
@section('description', setting('about_meta_description'.app()->getLocale().'_text'))
@section('styles')
    <style>
        .owl-carousel .owl-item img {
            width: auto;
            min-height: 270px;
        }
    </style>
@endsection
@section('content')
    <div class="common-hero" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">{{__("Hakkımızda")}}</h1>
                        <div class="space16"></div>
                        <style>
                            .common-hero p {
                                color: white;
                                font-size: var(--f-fs-font-fs18);
                                font-style: normal;
                                font-weight: var(--f-fw-medium);
                                line-height: 28px;
                            }
                        </style>
                        <div class="text-white">
                            {!! setting('about_content_'.app()->getLocale().'_text') !!}
                        </div>

                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="common-hero-images">
                        <div class="image1">
                            <img src="/frontend/assets/img/about/common-hero-coin.png" alt="">
                        </div>

                        <div class="image2">
                            <img src="{{image(setting('about_banner_image'))}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====ABOUT AREA START=======-->

    <div class="about1 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about1-images">
                        @foreach($galleries as $gallery)
                            <div class="image{{$loop->index+1}} @if($loop->index > 1) animate4  @endif">
                                <img src="{{image($gallery->image)}}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span">{{__("NEDEN ANGELX'I SEÇMELISINIZ")}}</span>
                        <h2 class="text-white"> {!! setting('about_'.app()->getLocale().'_two_content_title') !!}</h2>
                        <div class="space16"></div>
                        <p class="text-white">
                            {!! setting('about_'.app()->getLocale().'_two_content_text') !!}
                        </p>

                        <div class="icon-box">
                            <div class="">
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/about2-icon2.svg" alt="">
                                </div>
                            </div>
                            <div class="heading1">
                                <h5><a href="#">{{__('Misyonumuz')}}</a></h5>
                                <p>{{setting('about_mission_'.app()->getLocale().'_text')}}</p>
                            </div>
                        </div>

                        <div class="icon-box">
                            <div class="">
                                <div class="icon">
                                    <img src="/frontend/assets/img/icons/about2-icon3.svg" alt="">
                                </div>
                            </div>
                            <div class="heading1">
                                <h5><a href="#">{{__('Vizyonumuz')}}</a></h5>
                                <p>{{setting('about_vission_'.app()->getLocale().'_text')}}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====ABOUT AREA END=======-->

    <!--=====ABOUT TEAM START=======-->

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

    <!--=====ABOUT TEAM END=======-->
@endsection
