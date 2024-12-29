<!DOCTYPE html>
<html lang="tr" translate="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{setting('speed_site_title')." | "}}@yield('title', trans('Anasayfa'))</title>
    <meta name="description" content="@yield('description', trans(setting('speed_meta_descriptions')))">
    <meta name="keyword" content="angelx, meme token, solana, raydium, angelx, angelx coin, shitcoin, meme coin" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{env('APP_URL')}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{setting('speed_site_title')}}">
    <meta property="og:description"
          content="{{trans(setting('speed_meta_descriptions'))}}">
    <meta property="og:image" content="{{asset('storage/'.setting('favicon'))}}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="angelxcoin.com">
    <meta property="twitter:url" content="{{env('APP_URL')}}">
    <meta name="twitter:title" content="{{setting('speed_site_title')}}">
    <meta name="twitter:description"
          content="{{trans(setting('speed_meta_descriptions'))}}">
    <meta name="twitter:image" content="{{asset('storage/'.setting('favicon'))}}">

    <!-- Discord Meta Tags -->
    <meta name="discord:card" content="summary_large_image">
    <meta property="discord:domain" content="angelxcoin.com">
    <meta property="discord:url" content="{{env('APP_URL')}}">
    <meta name="discord:title" content="{{setting('speed_site_title')}}">
    <meta name="discord:description"
          content="{{trans(setting('speed_meta_descriptions'))}}">
    <meta name="discord:image" content="{{asset('storage/'.setting('favicon'))}}">

    <!-- Telegram Meta Tags -->
    <meta name="telegram:card" content="summary_large_image">
    <meta property="telegram:domain" content="angelxcoin.com">
    <meta property="telegram:url" content="{{env('APP_URL')}}">
    <meta name="telegram:title" content="{{setting('speed_site_title')}}">
    <meta name="telegram:description"
          content="{{trans(setting('speed_meta_descriptions'))}}">
    <meta name="telegram:image" content="{{asset('storage/'.setting('favicon'))}}">
    <!-- Favicon -->
    @include('frontend.layouts.components.styles')

</head>
<body class="body body2" id="home">

    <div class="preloader preloader2">
        <div class="loading-container">
            <div class="loading loading2"></div>
            <div id="loading-icon"><img src="/frontend/assets/img/logo/Angelx.svg" alt=""></div>
        </div>
    </div>

    <div class="paginacontainer">
        <div class="progress-wrap progress-wrap2">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
    </div>


@include('frontend.layouts.menu.top')
