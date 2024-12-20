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
                                    <a href="about.html">
                                        {{__('Hakkımızda')}}</a>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="buy.html" class="main1">
                                        {{__('Satın Al')}} <i class="fa-solid"></i>
                                    </a>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">
                                        {{__('Sayfalar')}} <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        <li><a href="whitepaper.html">{{__('Whitepaper')}}</a></li>
                                        <li><a href="roadmap.html">{{__('Roadmap')}}</a></li>
                                        <li><a href="tokenomics.html">{{__('Tokenomics')}}</a></li>
                                        <li><a href="team.html">{{__('Ekip')}}</a></li>
                                        <li><a href="info.html">{{__('Bilgi')}}</a></li>
                                        <li><a href="contact.html">{{__('İletişim')}}</a></li>
                                        <li><a href="faq.html">{{__('S.S.S')}}</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="blog.html" class="main1">
                                        {{__('Blog')}}
                                    </a>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">
                                        {{__('Hesap')}}
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        <li><a href="user.html">{{__('Profilim')}}</a></li>
                                        <li><a href="login.html">{{__('Giriş Yap')}}</a></li>
                                        <li><a href="register.html">{{__('Kayıt Ol')}}</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-menu-parrent">
                                    <a href="#" class="main1">
                                        TR <i class="fa-solid fa-angle-down"></i>
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
                                <a href="register.html"
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


<!-- end Header -->
