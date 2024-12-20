
<!-- About section -->
<div class="about2 sp" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading2">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                        <span>{{__('Hakkımızda')}}</span></span>
                    <h2 class="text-anime-style-3">{{__('Anasayfa Hakkımızda Başlık')}}</h2>
                </div>
            </div>
        </div>

        <div class="space60"></div>
        @php($duration = 700)
        @foreach($parts as $part)
        <div class="row align-items-center">

            <div class="col-lg-6  @if($part->image_rotation == 1) order-lg-2 @endif">
                <div class="space30"></div>
                <div class="about2-images">
                    <div class="image1">
                        <img src="/frontend/assets/img/bg/about2-bg-shape.png" alt="">
                    </div>
                    <div class="image2">
                        <img src="{{image($part->image)}}" alt="">
                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="about2-boxs">
                    @foreach(range(1, 3) as $rw)
                        <div class="single-box" data-aos="fade-up" data-aos-duration="{{$duration}}">

                            <div class="">
                                <div class="icon">
                                    <img src="{{ $part->{'getBox' . $rw . 'Icon'}() }}" alt="">
                                </div>
                            </div>
                            <div class="heading2">
                                <h4><a href="javascript:void(0)">{{ $part->{'getBox' . $rw . 'Title'}() }}</a></h4>
                                <div class="space16"></div>
                                <p>{{ $part->{'getBox' . $rw . 'Counter'}() }}</p>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
        @php($duration += 200)
        @endforeach
    </div>
    <img src="/frontend/assets/img/shapes/about2-shape.png" alt="" class="sec-shape">
</div>

