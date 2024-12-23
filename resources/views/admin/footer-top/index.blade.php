@extends('admin.layouts.master')
@section('title', 'Footer Üst Alanı Ayarları')
@section('styles')

@endsection
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Layout-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin:::Tabs-->
                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15">
                    <li class="nav-item">
                        <a class="nav-link text-active-primary active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor" />
                                      </svg>
                            </span>
                            <!--end::Svg Icon-->
                            Footer Üst Alanı İçerik Ayarları

                        </a>
                    </li>


                </ul>
                <!--end:::Tabs-->
                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    @include('admin.footer-top.tabs.tab1')
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: ".tinyMiceEditor",
            height : "400",
            language: 'tr',
            plugins : "advlist autolink link image lists charmap print preview",
            toolbar: "formatselect | bold italic underline | alignleft aligncenter alignright | numlist bullist | link image | preview",
        });
    </script>
@endsection
