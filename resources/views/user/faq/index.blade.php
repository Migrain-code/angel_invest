@extends('user.layouts.master')
@section('title', __('Sık Sorulan Sorular'))
@section('styles')
@endsection
@section('content')
        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">{{__('Sık Sorulan Sorular')}}</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>


            </div>
        </div>
        <div class="col-lg-12">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">{{__('Sık Sorulan Sorular')}}</h2>

                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-xs-12">

                            <!-- Bootstrap FAQ - START -->
                            <div class="panel-group no-mb faq-panels" id="accordion">
                                @foreach($faqs as $faq)
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->index}}">
                                                    {{$faq->getQuestion()}}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse{{$loop->index}}" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>{!! $faq->getAnswer() !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                <!-- bs faq end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection
@section('scripts')

@endsection
