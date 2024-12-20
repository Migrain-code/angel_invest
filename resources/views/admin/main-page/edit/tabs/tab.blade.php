<div class="tab-pane fade @if($loop->first) show active @endif" id="kt_tab_pane_{{$row->code}}" role="tabpanel">


    @foreach(range(1, 3) as $boxC)
        <div class="row">
            <div class="fv-row mb-7 col-6">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Kutu {{$boxC}} Başlık</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" class="form-control form-control-solid" placeholder="örn. Yıllık Deneyim" name="box_{{$boxC}}_title[{{$row->code}}]" value="{{$mainPage->getTranslation('box_'.$boxC.'_title', $row->code)}}" />
                <!--end::Input-->

                <label class="required fs-6 fw-semibold my-2">Kutu {{$boxC}} İkon</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="file" class="form-control form-control-solid" placeholder="örn. Yıllık Deneyim" name="box_{{$boxC}}_icon[{{$row->code}}]" value="" />
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7 col-6">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Kutu {{$boxC}} Açıklama</label>
                <!--end::Label-->
                <!--begin::Input-->
                <textarea type="number" class="form-control form-control-solid" placeholder="örn. 10" name="box_{{$boxC}}_counter[{{$row->code}}]" rows="5">{{$mainPage->getTranslation('box_'.$boxC.'_counter', $row->code)}}</textarea>
                <!--end::Input-->
            </div>
        </div>
    @endforeach

</div>
