<!--=====CTA IMAGE AREA START=======-->

<div class="cta2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="heading">
                    <span class="span">{{__('Topluma Ait ve İşletilen')}}</span>
                    <h2>{{setting('footer_content_'.app()->getLocale().'_title')}}</h2>
                    <div class="space30"></div>
                    <div class="buttons">
                        <a href="{{setting('footer_box_1_content_'.app()->getLocale().'_link')}}" target="_blank" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown"
                           data-wow-duration="0.8s">{{setting('footer_box_1_content_'.app()->getLocale().'_title')}} <i class="fa-solid fa-arrow-right"></i><span></span></a>
                        <a href="{{setting('footer_box_2_content_'.app()->getLocale().'_link')}}" target="_blank" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown"
                           data-wow-duration="0.8s">{{setting('footer_box_2_content_'.app()->getLocale().'_title')}} <i class="fa-solid fa-arrow-right"></i><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="/frontend/assets/img/shapes/cta2-circle1.png" alt="" class="circle1">
    <img src="/frontend/assets/img/shapes/cta2-circle2.png" alt="" class="circle2 shape-animaiton4">
</div>

<div class="cta2-images mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto text-center">
                <div class="images-area">
                    <div class="image1">
                        <img src="{{image(setting('footer_banner_image'))}}" alt="">
                    </div>

                    <div class="image2">
                        <img src="/frontend/assets/img/shapes/cta2-coin.png" alt="">
                    </div>
                    <div class="image3">
                        <img src="/frontend/assets/img/shapes/cta2-shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=====CTA IMAGE AREA END=======-->

<!--===== CTA AREA START =======-->

<div class="cta3">
    <div class="container bg">
        <div class="row">
            <div class="col-lg-6">
                <div class="heading3">
                    <h2>{{__('Düzenli Güncelleme Alın')}}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-area">
                    <form action="{{route('subscribe')}}" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="{{__('E-posta')}}" class="text-black">
                        <div class="button-area">
                            <button type="submit" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown" data-wow-duration="0.8s">
                                {{__('Abone Ol')}}
                                <i class="fa-solid fa-arrow-right"></i>
                                <span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img class="shape" src="/frontend/assets/img/shapes/cta3-shape.png" alt="">
    </div>
</div>

<div class="footer2 _relative">
    <div class="container">
        <div class="footer-bg">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer-logo-area">
                        <a href="/" class="logo bg-black py-2 px-3" style="border-radius: 3px;">
                            <img src="/frontend/assets/img/logo/Angelx.svg" alt="ANGELX">
                        </a>
                        <div class="space20"></div>
                        <h5>{{__('Footer Metni')}}</h5>
                        <div class="space30"></div>
                        <a href="{{route('user.login')}}" class="btn_theme2 btn_theme_active2 mt_40 wow fadeInDown"
                           data-wow-duration="0.8s">{{__('Şimdi Katıl')}} <i class="fa-solid fa-arrow-right"></i><span></span></a>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-6">
                    <div class="single-footer-items">
                        <h3>{{__('Keşfedin')}}</h3>

                        <ul class="menu-list">
                            <li><a href="/">  {{__('Anasayfa')}}</a></li>
                            <li><a href="{{route('about.index')}}"> {{__('Hakkımızda')}}</a></li>
                            <li><a href="{{route('blog.index')}}">{{__('Blog')}}</a></li>
                            <li><a href="{{route('tokenomics')}}">{{__('Tokenomics')}}</a></li>
                            <li><a href="{{route('faq.index')}}"> {{__('S.S.S')}}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg col-md-4 col-6">
                    <div class="single-footer-items pl-5">
                        <h3>{{__('Hızlı Bağlantılar')}}</h3>

                        <ul class="menu-list">
                            <li><a href="{{route('user.login')}}">{{__('Giriş Yap')}}</a></li>
                            <li><a target="_blank" href="{{image(setting('whitepaper_link'))}}">{{__('Whitepaper')}}</a></li>
                            <li><a href="{{route('info')}}">{{__('Bilgi')}}</a></li>
                            <li><a href="{{route('faq.index')}}"> {{__('S.S.S')}}</a></li>
                            <li><a href="{{route('contact.index')}}">{{__('İletişim')}}</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-2 col-md-4 col-6">
                    <div class="single-footer-items">
                        <h3>{{__('Yardım')}}</h3>

                        <ul class="contact-info">
                            <li><a href="tel:{{setting('speed_phone')}}">{{setting('speed_phone')}}</a></li>
                            <li><a href="mailto:{{setting('speed_email')}}">{{setting('speed_email')}}</a></li>
                            <li><a href="{{route('contact.index')}}">{{setting('speed_address')}}</a></li>
                        </ul>

                        <ul class="icons">
                            <li><a href="{{setting('speed_twitter_url')}}" class="my-1"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="{{setting('speed_telegram_url')}}" class="my-1"><i class="fa-brands fa-telegram"></i></a></li>
                            <li><a href="{{setting('speed_intagram_url')}}" class="my-1"><i class="fa-brands fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="space70"></div>
    </div>

    <div class="copyright-area _relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="coppyright">
                        <p>Copyright © 2024 ANGELX. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <img src="/frontend/assets/img/shapes/footer2-element.png" alt="ANGELX" class="shape" style="z-index: -1;">

</div>


@include('frontend.layouts.components.scripts')
</body>
</html>
