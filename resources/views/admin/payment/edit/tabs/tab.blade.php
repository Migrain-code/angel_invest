<div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
    <!--begin::Input group-->
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Sistem Cüzdan Kimliği</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="" name="system_wallet_id" value="{{$payment->system_wallet_id}}" />
            <!--end::Input-->
        </div>
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">TX ID</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="" name="tx_id" value="{{$payment->tx_id}}" />
            <!--end::Input-->
        </div>
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Kullanıcı Cüzdan Kimliği</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="" name="wallet_id" value="{{$payment->wallet_id}}" />
            <!--end::Input-->
        </div>
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Gönderilecek Tutar</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="" name="currency" value="{{$payment->currency}}" />
            <!--end::Input-->
        </div>
        <div class="fv-row mb-7">
            <!--begin::Label-->
            <label class="required fs-6 fw-semibold mb-2">Verilecek Token</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" placeholder="" name="token" value="{{$payment->token}}" /><!--end::Input-->
        </div>


</div>
