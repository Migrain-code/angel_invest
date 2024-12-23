<!-- Header -->
<header>
    <div class="header-area header-area2 header-area-all d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{route('home')}}">
                                <img src="{{image(setting('logo'))}}" alt="logo">
                            </a>
                        </div>


                        <div class="main-menu-ex main-menu-ex1">
                            <ul>
                                <li>
                                    <a href="/">
                                        {{__('Anasayfa')}}
                                        <i class="fa-solid"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('about.index')}}">
                                        {{__('Hakkımızda')}}</a>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="{{route('blog.index')}}" class="main1">
                                        {{__('Blog')}} <i class="fa-solid"></i>
                                    </a>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">
                                        {{__('Sayfalar')}} <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        <li><a target="_blank" href="{{image(setting('whitepaper_link'))}}">{{__('Whitepaper')}}</a></li>
                                        <li><a href="{{route('roadmap')}}">{{__('Roadmap')}}</a></li>
                                        <li><a href="{{route('tokenomics')}}">{{__('Tokenomics')}}</a></li>
                                        <li><a href="{{route('team')}}">{{__('Ekip')}}</a></li>
                                        <li><a href="{{route('info')}}">{{__('Bilgi')}}</a></li>
                                        <li><a href="{{route('contact.index')}}">{{__('İletişim')}}</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-parrent">
                                    <a href="{{route('faq.index')}}" class="main1">
                                        {{__('S.S.S')}} <i class="fa-solid"></i>
                                    </a>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">
                                        {{__('Hesap')}}
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        @if(auth('user')->check())
                                            <li><a href="{{route('user.panel.index')}}">{{__('Profilim')}}</a></li>
                                        @endif
                                        <li><a href="{{route('user.login')}}">{{__('Giriş Yap')}}</a></li>
                                        <li><a href="{{route('user.register')}}">{{__('Kayıt Ol')}}</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1 text-uppercase">
                                        @foreach($languages as $language)
                                            @if($language->code == app()->getLocale())
                                                {{__($language->code)}}
                                            @endif
                                        @endforeach
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul>
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
                        </div>

                        <div class="header2-buttons">
                            <div class="button">
                                <a href="{{route('user.register')}}"
                                   class="btn_theme btn_theme_active mt_40 wow fadeInDown"
                                   data-wow-duration="0.8s">
                                    {{__('Buy $ANGELX')}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@include('frontend.layouts.menu.sidebar')
