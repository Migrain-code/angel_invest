<div class="tab-pane fade" id="kt_ecommerce_settings_social" role="tabpanel">
    <form enctype="multipart/form-data" class="form" action="{{route('admin.settings.update')}}" method="post">
        @csrf
        <!--begin::Modal body-->
        <div class="modal-body py-5 px-lg-17">
            <!--begin::Scroll-->
            <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fs-2hx fw-semibold mb-2">Sosyal Medya Ayarları</label>
                    <!--end::Label-->
                </div>

                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Facebook <a href="{{setting('speed_facebook_url')}}" target="_blank">Görüntüle</a></label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="speed_facebook_url" value="{{setting('speed_facebook_url')}}" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Twitter <a href="{{image(setting('speed_twitter_url'))}}" target="_blank">Görüntüle</a></label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="speed_twitter_url" value="{{setting('speed_twitter_url')}}" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">İnstagram <a href="{{setting('speed_intagram_url')}}" target="_blank">Görüntüle</a></label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="speed_intagram_url" value="{{setting('speed_intagram_url')}}" />
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Telegram <a href="{{setting('speed_telegram_url')}}" target="_blank">Görüntüle</a></label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="speed_telegram_url" value="{{setting('speed_telegram_url')}}" />
                    <!--end::Input-->
                </div>

            </div>
            <!--end::Scroll-->
        </div>
        <!--end::Modal body-->
        <!--begin::Modal footer-->
        <div class="modal-footer flex-center">
            <!--begin::Button-->
            <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
        <!--end::Modal footer-->
    </form>

</div>
