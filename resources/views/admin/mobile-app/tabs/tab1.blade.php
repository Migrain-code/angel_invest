<div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
    <form enctype="multipart/form-data" class="form" action="{{route('admin.settings.update')}}" method="post">
        @csrf
        <!--begin::Modal body-->
        <div class="modal-body py-5 px-lg-17">
            <!--begin::Scroll-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fs-2hx fw-semibold mb-2">Mobil Uygulama Alanı İçerik Ayarları</label>
                    <!--end::Label-->
                </div>

                <!--end::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Görseli (2000 * 1333)</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="file" class="form-control form-control-solid" placeholder="" name="mobile_banner_image" value="" />
                    <!--end::Input-->
                    <div class="imgBox bg-dark">
                        <img src="{{image(setting('mobile_banner_image'))}}" class="p-3 w-200px">
                    </div>
                </div>
            @foreach($languages as $language)
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Mobil Uygulama Başlığı  ({{$language->name}})</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid" placeholder="" name="mobile_content_{{$language->code}}_title" value="{{setting('mobile_content_'.$language->code."_title")}}">
                    <!--end::Input-->
                </div>
            @endforeach
            @foreach($languages as $language)
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Mobil Uygulama Metni  ({{$language->name}})</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <textarea type="text" class="form-control form-control-solid tinyMiceEditor" placeholder="" name="mobile_content_{{$language->code}}_text">{{setting('mobile_content_'.$language->code."_text")}}</textarea>
                    <!--end::Input-->
                </div>
            @endforeach
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Mobil Uygulama App Store Link</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="" name="mobile_app_store_link" value="{{setting('mobile_app_store_link')}}">
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Mobil Uygulama Play Store Link</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="" name="mobile_app_play_store_link" value="{{setting('mobile_app_play_store_link')}}">
                <!--end::Input-->
            </div>
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
