<div class="faq3 sp" id="faq">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading2">
                <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                    <span>{{__('Sık Sorulan Sorular')}}</span>
                </span>
                    <h2 class="text-anime-style-3">{{__('Popüler Sorular')}} </h2>
                </div>
            </div>
        </div>

        <div class="space40"></div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="accordion accordion1" id="accordionExample">
                    @foreach($faqs as $faq)
                        <div class="accordion-item @if($loop->first) active @endif" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="accordion-header" id="heading{{$loop->index}}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$loop->index}}"
                                        aria-expanded="true" aria-controls="collapse{{$loop->index}}">
                                    {{$faq->getQuestion()}}
                                </button>
                            </h2>
                            <div id="collapse{{$loop->index}}"
                                 class="accordion-collapse collapse @if($loop->first) show @endif"
                                 aria-labelledby="heading{{$loop->index}}"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   {!! $faq->getAnswer() !!}
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <img class="sec-shape2" src="/frontend/assets/img/shapes/about2-shape.png" alt="">
    <img class="sec-shape6" src="/frontend/assets/img/shapes/about2-shape.png" alt="">
</div>
