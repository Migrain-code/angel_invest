<div class="others2" style="background-image: url(/frontend/assets/img/bg/others2-bg.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                        Available mobile app
                    </span>
                    <h2 class="text-anime-style-3">
                        {!! setting('mobile_content_'.app()->getLocale().'_title') !!}
                    </h2>
                    <div class="space16"></div>
                    <p data-aos="fade-right" data-aos-duration="800">
                        {!! setting('mobile_content_'.app()->getLocale().'_text') !!}
                    </p>

                    <div class="space30"></div>
                    <div class="buttons" data-aos="fade-right" data-aos-duration="1000">
                        <a href="{{setting('mobile_app_store_link')}}"><img src="/frontend/assets/img/others/others2-btn1.png" alt=""></a>
                        <a href="{{setting('mobile_app_play_store_link')}}"><img src="/frontend/assets/img/others/others2-btn2.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-image" data-aos="fade-left" data-aos-duration="1000" data-aos-offset="100">
                    <img src="{{image(setting('mobile_banner_image'))}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
