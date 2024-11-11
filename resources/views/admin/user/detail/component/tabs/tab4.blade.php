<!--begin:::Tab pane-->
<div class="tab-pane fade" id="kt_ecommerce_customer_comments" role="tabpanel">
    <!--begin::Card-->
    <div class="card pt-4 mb-6 mb-xl-9">
        <!--begin::Card header-->
        <div class="card-header border-0">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Yorumlar</h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div id="kt_ecommerce_customer_comments" class="card-body pt-0 pb-5">
            <!--begin::Addresses-->
            {{--
                @forelse($customer->comments as $comment)
                <!--begin::Address Item-->
                <div class="py-0">
                    <!--begin::Header-->
                    <div class="py-3 d-flex flex-stack flex-wrap">
                        <!--begin::Toggle-->
                        <div class="d-flex align-items-center collapsible collapsed rotate" data-bs-toggle="collapse" href="#kt_ecommerce_customer_addresses_{{$comment->id}}" role="button" aria-expanded="false" aria-controls="kt_customer_view_payment_method_1">
                            <!--begin::Arrow-->
                            <div class="me-3 rotate-90">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="currentColor" />
                                </svg>
                            </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Arrow-->
                            <!--begin::Summary-->
                            <div class="me-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 fw-bold">{{$comment->business->name}}</div>
                                    @if($comment->status == 1)
                                        <div class="badge badge-light-success ms-5">Yayında</div>
                                    @else
                                        <div class="badge badge-light-danger ms-5">Yayında Değil</div>
                                    @endif
                                </div>
                                <div class="text-muted">{{$comment->created_at->format('d.m.Y H:i:s')}}</div>
                            </div>
                            <!--end::Summary-->
                        </div>
                        <!--end::Toggle-->
                        <!--begin::Toolbar-->
                        <div class="d-flex my-3 ms-9 align-items-center">
                            <!--begin::Edit-->
                            <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" onclick="getComment('{{$comment->id}}')" data-bs-toggle="modal" data-bs-target="#kt_modal_update_address">
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit">
                                <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                        <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            </a>
                            <!--end::Edit-->
                            <!--begin::Delete-->
                            {!! create_form_delete_button('BusinessComment', $comment->id, 'Yorum', 'Yorumu Silmek İstediğinize Eminmisiniz?') !!}
                            <!--end::Delete-->
                            <!--begin::More-->
                            {!! create_switch($comment->id,$comment->status == 1 ? true : false, 'BusinessComment', 'status') !!}

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div id="kt_ecommerce_customer_addresses_{{$comment->id}}" class="collapse fs-6 ps-9" data-bs-parent="#kt_ecommerce_customer_addresses">
                        <!--begin::Details-->
                        <div class="d-flex flex-column pb-5">

                            <div class="text-muted">
                                {!! $comment->content !!}
                            </div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Address Item-->
            @empty
                @include('admin.layouts.components.alerts.empty-alert')
            @endforelse
            --}}


            <!--end::Addresses-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

</div>
<!--end:::Tab pane-->
