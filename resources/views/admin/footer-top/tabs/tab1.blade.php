<div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
    <form enctype="multipart/form-data" class="form" action="{{route('admin.settings.update')}}" method="post">
        @csrf
        <!--begin::Modal body-->
        <div class="modal-body py-5 px-lg-17">
            <!--begin::Scroll-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fs-2hx fw-semibold mb-2">Footer Üst Alanı İçerik Ayarları</label>
                    <!--end::Label-->
                </div>

                <!--end::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fs-6 fw-semibold mb-2">Görseli (2000 * 1333)</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="file" class="form-control form-control-solid" placeholder="" name="footer_banner_image" value="" />
                    <!--end::Input-->
                    <div class="imgBox bg-dark">
                        <img src="{{image(setting('footer_banner_image'))}}" class="p-3 w-200px">
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
                            <input type="text" class="form-control form-control-solid" placeholder="" name="footer_content_{{$language->code}}_title" value="{{setting('footer_content_'.$language->code."_title")}}">
                            <!--end::Input-->
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="card mb-3" style="box-shadow: 0px 1px 20px 0px rgba(76, 87, 125, 0.5);">
                <div class="card-body">
                    @foreach($languages as $language)
                       <h4 style="text-align: center"> {{$language->name}}</h4>
                        @foreach(range(1, 2) as $item)

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Buton {{$item}} Başlık  ({{$language->name}})</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="footer_box_{{$item}}_content_{{$language->code}}_title" value="{{setting("footer_box_".$item."_content_".$language->code."_title")}}">
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold mb-2">Buton {{$item}} Link  ({{$language->name}})</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="footer_box_{{$item}}_content_{{$language->code}}_link" value="{{setting("footer_box_".$item."_content_".$language->code."_link")}}">
                                <!--end::Input-->
                            </div>
                            @if(!$loop->last)
                                <hr style="border: 1px solid;">

                            @endif
                            @endforeach
                            <hr style="border: 3px solid;">

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
