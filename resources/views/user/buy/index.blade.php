@extends('user.layouts.master')
@section('title', 'Satın Al')
@section('styles')
@endsection
@section('content')


        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">{{__('Buy')}}</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <section class="box nobox marginBottom0">
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
                                    <h3 class="mb-5">$ 5,019,034</h3>
                                    <span>Your Coin Worth at Launch </span>
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
                                    <h3 class="mb-5">126 ANGELX</h3>
                                    <span>Total BDAG Balance </span>
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
                                    <h3 class="mb-5">903 ANGELX</h3>
                                    <span>Referral Earnings</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End .row -->
                </div>
            </section>
        </div>

        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->

        <div class="col-lg-4">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">ICO Stage Progress</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="tile-progress bg-accent" style="margin-left:15px;margin-right:15px">
                            <div class="content">
                                <h4><i class="fa fa-clock-o icon-sm"></i> Time to Next Stage</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                                </div>
                                <span>65% increase</span>
                            </div>
                        </div>

                        <div class="tile-progress bg-accent no-mb" style="margin-left:15px;margin-right:15px">
                            <div class="content">
                                <h4><i class="fa fa-flask icon-sm"></i> Stage ICO Complete</h4>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 79%"></div>
                                </div>
                                <span>79% complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-4">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Upcoming ICO Stage</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="price-pack no-mt no-mb">
                                <div class="head bg-accent">
                                    <h3>ICO Stage 3</h3>
                                </div>

                                <ul class="item-list list-unstyled" style="padding: 20px 15px 10px;">
                                    <li>Starting Price: <strong> 0.30 $</strong></li>
                                    <li>Starting Date <strong> 15-3-2024</strong></li>
                                    <li>Ending Date <strong> 1-4-2024</strong></li>
                                    <li>Tokens Amount<strong> 1,000,0000</strong></li>
                                </ul>
                                <button type="button" class="btn btn-primary btn-lg has-gradient-to-right-bottom">READ MORE</button>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-4">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Buy more Tokens</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="transfer-wraper">
                                <div class="form-group no-mb">
                                    <label class="form-label">Amount</label>
                                    <span class="desc">minimum value "0.001 BTC"</span>

                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="enter amount">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-red dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                BTC <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu dropdown-red no-spacing">
                                                <li><a href="#">LTC</a></li>
                                                <li><a href="#">DASH</a></li>
                                                <li><a href="#">Ripple</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <label class="form-label">wallet address</label>
                                    <span class="desc"></span>

                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="arrow"></span>
                                                    <img src="/user/assets/icons/wallet-o.png" alt="icon">
                                                </span>
                                        <input type="text" class="form-control" placeholder="OxsD12F32xvW3deG5...">
                                    </div>

                                    <a href="buy-and-sell.html" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Buy More Tokens</a>
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
    <script>

    </script>
@endsection
