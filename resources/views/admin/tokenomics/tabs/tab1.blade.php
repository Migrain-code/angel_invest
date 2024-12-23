<div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
    <form enctype="multipart/form-data" class="form" action="{{route('admin.settings.update')}}" method="post">
        @csrf
        <!--begin::Modal body-->
        <div class="modal-body py-5 px-lg-17">
            <!--begin::Scroll-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fs-2hx fw-semibold mb-2">Tokenomic Alanı Ayarları İçerik Ayarları</label>
                    <!--end::Label-->
                </div>

                <!--end::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Görseli (2000 * 1333)</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="file" class="form-control form-control-solid" placeholder="" name="token_banner_image" value="" />
                    <!--end::Input-->
                    <div class="imgBox bg-dark">
                        <img src="{{image(setting('token_banner_image'))}}" class="p-3 w-200px">
                    </div>
                </div>
            <div class="card mb-3" style="box-shadow: 0px 1px 20px 0px rgba(76, 87, 125, 0.5);">
                <div class="card-body">
                    @foreach($languages as $language)
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold mb-2">Başlık  ({{$language->name}})</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="" name="token_content_{{$language->code}}_title" value="{{setting('token_content_'.$language->code."_title")}}">
                            <!--end::Input-->
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card mb-3" style="box-shadow: 0px 1px 20px 0px rgba(76, 87, 125, 0.5);">
                <div class="card-body">
                    @foreach($languages as $language)
                        @foreach(range(1, 4) as $item)
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Kutu {{$item}} Başlık  ({{$language->name}})</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="token_box_{{$item}}_content_{{$language->code}}_title" value="{{setting("token_box_".$item."_content_".$language->code."_title")}}">
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Kutu {{$item}} Tarih  ({{$language->name}})</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="token_box_{{$item}}_content_{{$language->code}}_date" value="{{setting("token_box_".$item."_content_".$language->code."_date")}}">
                                <!--end::Input-->
                            </div>
                            @endforeach
                            <hr>

                    @endforeach
                </div>
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
