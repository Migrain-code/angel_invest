<!DOCTYPE html>
<html lang="tr" translate="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{setting('speed_site_title')." | "}}@yield('title', trans('Anasayfa'))</title>
    <meta name="description" content="@yield('description', trans(setting('speed_meta_descriptions')))">

    <!-- Favicon -->
    @include('frontend.layouts.components.styles')

</head>
<body class="body body2" id="home">
{{--
    <div class="preloader preloader2">
        <div class="loading-container">
            <div class="loading loading2"></div>
            <div id="loading-icon"><img src="/frontend/assets/img/logo/Angelx.svg" alt=""></div>
        </div>
    </div>
--}}
    <div class="paginacontainer">
        <div class="progress-wrap progress-wrap2">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>
    </div>


@include('frontend.layouts.menu.top')
