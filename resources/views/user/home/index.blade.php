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

    <div class="clearfix"></div>

    <div class="col-lg-12">
        <section class="box has-border-left-3">
            <header class="panel_header">
                <h2 class="title pull-left">ICO Distribution Stage</h2>
                <div class="actions panel_actions pull-right">
                    <a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 mt-20">
                        <div id="container"></div>
                        <div class="center-values">
                            <span class="phx trix">Cryptodio</span><br>
                            <h6 class="margin-btm">27,000,000 </h6>
                            <span class="phx">Total Supply</span>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-xs-12 progress-div">
                        <!-- Blue -->
                        <h6 class="angle-round">Token Pre-Sale <span style="margin-left: 78px; color:#ccc;">17-03-2024</span><span class="number">1,000,000 Tokens</span></h6>
                        <div class="progress progress-cls">
                            <div class="progress-bar background-one" style="width:9.27% !important;">0.7 $</div>
                        </div>

                        <!-- Green -->
                        <h6 class="angle-round">Round 1 <span style="margin-left: 126px; color:#ccc;">30-03-2024</span><span class="number">1,000,000 Tokens</span></h6>
                        <div class="progress progress-cls">
                            <div class="progress-bar background-two" style="background-color: #cf3546 !important;width:10.54% !important;">0.9 $</div>
                        </div>

                        <!-- Turquoise -->
                        <h6 class="angle-round">Round 2 <span style="margin-left: 126px; color:#ccc;">04-04-2024</span><span class="number">1,000,000 Tokens</span></h6>
                        <div class="progress progress-cls">
                            <div class="progress-bar background-three" style="background-color: #be7e19 !important;width:11.81% !important;">0.95 $</div>
                        </div>

                        <!-- Orange -->
                        <h6 class="angle-round">Round 3 <span style="margin-left: 126px; color:#ccc;">09-04-2024</span><span class="number">1,000,000 Tokens</span></h6>
                        <div class="progress progress-cls">
                            <div class="progress-bar" style="background-color:#009d8c !important;width:12.08% !important;">1.05 $</div>
                        </div>

                        <!-- Red -->
                        <h6 class="angle-round">Round 4 <span style="margin-left: 126px; color:#ccc;">14-04-2024</span><span class="number">1,000,000 Tokens</span></h6>
                        <div class="progress progress-cls">
                            <div class="progress-bar" style="background-color:#a620a2 !important; width:13.35% !important;">1.10 $</div>
                        </div>

                        <!-- Red -->
                        <h6 class="angle-round">Round 5 <span style="margin-left: 126px; color:#ccc;">19-04-2024</span><span class="number">1,000,000 Tokens</span></h6>
                        <div class="progress progress-cls no-mb">
                            <div class="progress-bar" style="background-color:#a62045 !important; width:14.62% !important;">1.20 $</div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="clearfix"></div>

    <div class="col-lg-6">
        <section class="box has-border-left-3">
            <header class="panel_header">
                <h2 class="title pull-left">Top ICO Traders</h2>
                <div class="actions panel_actions pull-right">
                    <a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="trader-buy golden">
                            <h6 class="angle-round">Nighy Strotman<span class="number">2,892,638 Tokens</span></h6>
                            <div class="progress progress-cls">
                                <div class="progress-bar has-gradient-to-right-bottom" style="width:79.27% !important;">760.565 $</div>
                            </div>
                        </div>

                        <div class="trader-buy golden">
                            <h6 class="angle-round">Jack Nelison<span class="number">1,984,342 Tokens</span></h6>
                            <div class="progress progress-cls">
                                <div class="progress-bar has-gradient-to-right-bottom" style="width:75.27% !important;">623.583 $</div>
                            </div>
                        </div>

                        <div class="trader-buy golden">
                            <h6 class="angle-round">Johan Charter<span class="number">1,745,070 Tokens</span></h6>
                            <div class="progress progress-cls">
                                <div class="progress-bar has-gradient-to-right-bottom" style="width:69.27% !important;">500.739 $</div>
                            </div>
                        </div>

                        <div class="trader-buy silver">
                            <h6 class="angle-round">Mark Strotman<span class="number">1,200,000 Tokens</span></h6>
                            <div class="progress progress-cls">
                                <div class="progress-bar has-gradient-to-right-bottom" style="width:65.27% !important;">360.739 $</div>
                            </div>
                        </div>

                        <div class="trader-buy silver">
                            <h6 class="angle-round">Nighy Strotman<span class="number">1,000,000 Tokens</span></h6>
                            <div class="progress progress-cls">
                                <div class="progress-bar has-gradient-to-right-bottom" style="width:61.27% !important;">245.739 $</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="col-lg-6">
        <section class="box has-border-left-3">
            <header class="panel_header">
                <h2 class="title pull-left">Total Orders</h2>
                <div class="actions panel_actions pull-right">
                    <a class="box_toggle fa fa-chevron-down"></a>
                    <a class="box_close fa fa-times"></a>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Deal ID Number</th>
                                    <th data-priority="1">Trade Time</th>
                                    <th data-priority="3">Status</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o complete"></i> Deal number 126515</th>
                                    <td>17.24AM</td>
                                    <td><span class="status-complete">complete</span></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o pending"></i> Deal number 123675</th>
                                    <td>18.14AM</td>
                                    <td><span class="status-pending">pending</span></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o pending"></i> Deal number 126515</th>
                                    <td>20.25AM</td>
                                    <td><span class="status-pending">pending</span></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o cancelled"></i> Deal number 159034</th>
                                    <td>21.24AM</td>
                                    <td><span class="status-cancelled">cancelled</span></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o complete"></i> Deal number 136563</th>
                                    <td>21.50AM</td>
                                    <td><span class="status-complete">complete</span></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o complete"></i> Deal number 177384</th>
                                    <td>21.59PM</td>
                                    <td><span class="status-complete">complete</span></td>
                                </tr>
                                <tr>
                                    <th><i class="fa fa-dot-circle-o cancelled"></i> Deal number 173434</th>
                                    <td>22.11PM</td>
                                    <td><span class="status-cancelled">cancelled</span></td>
                                </tr>
                                <!-- Repeat -->
                                <tr>
                                    <th><i class="fa fa-dot-circle-o pending"></i> Deal number 1788348</th>
                                    <td>22.34PM</td>
                                    <td><span class="status-pending">pending</span></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>


    <div class="clearfix"></div>


@endsection
@section('scripts')
    <script src="/user/assets/plugins/echarts/echarts-all.js"></script>
    <script src="/user/assets/js/chart-echarts.js"></script>

    <script src="/user/assets/plugins/ico/highcharts.js"></script>
    <script src="/user/assets/plugins/ico/create-highcarts.js"></script>
@endsection
