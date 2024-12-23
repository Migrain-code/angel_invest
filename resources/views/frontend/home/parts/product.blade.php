<div class="token-sell sp2 _relative" id="tokenomics">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="heading2">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>{{__('Tokenomics')}}</span></span>
                    <h2 class="text-anime-style-3">{{setting('token_content_'.app()->getLocale().'_title')}}</h2>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="box-area-all" data-aos="flip-right" data-aos-duration="900">
                    <div class="icon">
                        <img src="/frontend/assets/img/icons/token-sell-icon1.svg" alt="">
                    </div>
                    <div class="single-box heading2">
                        <h5><a href="#">{{setting('token_box_1_content_'.app()->getLocale().'_title')}}</a></h5>
                        <div class="space10"></div>
                        <p>{{setting('token_box_1_content_'.app()->getLocale().'_date')}}</p>
                    </div>
                </div>
                <div class="space50"></div>
                <div class="box-area-all box-area-all2" data-aos="flip-right" data-aos-duration="900">
                    <div class="icon">
                        <img src="/frontend/assets/img/icons/token-sell-icon2.svg" alt="">
                    </div>
                    <div class="single-box heading2">
                        <h5><a href="#">{{setting('token_box_2_content_'.app()->getLocale().'_title')}}</a></h5>
                        <div class="space10"></div>
                        <p>{{setting('token_box_2_content_'.app()->getLocale().'_date')}}</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="token_sale" data-aos="zoom-out" data-aos-duration="900">
                    <div class="tk_countdown">
                        <div class="tk_counter_inner" style="padding: 0px;">
                            <div class="image1">
                                <img src="{{image(setting('token_banner_image'))}}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="shape1">
                        <img src="/frontend/assets/img/shapes/token-sell-shape1.png" alt="">
                    </div>

                    <div class="shape2">
                        <img src="/frontend/assets/img/shapes/token-sell-shape2.png" alt="">
                    </div>

                    <div class="shape3">
                        <img src="/frontend/assets/img/shapes/token-sell-shape3.png" alt="">
                    </div>

                    <div class="shape4">
                        <img src="/frontend/assets/img/shapes/token-sell-shape4.png" alt="">
                    </div>

                </div>

            </div>

            <div class="col-lg-3">
                <div class="box-area-all box-area-all3" data-aos="flip-right" data-aos-duration="900">
                    <div class="icon">
                        <img src="/frontend/assets/img/icons/token-sell-icon3.svg" alt="">
                    </div>
                    <div class="single-box heading2">
                        <h5><a href="#">{{setting('token_box_3_content_'.app()->getLocale().'_title')}}</a></h5>
                        <div class="space10"></div>
                        <p>{{setting('token_box_3_content_'.app()->getLocale().'_date')}}</p>
                    </div>
                </div>

                <div class="space50"></div>
                <div class="box-area-all box-area-all4" data-aos="flip-right" data-aos-duration="900">
                    <div class="icon">
                        <img src="/frontend/assets/img/icons/token-sell-icon4.svg" alt="">
                    </div>
                    <div class="single-box heading2">
                        <h5><a href="#">{{setting('token_box_4_content_'.app()->getLocale().'_title')}}</a></h5>
                        <div class="space10"></div>
                        <p>{{setting('token_box_4_content_'.app()->getLocale().'_date')}}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <img class="token-sell-shape animate3" src="/frontend/assets/img/shapes/token-sell-sec-shape.png" alt="">
</div>
