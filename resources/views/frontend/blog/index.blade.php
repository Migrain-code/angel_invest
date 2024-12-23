@extends('frontend.layouts.master')
@php
    $title = trans("Tüm Bloglar");
    $description = trans("Tüm Bloglar");
@endphp
@section('title', $title)
@section('description', $description)
@section('styles')
    <style>
        .pagination.page-item{
            display: inline-block;
        }
        .page-link{
            width: 55px;
            height: 55px;
            text-align: center;
            line-height: 45px;
            background-color: var(--vtc-bg-common-bg1);
            margin: 0 4px;
            transition: all 0.3s;
            display: block;
            color: #000 !important;
            border-radius: 4px;
            font-weight: 700;
        }
        .page-item:last-child .page-link {
            border-top-right-radius: var(--bs-pagination-border-radius);
            border-bottom-right-radius: var(--bs-pagination-border-radius);
            font-size: 30px;
            line-height: 40px;
        }
        .page-item:first-child .page-link {
            border-top-left-radius: var(--bs-pagination-border-radius);
            border-bottom-left-radius: var(--bs-pagination-border-radius);
            font-size: 30px;
            line-height: 40px;
        }
        .active>.page-link, .page-link.active {
            border-radius: 4px;
            background: var(--vtc-bg-main-bg-1);
            transition: all 0.3s;
            color: #fff !important;
        }
    </style>
@endsection
@section('content')



    <!--=====HERO AREA START=======-->
    <div class="common-hero" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">Blog</h1>
                        <div class="space16"></div>
                        <p class="text-white">
                            Angel Investors Club is a revolutionary platform designed to create a direct channel for
                            angel investors and promising crypto projects. Our mission is to create a trusted and
                            efficient ecosystem where visionary project owners and forward thinking investors come
                            together to build the future of blockchain innovation.
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

    <!--===== BLOG AREA START =======-->
    <div class="blog-page sp ">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <x-blog-card :blog="$blog" />
                @endforeach


            </div>

            <div class="space40"></div>
            <div class="d-flex justify-content-center align-items-center">
                    {!! $blogs->links() !!}
            </div>

        </div>
    </div>

@endsection
