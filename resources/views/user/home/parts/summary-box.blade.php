<div class="col-xl-3 col-sm-6">
    <div class="card overflow-hidden">
        <div class="card-header align-items-start border-0 pb-0">
            <div class="mr-auto">
                <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success"
                                         aria-hidden="true"></i>{{__('Lansmanda Madeni Para Değeriniz')}}</p>
                <h2 class="text-black mb-0 font-w600">$ {{auth('user')->user()->totalTokenPrice()}}</h2>
            </div>
            <img src="/user/assets/images/x.png" alt="" style="width: 42px; height: 42px;">
        </div>
        <div class="card-body p-0">
            <canvas id="widgetChart" class="max-h80 mt-auto"></canvas>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card overflow-hidden">
        <div class="card-header align-items-start border-0 pb-0">
            <div class="mr-auto">
                <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger"
                                         aria-hidden="true"></i>{{__('Toplam Angelx Bakiyesi')}}</p>
                <h2 class="text-black mb-0 font-w600">{{formatPrice(auth('user')->user()->totalToken())}} </h2>
            </div>
            <img src="/user/assets/images/x.png" alt="" style="width: 42px; height: 42px;">
        </div>
        <div class="card-body p-0">
            <canvas id="widgetChart2" class="max-h80 mt-auto"></canvas>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card overflow-hidden">
        <div class="card-header align-items-start border-0 pb-0">
            <div class="mr-auto">
                <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger"
                                         aria-hidden="true"></i>{{__('Toplam Satın Alım')}}</p>
                <h2 class="text-black mb-0 font-w600">{{auth('user')->user()->payments()->count()}}</h2>
            </div>
            <img src="/user/assets/images/x.png" alt="" style="width: 42px; height: 42px;">
        </div>
        <div class="card-body p-0">
            <canvas id="widgetChart3" class="max-h80 mt-auto"></canvas>
        </div>
    </div>
</div>
<div class="col-xl-3 col-sm-6">
    <div class="card overflow-hidden">
        <div class="card-header align-items-start border-0 pb-0">
            <div class="mr-auto">
                <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success"
                                         aria-hidden="true"></i>Davet Kazançları</p>
                <h2 class="text-black mb-0 font-w600">$0, 00</h2>
            </div>
            <img src="/user/assets/images/x.png" alt="" style="width: 42px; height: 42px;">
        </div>
        <div class="card-body p-0">
            <canvas id="widgetChart4" class="max-h80 mt-auto"></canvas>
        </div>
    </div>
</div>
