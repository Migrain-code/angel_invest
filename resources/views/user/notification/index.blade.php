@extends('user.layouts.master')
@section('title', __('Bildirimler'))
@section('styles')
@endsection
@section('content')
        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">{{__('Bildirimler')}}</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>


            </div>
        </div>
        <div class="col-lg-12">
            <section class="box nobox marginBottom0" style="border-radius: 0px !important;">
                <div class="content-body">
                    <div class="row">

                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after">
                                    <img src="/user/assets/icons/ico-lg.png" alt="">
                                </div>
                                <div class="cryp-icon">
                                    <img src="/user/assets/icons/sec-level3.png" class='mt-10' alt="">
                                </div>
                                <div class="stats">
                                    <h3 class="mb-5">{{$unreadNotifications->count() + $readNotifications->count()}}</h3>
                                    <span>{{__('Tüm Bildirimler')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after">
                                    <img src="/user/assets/icons/ico-lg.png" alt="">
                                </div>
                                <div class="cryp-icon">
                                    <img src="/user/assets/icons/sec-level2.png" class='mt-10' alt="">
                                </div>
                                <div class="stats">
                                    <h3 class="mb-5">{{$readNotifications->count()}}</h3>
                                    <span>{{__('Okunmuş Bildirimler')}}</span>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after">
                                    <img src="/user/assets/icons/ico-lg.png" alt="">
                                </div>
                                <div class="cryp-icon">
                                    <img src="/user/assets/icons/sec-level1.png" class='mt-10' alt="">
                                </div>
                                <div class="stats">
                                    <h3 class="mb-5">{{$unreadNotifications->count()}}</h3>
                                    <span>{{__('Okunmamış Bildirimler')}} </span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End .row -->
                </div>
            </section>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">{{__('Tüm Bildirimler')}}</h2>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="tabs-wrapper">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#home-1" data-toggle="tab">
                                        <img src="/user/assets/icons/sec-level1.png" class="tab-img-icon" alt="icon">
                                        <div class="tab-head">
                                            <h4 class="bold mb-5">{{__('Okunmamış Bildirimler')}}</h4>
                                            <h4 class="no-mt"><small>{{__('Yeni gelen ve okunmamış bildirimler')}}</small></h4>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#level-2" data-toggle="tab">
                                        <img src="/user/assets/icons/sec-level2.png" class="tab-img-icon" alt="icon">
                                        <div class="tab-head">
                                            <h4 class="bold mb-5">{{__('Okunmuş Bildirimler')}}</h4>
                                            <h4 class="no-mt"><small>{{$readNotifications->count()}}</small></h4>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home-1">

                                    <ul class="list-unstyled">
                                        @forelse($unreadNotifications as $uNotification)
                                            <li class="notificationDetail" data-notification="{{$uNotification->id}}" data-title="{{$uNotification->getTitle()}}" data-message="{{$uNotification->getDescription()}}">
                                                <div class="security-option-wrapper">
                                                    <img src="/user/assets/icons/level1.png" class="tab-img-icon" alt="icon">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">{{$uNotification->getTitle()}}</h4>
                                                        <h4 class="no-mt">
                                                            <small>{{\Illuminate\Support\Str::limit($uNotification->getDescription(), 300)}}</small>
                                                        </h4>
                                                        <h5 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i>Admin</h5>
                                                    </div>
                                                </div>
                                            </li>
                                        @empty
                                            <li>
                                                <div class="security-option-wrapper text-center">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">{{__('Bildirim Bulunamadı')}}</h4>
                                                        <h4 class="no-mt">
                                                            <small>{{__('Henüz hiç bildirim almadınız')}}</small>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforelse


                                    </ul>

                                </div>
                                <div class="tab-pane fade" id="level-2">

                                    <ul class="list-unstyled">
                                        @forelse($readNotifications as $rNotification)
                                            <li class="notificationDetail" data-notification="{{$rNotification->id}}" data-title="{{$rNotification->getTitle()}}" data-message="{{$rNotification->getDescription()}}">
                                                <div class="security-option-wrapper">
                                                    <img src="/user/assets/icons/level1.png" class="tab-img-icon" alt="icon">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">{{$rNotification->getTitle()}}</h4>
                                                        <h4 class="no-mt">
                                                            <small>{{\Illuminate\Support\Str::limit($rNotification->getDescription(), 300)}}</small>
                                                        </h4>
                                                        <h5 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i>Admin</h5>
                                                    </div>
                                                </div>
                                            </li>
                                        @empty
                                            <li>
                                                <div class="security-option-wrapper text-center">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">{{__('Bildirim Bulunamadı')}}</h4>
                                                        <h4 class="no-mt">
                                                            <small>{{__('Henüz hiç bildirim almadınız')}}</small>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforelse

                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="clearfix"></div>

@endsection
@section('scripts')

@endsection
