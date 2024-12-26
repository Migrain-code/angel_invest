@extends('user.layouts.master')

@section('content')
    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">{{__('Dashboard')}}</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>
        </div>
    </div>
    @include('user.home.parts.summary-box')

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="clearfix"></div>

    <div class="clearfix"></div>

    <div class="col-lg-6">
        <section class="box has-border-left-3">
            <header class="panel_header">
                <h2 class="title pull-left">{{__('En İyi Angelx Yatırımcıları')}}</h2>
                <div class="actions panel_actions pull-right">
                    <a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    @php
                        // Kullanıcıların maksimum token miktarını al
                        $maxTokens = $topUserTokens->max(fn($user) => $user->total_tokens);
                    @endphp
                    <div class="col-xs-12">
                        @foreach($topUserTokens as $user)
                            @php
                                // Bu kullanıcının token miktarını maksimum token miktarına oranla
                                $progressPercentage = $maxTokens > 0 ? ($user->totalToken() / $maxTokens) * 100 : 0;
                            @endphp
                            <div class="trader-buy golden">
                                <h6 class="angle-round">{{$user->name}}<span class="number">{{$user->totalToken()}} Token</span></h6>
                                <div class="progress progress-cls">
                                    <div class="progress-bar has-gradient-to-right-bottom" style="width:{{$progressPercentage}}% !important;">{{$user->totalTokenPrice()}} $</div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('user.home.parts.orders')

    <div class="clearfix"></div>


@endsection
@section('scripts')
    <script src="/user/assets/plugins/echarts/echarts-all.js"></script>
    <script src="/user/assets/js/chart-echarts.js"></script>

    <script src="/user/assets/plugins/ico/highcharts.js"></script>
    <script src="/user/assets/plugins/ico/create-highcarts.js"></script>
@endsection
