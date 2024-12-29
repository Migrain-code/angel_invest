<div class="tab-pane fade" id="kt_tab_pane_other" role="tabpanel">
    <img src="{{image($slider->image)}}" onclick="window.open('{{image($slider->image)}}')" width="100px">
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold mb-2">Slider 1. Görseli</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="file" class="form-control form-control-solid" placeholder="" name="image" value="" />
        <!--end::Input-->
    </div>
    <img src="{{image($slider->image_2)}}" onclick="window.open('{{image($slider->image_2)}}')" width="100px">
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold mb-2">Slider 2. Görseli</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="file" class="form-control form-control-solid" placeholder="" name="image_2" value="" />
        <!--end::Input-->
    </div>
    <img src="{{image($slider->image_3)}}" onclick="window.open('{{image($slider->image_3)}}')" width="100px">
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold mb-2">Slider 3. Görseli</label>
        <!--end::Label-->
        <!--begin::Input-->
        <input type="file" class="form-control form-control-solid" placeholder="" name="image_3" value="" />
        <!--end::Input-->
    </div>
</div>
