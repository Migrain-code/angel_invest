<!DOCTYPE html>
<html lang="tr" translate="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{setting('speed_site_title')." | "}}@yield('title', trans('Anasayfa'))</title>
    <meta name="description" content="@yield('description', trans(setting('speed_meta_descriptions')))">
    <meta name="keyword" content="expert, meme token, solana, raydium, expert, expert mony, shitcoin, meme coin" />

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://experttoken.xyz/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Expert Mony">
    <meta property="og:description"
          content="Expert Token is a community-driven cryptocurrency designed to bring people together and make the opportunities of blockchain technology accessible to everyone. Community members benefit from contributing to the project and supporting the platform's growth.">
    <meta property="og:image" content="https://experttoken.xyz/assets/images/avt/team-v01.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="experttoken.xyz">
    <meta property="twitter:url" content="https://experttoken.xyz/">
    <meta name="twitter:title" content="Expert Mony">
    <meta name="twitter:description"
          content="Expert Token is a community-driven cryptocurrency designed to bring people together and make the opportunities of blockchain technology accessible to everyone. Community members benefit from contributing to the project and supporting the platform's growth.">
    <meta name="twitter:image" content="https://experttoken.xyz/assets/images/avt/team-v01.png">

    <!-- Discord Meta Tags -->
    <meta name="discord:card" content="summary_large_image">
    <meta property="discord:domain" content="experttoken.xyz">
    <meta property="discord:url" content="https://experttoken.xyz/">
    <meta name="discord:title" content="Expert Mony">
    <meta name="discord:description"
          content="Expert Token is a community-driven cryptocurrency designed to bring people together and make the opportunities of blockchain technology accessible to everyone. Community members benefit from contributing to the project and supporting the platform's growth.">
    <meta name="discord:image" content="https://experttoken.xyz/assets/images/avt/team-v01.png">

    <!-- Telegram Meta Tags -->
    <meta name="telegram:card" content="summary_large_image">
    <meta property="telegram:domain" content="experttoken.xyz">
    <meta property="telegram:url" content="https://experttoken.xyz/">
    <meta name="telegram:title" content="Expert Mony">
    <meta name="telegram:description"
          content="Expert Token is a community-driven cryptocurrency designed to bring people together and make the opportunities of blockchain technology accessible to everyone. Community members benefit from contributing to the project and supporting the platform's growth.">
    <meta name="telegram:image" content="https://experttoken.xyz/assets/images/avt/team-v01.png">
    <!-- Expert Meta -->
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
