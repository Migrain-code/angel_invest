<div class="work2 pb120" id="HowItWorks">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading2">
                    <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
                        <span>{{__('İş süreci')}}</span></span>
                    <h2 class="text-anime-style-3">{{__('Nasıl Çalışır')}}</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
                @foreach($references as $reference)
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="work2-box-area">
                        <div class="icon-area">
                            <div class="icon">
                                <img src="{{image($reference->image)}}" alt="">
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="heading2">
                                <h4><a href="#">dsadsa</a></h4>
                                <div class="space16"></div>
                                <p>
                                    {{$reference->getDescription()}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach




        </div>
    </div>
    <img class="shape" src="/frontend/assets/img/shapes/work2-shape.png" alt="">
</div>
