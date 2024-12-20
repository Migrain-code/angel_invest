@extends('frontend.layouts.master')
@section('title', $blog->getMetaTitle())
@section('description', $blog->getMetaDescription())
@section('styles')
    <style>
        .blog-details-posts.left {
            padding-left: 30px;
            color: white !important;
        }
        .blog-details-posts .details-post-single .athor-users ul li a.date {
            color: white;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 16px;
            display: inline-block;
            border: none;
        }.blog-details-posts .details-post-single .athor-users ul li a.date::after {
           display: none !important;
         }
        .blog-details-posts .list li {
            margin: 18px 0px;
            color: #fff;
            font-size: 18px;
            font-style: normal;
            font-weight: 600;
            line-height: 18px;
            text-transform: capitalize;
            display: flex;
            align-items: center;
        }
        .heading1 p {
            color: #fff;
            font-size: var(--f-fs-font-fs16);
            font-style: normal;
            font-weight: var(--f-fw-medium);
            line-height: var(--f-fs-font-fs26);
            letter-spacing: 0.16px;
            transition: all 0.4s;
        }.heading1 h3 {
             color: #fff;
             font-size: 32px;
             font-style: normal;
             font-weight: 700;
             line-height: 42px;
             text-transform: capitalize;
         }
    </style>
@endsection
@section('content')
    <div class="common-hero" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="main-heading">
                        <h1 class="text-white">{{$blog->getName()}}</h1>
                        <div class="space16"></div>

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

    <!--===== BLOG DETAILS AREA START =======-->

    <div class="blog-details-area sp">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="blog-details-posts left">
                        <article>
                            <div class="details-post-single">
                                <div class="image image-anime">
                                    <img src="/frontend/assets/img/blog/blog-details-img1.png" alt="">
                                </div>
                                <div class="athor-users">
                                    <ul class="d-flex justify-content-between">
                                        <li>
                                            <a href="#" class="tag">#Blockchain Crypto</a>
                                        </li>
                                        <li>
                                            <a href="#" class="date">
                                                <img src="/frontend/assets/img/icons/blog-details-icon1.png" alt="">
                                                {{$blog->created_at->format('d.m.Y')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="heading1">
                                    <h2 style="color: #fff">{{$blog->getName()}}</h2>
                                    <div class="space20"></div>
                                    {!! $blog->getContent() !!}
                                </div>
                            </div>
                        </article>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="side-all">
                        <div class="details-sidebox">
                            <h3>{{__('İçindekiler')}}</h3>
                            <div class="tags">
                                <ul>
                                    @foreach($heads as $head)
                                        <li><a href="#head-{{$loop->index}}">#{!! $head !!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="details-sidebox">
                            <h3>{{__("Son Gönderiler")}}</h3>
                            <div class="recent-post">
                                <ul>
                                  @foreach($latestBlog as $lsBlog)
                                        <li>
                                            <a href="{{route('blog.detail', $lsBlog->getSlug())}}" class="active">
                                                {{$lsBlog->getName()}}
                                            </a>
                                        </li>
                                  @endforeach
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--===== BLOG DETAILS AREA END =======-->

    <!--===== BLOG AREA START =======-->

    <div class="blog1 sp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="heading1">
                        <span class="span">{{__('Tüm Bloglar')}}</span>
                        <h2>{{__("Son Gönderiler")}}</h2>
                    </div>
                </div>
            </div>

            <div class="space30"></div>
            <div class="row">
                @foreach($latestBlog as $lsBlog)
                     <x-blog-card :blog="$lsBlog" />
                @endforeach
            </div>
        </div>
    </div>

    <!--===== BLOG AREA END =======-->


@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var container = document.getElementById('contentBox');
            const hElements = container.querySelectorAll('h1, h2, h3, h4, h5');

            for (let i = 0; i < hElements.length; i++) {
                hElements[i].setAttribute('id', `head-${i}`);
            }
        });
    </script>
@endsection
