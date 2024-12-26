@extends('admin.layouts.master')
@section('title', 'Ödeme Detayı')
@section('styles')
    <style>
        .nav-line-tabs .nav-item .nav-link {
            color: var(--kt-gray-500);
            border: 0;
            border-bottom: 1px solid transparent;
            transition: color 0.2s ease;
            padding: 0.5rem 0;
            margin: 0 1rem;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
@endsection
@section('breadcrumb')
    <!--begin::Title-->
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Ödeme Detayı</h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">Home</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{route('admin.home')}}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        <!--end::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item text-muted"></li>
        <!--end::Item-->
        <li class="breadcrumb-item text-muted">
            <a href="{{route('admin.payment.index')}}" class="text-muted text-hover-primary">Ödemeler</a>
        </li>
        <!--end::Item-->
        <!--begin::Item-->
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>

        <li class="breadcrumb-item text-muted">
           Ödeme Detayı
        </li>
    </ul>
    <!--end::Breadcrumb-->
@endsection

@section('content')

    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Card-->
        <div class="row">
            <div class="col-4">
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-150px symbol-circle mb-7">
                                <img src="{{image($payment->user->image)}}" alt="image">
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{$payment->user->name}}</a>
                            <!--end::Name-->
                            <!--begin::Email-->
                            <a href="mailto:{{$payment->user->email}}" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{$payment->user->email}}</a>
                            <!--end::Email-->
                        </div>

                        <!--end::Details toggle-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--begin::Details content-->
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">USER ID</div>
                            <div class="text-gray-600">ID-{{$payment->user->id}}</div>
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">İşlem Tarihi</div>
                            <div class="text-gray-600">
                                <a href="" class="text-gray-600 text-hover-primary">{{$payment->created_at->format('d.m.Y H:i:s')}}</a>
                            </div>
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Toplam Token</div>
                            <div class="text-gray-600">
                                <a href="" class="text-gray-600 text-hover-primary">{{$payment->user->totalToken()}}</a>
                            </div>
                            <div class="fw-bold mt-5">Bu ödemede Verilecek Token</div>
                            <div class="text-gray-600">
                                <a href="" class="text-gray-600 text-hover-primary">{{$payment->token}}</a>
                            </div>
                            <div class="fw-bold mt-5">Onay Sonrası Toplam Token</div>
                            <div class="text-gray-600">
                                <a href="" class="text-gray-600 text-hover-primary">{{$payment->user->totalToken() + $payment->token}}</a>
                            </div>
                            <!--begin::Details item-->
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">Ödeme Detayı</div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->

                    <div class="card-body pt-0">
                        <form class="form" action="{{route('admin.payment.update', $payment->id)}}" method="post" id="kt_modal_add_faq_form" enctype="multipart/form-data" data-kt-redirect="">
                            <!--begin::Modal body-->
                            @csrf
                            @method('PUT')
                            <div class="modal-body py-3">
                                <!--begin::Scroll-->
                                <!--begin::Input group-->
                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_tab_pane_1">Ödeme Bilgileri</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    @include('admin.payment.edit.tabs.tab')
                                </div>

                                <!--end::Scroll-->
                            </div>
                            <!--end::Modal body-->
                            <!--begin::Modal footer-->
                            <div class="modal-footer flex-center">
                                <!--begin::Button-->
                                <button type="submit" id="kt_modal_add_faq_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Modal footer-->
                        </form>

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>

    </div>

@endsection

@section('scripts')

@endsection
