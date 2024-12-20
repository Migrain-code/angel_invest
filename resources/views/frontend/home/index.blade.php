@extends('frontend.layouts.master')
@section('content')

          @include('frontend.home.parts.slider')
          @include('frontend.home.parts.aboutsec') {{-- 1. About Section --}}
          {{--
          @include('frontend.home.parts.product')
          --}}
          @include('frontend.home.parts.howitworks')
          @include('frontend.home.parts.video')
          @include('frontend.home.parts.blog')
          @include('frontend.home.parts.comment')
          @include('frontend.home.parts.faq')

@endsection
