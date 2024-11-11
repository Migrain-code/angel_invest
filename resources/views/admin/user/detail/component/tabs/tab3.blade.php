<!--begin:::Tab pane-->
<div class="tab-pane fade" id="kt_ecommerce_customer_advanced" role="tabpanel">
    <!--begin::Card-->
    <div class="card pt-4 mb-6 mb-xl-9">
        <!--begin::Card header-->
        <div class="card-header border-0">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Güvenlik Detayı</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0 pb-5">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                    <!--begin::Table body-->
                    <tbody class="fs-6 fw-semibold text-gray-600">
                    <tr>
                        <td>Telefon</td>
                        <td><a href="tel:{{$customer->phone}}" id="customerNewPhone">{{formatPhone($customer->phone)}}</a></td>
                        <td class="text-end">
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_phone">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																							<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																						</svg>
																					</span>
                                <!--end::Svg Icon-->
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>******</td>
                        <td class="text-end">
                            <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																							<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																						</svg>
																					</span>
                                <!--end::Svg Icon-->
                            </button>
                        </td>
                    </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    <div class="card pt-4 mb-6 mb-xl-9">
        <!--begin::Card header-->
        <div class="card-header border-0">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>İzinler</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0 pb-5">
            <!--begin::Table wrapper-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                    <!--begin::Table body-->
                    <tbody class="fs-6 fw-semibold text-gray-600">
                    <tr>
                        <td>Telefon</td>
                        <td></td>
                        <td class="text-end d-flex justify-content-end">
                            {!! create_switch($customer->permissions->id,$customer->permissions->is_phone == 1 ? true : false, 'CustomerNotificationPermission', 'is_phone') !!}
                        </td>
                    </tr>

                    <tr>
                        <td>E-posta</td>
                        <td></td>
                        <td class="text-end d-flex justify-content-end">
                            {!! create_switch($customer->permissions->id,$customer->permissions->is_email == 1 ? true : false, 'CustomerNotificationPermission', 'is_email') !!}
                        </td>
                    </tr>
                    <tr>
                        <td>Sms</td>
                        <td></td>
                        <td class="text-end d-flex justify-content-end">
                            {!! create_switch($customer->permissions->id,$customer->permissions->is_sms == 1 ? true : false, 'CustomerNotificationPermission', 'is_sms') !!}
                        </td>
                    </tr>
                    <tr>
                        <td>Bildirim</td>
                        <td></td>
                        <td class="text-end d-flex justify-content-end">
                            {!! create_switch($customer->permissions->id,$customer->permissions->is_notification == 1 ? true : false, 'CustomerNotificationPermission', 'is_notification') !!}
                        </td>
                    </tr>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table wrapper-->
        </div>
        <!--end::Card body-->
    </div>
</div>
<!--end:::Tab pane-->
