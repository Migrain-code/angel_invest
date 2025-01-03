@extends('user.layouts.master')

@section('content')
    <div class="row">
        @include('user.home.parts.summary-box')


        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black">{{__('En İyi Angelx Yatırımcıları')}}</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex mb-3 justify-content-between align-items-center">
                            </div>
                            <div class="testimonial-one px-4 owl-right-nav owl-carousel owl-loaded owl-drag">
                                @php
                                    // Kullanıcıların maksimum token miktarını al
                                    $maxTokens = $topUserTokens->max(fn($user) => $user->total_tokens);
                                @endphp
                                <div class="col-xs-12">
                                    @foreach($topUserTokens as $user)
                                        @php
                                            // Bu kullanıcının token miktarını maksimum token miktarına oranla
                                            //$progressPercentage = $maxTokens > 0 ? ($user->totalToken() / $maxTokens) * 100 : 0;
                                        @endphp
                                        <div class="items">
                                            <div class="text-center">
                                                <img class="mb-3 rounded" src="{{image($user->image)}}" alt="">
                                                <h5 class="text-black mb-0">{{$user->name}}</h5>
                                                <span class="fs-12">Token {{$user->totalToken()}} </span>
                                            </div>
                                        </div>

                                    @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        @include('user.home.parts.orders')
    </div>
@endsection
@section('scripts')

@endsection
