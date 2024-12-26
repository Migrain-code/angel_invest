<div class="modal fade" id="kt_modal_add_notification" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" method="post" action="{{route('admin.customer.sendNotification')}}" id="kt_modal_add_notification_form">
                <!--begin::Modal header-->
                @csrf
                <input type="hidden" name="customer_id" value="{{$customer->id}}">
                <div class="modal-header" id="kt_modal_add_notification_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Bildirim Oluştur</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div id="kt_modal_add_notification_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                          height="2" rx="1"
                                                                          transform="rotate(-45 6 17.3137)"
                                                                          fill="currentColor"/>
																	<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                          transform="rotate(45 7.41422 6)"
                                                                          fill="currentColor"/>
																</svg>
															</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_notification_scroll"
                         data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                         data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_notification_header"
                         data-kt-scroll-wrappers="#kt_modal_add_notification_scroll" data-kt-scroll-offset="300px">
                        <!--begin::Billing form-->
                        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                            @foreach($languages as $row)
                                <li class="nav-item">
                                    <a class="nav-link @if($loop->first) active @endif" data-bs-toggle="tab" href="#kt_tab_pane_{{$row->code}}">Bildirim ({{$row->name}})</a>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            @foreach($languages as $row)
                                @include('admin.customer.detail.modals.notification-tab')
                            @endforeach

                        </div>

                        <!--end::Billing form-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_add_notification_cancel" class="btn btn-light me-3">Discard</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_add_notification_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
															<span
                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
