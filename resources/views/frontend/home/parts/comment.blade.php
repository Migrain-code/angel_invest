<div class="tes2 sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading2">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><span>{{__('Yorumlar')}}</span></span>
                    <h2 class="text-anime-style-3">{{__('Yatırımcıların Yorumları')}}</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row align-items-center">

            <div class="col-lg-12 _relative">
                <div class="tes2-slider" data-aos="fade-up" data-aos-duration="800">
                    @foreach($comments as $comment)
                        <div class="single-slider">
                            <div class="icon">
                                <img src="/frontend/assets/img/icons/tes2-qute.png" alt="">
                            </div>
                            <div class="space20"></div>
                            <p class="pera">{{$comment->getComment()}}</p>

                            <div class="bottom-area">
                                <div class="image">
                                    <img src="{{image($comment->image)}}" style="max-width: 65px" alt="">
                                </div>
                                <div class="heading">
                                    <h5><a href="#">{{$comment->getUserName()}}</a></h5>
                                    <p>{{$comment->getMission()}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>

                <div class="nav-area">
                    <button class="arrow-left"><i class="fa-solid fa-angle-left"></i></button>
                    <button class="arrow-right"><i class="fa-solid fa-angle-right"></i></button>
                </div>
            </div>

        </div>
    </div>
    <img src="/frontend/assets/img/shapes/tes2-shape.png" alt="" class="sec-shape animate3">
</div>
