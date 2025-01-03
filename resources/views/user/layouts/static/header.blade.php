<!DOCTYPE html>

<html lang="tr">

<head>
    <title>{{setting('speed_site_title')." | "}}@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <link rel="canonical" href="" />
    @include('user.layouts.components.styles')

</head>
<body>
<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->
<div id="main-wrapper">
    @include('user.layouts.menu.top')

        @include('user.layouts.menu.sidebar')
    <div class="content-body">

        <div class="container-fluid">

