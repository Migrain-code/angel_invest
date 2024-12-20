@foreach($sliders as $slider)
    <div class="hero-area2" style="background-image: url(/frontend/assets/img/bg/hero2-bg.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="main-heading">
                        @php
                            $titleArray = explode(' ', $slider->title);
                            $lastWord = array_pop($titleArray);
                            $modifiedTitle = implode(' ', $titleArray); // Kalanları birleştir

                        @endphp
                        <h1 data-aos="fade-right" data-aos-duration="900">
                            {{$modifiedTitle}}
                            <span class="after">
                            {{$lastWord}}
                        </span>
                        </h1>
                        <div class="space16"></div>
                        <p data-aos="fade-right" data-aos-duration="1100">
                           {{$slider->description}}
                        </p>
                        <div class="space30"></div>
                        <div class="buttons" data-aos="fade-right" data-aos-duration="1300">
                            <a href="{{$slider->btn_link}}" class="btn_theme btn_theme_active mt_40 wow fadeInDown"
                               data-wow-duration="0.8s">
                                {{$slider->btn_text}}<i class="fa-solid fa-arrow-right"></i>
                                <span></span>
                            </a>

                            <div class="hero-button1 video-action-btn1 popup-youtube" disabled="false">
                                <div class="">
                                    <a id="play-video" class="video-play-button play-btn"
                                       href="{{setting('main_page_video_link')}}">
                                        <span></span>
                                    </a>
                                </div>
                                <div class="video-btn-pera">
                                    <p>{{__('Videoyu Oynat')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="images-area">
                        <div class="image1 reveal">
                            <img src="{{image($slider->image)}}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <img src="/frontend/assets/img/shapes/hero2-circle-shape1.png" alt="" class="circle-shape1">
        <img src="/frontend/assets/img/shapes/hero2-circle-shape2.png" alt="" class="circle-shape2 shape-animaiton4">
        <img src="/frontend/assets/img/shapes/hero2-bet-coin-shape.png" alt="" class="shape1 animate1">
        <img src="/frontend/assets/img/shapes/hero2-bottom-shape.png" alt="" class="shape2 animate6">
    </div>

@endforeach
