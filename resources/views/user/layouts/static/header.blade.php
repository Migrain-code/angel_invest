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
    @include('user.layouts.menu.top')
    <div class="page-container row-fluid container-fluid">
        <div class="page-container row-fluid container-fluid">
        @include('user.layouts.menu.sidebar')
            <section id="main-content" class=" ">
                <div class="wrapper main-wrapper row" style=''>


