<div class="mobile-header mobile-header2 mobile-header-main d-block d-lg-none ">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="/"><img src="{{image(setting('logo'))}}" alt=""></a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-duotone fa-bars-staggered"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar2 d-block d-lg-none">
    <div class="logo-m">
        <a href="/"><img src="{{image(setting('logo'))}}" alt=""></a>
    </div>
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

        <ul>
            <li class="has-dropdown"><a href="/">{{__('Anasayfa')}} </a>
            </li>
            <li><a href="{{route('about.index')}}"> {{__('Hakkımızda')}}</a></li>
            <li class="has-dropdown"><a href="{{route('blog.index')}}">{{__('Blog')}}</a></li>

            <li class="has-dropdown"><a href="#">{{__('Sayfalar')}}</a>
                <ul class="sub-menu">
                    <li><a target="_blank" href="{{image(setting('whitepaper_link'))}}">{{__('Whitepaper')}}</a></li>
                    <li><a href="{{route('roadmap')}}">{{__('Roadmap')}}</a></li>
                    <li><a href="{{route('tokenomics')}}">{{__('Tokenomics')}}</a></li>
                    <li><a href="{{route('team')}}">{{__('Ekip')}}</a></li>
                    <li><a href="{{route('info')}}">{{__('Bilgi')}}</a></li>
                    <li><a href="{{route('contact.index')}}">{{__('İletişim')}}</a></li>
                </ul>
            </li>

            <li><a href="{{route('faq.index')}}"> {{__('S.S.S')}}</a></li>

            <li class="has-dropdown"><a href="#">{{__('Hesap')}}</a>
                <ul class="sub-menu">
                    @if(auth('user')->check())
                        <li><a href="{{route('user.panel.index')}}">{{__('Profilim')}}</a></li>
                    @endif
                    <li><a href="{{route('user.login')}}">{{__('Giriş Yap')}}</a></li>
                    <li><a href="{{route('user.register')}}">{{__('Kayıt Ol')}}</a></li>
                </ul>
            </li>

            <li class="has-dropdown">
                <a class="text-uppercase" href="#">
                    @foreach($languages as $language)
                        @if($language->code == app()->getLocale())
                            {{__($language->code)}}
                        @endif
                    @endforeach
                </a>
                <ul class="sub-menu">
                    @foreach($languages as $language)
                        <li>
                            <a class="d-flex gap-2 text-uppercase"
                               href="{{route('changeLanguage', $language->id)}}">
                                <img style="width: 20px;" src="{{image($language->flag)}}">
                                {{__($language->code)}}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </li>

        </ul>

        <div class="mobile-button">
            <a href="{{route('user.register')}}" class="btn_theme btn_theme_active mt_40 wow fadeInDown"
               data-wow-duration="0.8s"> {{__('Buy $ANGELX')}} <i class="fa-solid fa-arrow-right"></i><span></span></a>
        </div>

        <div class="single-footer-items">
            <h3>{{__('Yardım')}}</h3>

            <div class="contact-box">
                <div class="pera">
                    <a href="tel:{{setting('speed_phone')}}">{{setting('speed_phone')}}</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="pera">
                    <a href="mailto:{{setting('speed_email')}}">{{setting('speed_email')}}</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="pera">
                    <a href="{{route('contact.index')}}">{{setting('speed_address')}} </a>
                </div>
            </div>

        </div>

        <div class="contact-infos">
            <h3>{{__('Adres')}}</h3>
            <ul class="social-icon">
                <li><a href="{{setting('speed_twitter_url')}}"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="{{setting('speed_telegram_url')}}"><i class="fa-brands fa-telegram"></i></a></li>
                <li><a href="{{setting('speed_intagram_url')}}"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>

    </div>
</div>
<!-- end Header -->
