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
                            <h3 class="mb-5">$ {{auth('user')->user()->totalTokenPrice()}}</h3>
                            <span>{{__('Lansmanda Madeni Para Değeriniz')}}</span>
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
                            <h3 class="mb-5">{{formatPrice(auth('user')->user()->totalToken())}} ANGELX</h3>
                            <span>{{__('Toplam Angelx Bakiyesi')}} </span>
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
                            <h3 class="mb-5">{{auth('user')->user()->payments()->count()}}</h3>
                            <span>{{__('Toplam Satın Alım')}}</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End .row -->
        </div>
    </section>
</div>
