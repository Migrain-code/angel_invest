<div class="roadmap pb120 _relative d-none d-lg-block mt-5" id="roadmap">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="heading2">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                            <span>{{__('ANGELX Roadmap')}}</span></span>
                    <h2 class="text-anime-style-3">{{__('Roadmap')}}</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="roadmap-boxs">
                    @foreach($roadMaps as $roadMap)
                        <div class="row align-items-center parent-area @if($loop->index == 0) active @endif">
                            <div class="col-lg-6 @if($loop->index%2 == 1) order-lg-2 @endif">
                                <div class="circle-box-area @if($loop->index%2 == 1)right @endif">
                                    <div class="circle-box ">
                                        <p>{{$roadMap->year}}</p>
                                        <h3>{{$roadMap->number}}</h3>
                                    </div>
                                    <img src="/frontend/assets/img/shapes/roadmap-shape.png" alt="" class="line-shape">
                                </div>
                            </div>

                            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800">
                                <div class="roadmap-box heading2">
                                    <h4><a href="javascript:void(0)">{{$roadMap->getTitle()}}</a></h4>
                                    <div class="space16"></div>
                                    @php($compText = explode("\n", $roadMap->getDescription()))

                                        @if(count($compText) > 0)
                                            <ul>
                                                @foreach($compText as $compTex)
                                                <li class="text-white">{{$compTex}}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                        <p>{{$roadMap->getDescription()}}</p>
                                        @endif

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <img src="/frontend/assets/img/shapes/about2-shape.png" alt="" class="sec-shape">
</div>
