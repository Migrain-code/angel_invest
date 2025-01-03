@extends('user.layouts.master')
@section('title', 'Satın Al')
@section('styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.4-rc.1/web3.min.js"></script>
    <script src="https://unpkg.com/@walletconnect/web3-provider@1.6.6/dist/umd/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@web3auth/web3auth@0.9.0/dist/web3auth.umd.min.js"></script>
    <script src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
    <script src="https://c0f4f41c-2f55-4863-921b-sdk-docs.github.io/cdn/metamask-sdk.js"></script>
    <style>

        .wallet-option{
            border-bottom: 1px solid #d0d0d0;
            padding: 15px;
            transition: 0.4s;
            cursor: pointer;
        }
        .wallet-option:hover{
            background: #ecebeb;
            border-radius: 15px;
        }
    </style>
@endsection
@section('content')
    <div class="page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Crypto</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Buy ANGELX</a></li>
        </ol>
    </div>
    <div class="d-flex flex-wrap mb-3">
        <h4 class="fs-24 text-black mr-auto font-w600 mb-3">{{__("Angelx Satın Al")}}</h4>
        <div class="card-action coin-tabs mb-3">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link bg-warning active bg-success" data-toggle="tab" href="#Bitcoin"
                       role="tab" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" width="24px"
                             height="24px">
                            <path
                                d="M 30.560547 11 C 25.380547 11 20.700625 14.070312 18.640625 18.820312 L 4.0097656 52.449219 C 1.8597656 57.389219 3.0203906 63.230469 6.9003906 66.980469 L 54.960938 113.43945 C 57.490938 115.88945 60.74 117.10937 64 117.10938 C 67.25 117.10938 70.499063 115.87945 73.039062 113.43945 L 121.09961 66.980469 C 124.97961 63.230469 126.14023 57.389219 123.99023 52.449219 L 109.36914 18.820312 C 107.29914 14.070312 102.61945 11 97.439453 11 L 30.560547 11 z M 30.560547 17 L 97.449219 17 C 100.23922 17 102.75914 18.650937 103.86914 21.210938 L 118.49023 54.839844 C 119.64023 57.499844 119.01969 60.640156 116.92969 62.660156 L 68.869141 109.11914 C 66.139141 111.75914 61.870625 111.75914 59.140625 109.11914 L 11.070312 62.660156 C 8.9803125 60.640156 8.3595312 57.499844 9.5195312 54.839844 L 24.140625 21.210938 C 25.250625 18.650938 27.770547 17 30.560547 17 z M 39 31 C 37.34 31 36 32.34 36 34 C 36 35.66 37.34 37 39 37 L 61 37 L 61 62.970703 C 45.14 62.690703 35.449609 60.209766 32.599609 58.509766 C 34.689609 57.289766 40.770469 55.339453 52.230469 54.439453 C 53.880469 54.309453 55.120234 52.870703 54.990234 51.220703 C 54.860234 49.570703 53.419531 48.330938 51.769531 48.460938 C 34.669531 49.800937 26 53.18 26 58.5 C 26 67.38 50.98 68.770703 61 68.970703 L 61 94 C 61 95.66 62.34 97 64 97 C 65.66 97 67 95.66 67 94 L 67 68.970703 C 77.02 68.770703 102 67.38 102 58.5 C 102 53.18 93.330469 49.800938 76.230469 48.460938 C 74.570469 48.320937 73.129766 49.570703 73.009766 51.220703 C 72.879766 52.870703 74.119531 54.319453 75.769531 54.439453 C 87.229531 55.339453 93.310391 57.279766 95.400391 58.509766 C 92.550391 60.209766 82.87 62.690703 67 62.970703 L 67 37 L 89 37 C 90.66 37 92 35.66 92 34 C 92 32.34 90.66 31 89 31 L 39 31 z" />
                        </svg>
                        CRYPTO
                    </a>
                </li>
                {{--
                    <li class="nav-item">
                    <a class="nav-link bg-secondary" data-toggle="tab" href="#Ethereum" role="tab"
                       aria-selected="false">
                        <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                             viewBox="0 0 488.525 488.526" xml:space="preserve">

										<g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <g id="Layer_8_1_">
                                        <path
                                            d="M461.56,181.557c6.296,0,11.88-4.077,13.798-10.087c1.925-6.013-0.28-12.577-5.432-16.225L254.602,2.667 c-4.978-3.528-11.63-3.559-16.636-0.073L18.701,154.841c-5.2,3.608-7.447,10.175-5.562,16.221 c1.887,6.044,7.48,10.16,13.816,10.16l63.589,0.049c-1.69,3.349-2.658,7.115-2.658,11.112v64.804 c-4.506,4.841-7.264,11.345-7.264,18.475v123.902c-9.539,0.627-17.756,6.205-22.085,14.182H44.507 c-15.905,0-28.838,12.939-28.838,28.838v17.104c0,15.898,12.934,28.838,28.838,28.838h399.492 c15.904,0,28.844-12.939,28.844-28.838v-17.104c0-15.904-12.939-28.838-28.844-28.838h-9.512 c-3.77-6.954-10.492-12.081-18.463-13.713V275.662c0-7.13-2.752-13.634-7.27-18.468v-64.811c0-3.906-0.926-7.584-2.533-10.869 l55.313,0.043C461.548,181.557,461.548,181.557,461.56,181.557z M340.13,181.462c-1.62,3.301-2.558,7.003-2.558,10.921v64.804 c-0.877,0.944-1.675,1.955-2.399,3.015c-12.872-34.939-46.46-59.881-85.866-59.881c-40.155,0-74.251,25.888-86.56,61.872 c-1.042-1.809-2.25-3.501-3.666-5.012v-64.798c0-3.979-0.959-7.727-2.625-11.061L340.13,181.462z M209.368,313.555h15.509 c1.172,13.322,7.624,20.971,19.349,22.943V291.81c-21.58-4.305-32.376-14.845-32.376-31.572c0-9.444,2.919-17.025,8.756-22.785 c5.836-5.764,13.704-9.091,23.62-10.005v-12.312h8.562v12.312c18.974,1.438,29.392,11.113,31.262,29.027h-15.595 c-0.858-9.913-6.089-15.546-15.667-16.873v40.213c13.207,2.722,22.194,6.667,26.932,11.867c4.75,5.188,7.118,12.275,7.118,21.221 c0,9.329-3.008,17.445-9.029,24.345c-6.022,6.899-14.365,10.644-25.021,11.234v12.392h-8.562v-12.239 C222.481,346.253,210.86,334.55,209.368,313.555z M166.345,399.497v-69.111c14.559,31.249,46.217,52.902,82.961,52.902 c35.181,0,65.687-19.875,80.995-48.981v65.179H166.345V399.497z M252.787,336.499v-42.771c7.301,1.925,12.202,4.366,14.692,7.356 c2.503,2.983,3.77,7.258,3.77,12.799C271.249,327.414,265.093,334.952,252.787,336.499z M244.226,278.055 c-5.008-1.279-9.073-3.264-12.19-5.992c-3.118-2.728-4.677-7.057-4.677-13.031c0-11.082,5.617-17.615,16.867-19.585V278.055z" />
                                    </g>
                                </g>
                            </g>

									</svg>
                        PAPARA
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" data-toggle="tab" href="#Dash" role="tab"
                       aria-selected="true">
                        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                             viewBox="0 0 512 512" xml:space="preserve">

										<g>
                                            <path class="st0" d="M261.031,153.484h-5.375v7.484h5.375c1.25,0,2.266-0.344,3-1.031c0.766-0.688,1.156-1.594,1.156-2.719
		c0-1.109-0.391-2-1.156-2.703C263.297,153.828,262.281,153.484,261.031,153.484z" />
                                            <path class="st0" d="M140.75,169.141c0.141-0.391,0.281-0.891,0.344-1.453c0.094-0.578,0.141-1.266,0.172-2.078
		c0.031-0.797,0.031-1.766,0.031-2.891c0-1.109,0-2.063-0.031-2.875s-0.078-1.5-0.172-2.078c-0.063-0.578-0.203-1.047-0.344-1.453
		c-0.156-0.406-0.375-0.75-0.641-1.078c-0.953-1.172-2.359-1.75-4.266-1.75H131.5v18.484h4.344c1.906,0,3.313-0.594,4.266-1.75
		C140.375,169.891,140.594,169.531,140.75,169.141z" />
                                            <path class="st0" d="M88.219,159.938c0.75-0.688,1.141-1.594,1.141-2.719c0-1.109-0.391-2-1.141-2.703
		c-0.75-0.688-1.75-1.031-3.016-1.031h-5.375v7.484h5.375C86.469,160.969,87.469,160.625,88.219,159.938z" />
                                            <polygon class="st0"
                                                     points="229.875,167.219 237.141,167.219 233.563,156.906 	" />
                                            <path class="st0"
                                                  d="M466.656,88H45.344C20.313,88,0,108.313,0,133.344v245.313C0,403.688,20.313,424,45.344,424h421.313
		C491.688,424,512,403.688,512,378.656V133.344C512,108.313,491.688,88,466.656,88z M435.656,138.313
		c12.344,0,22.344,10,22.344,22.344S448,183,435.656,183s-22.344-10-22.344-22.344S423.313,138.313,435.656,138.313z
		 M375.875,138.313c12.344,0,22.344,10,22.344,22.344S388.219,183,375.875,183s-22.344-10-22.344-22.344
		S363.531,138.313,375.875,138.313z M276.781,148.531h10.547c2,0,3.703,0.344,5.141,1c1.406,0.672,2.625,1.719,3.688,3.156
		c0.438,0.609,0.781,1.25,1.031,1.938c0.266,0.672,0.469,1.406,0.563,2.219s0.188,1.703,0.203,2.672
		c0.031,0.969,0.047,2.047,0.047,3.203c0,1.172-0.016,2.25-0.047,3.219c-0.016,0.969-0.109,1.844-0.203,2.656
		s-0.297,1.563-0.563,2.234c-0.25,0.672-0.594,1.328-1.031,1.938c-1.063,1.422-2.281,2.484-3.688,3.141
		c-1.438,0.672-3.141,1-5.141,1h-10.547V148.531z M197.391,159.063c0.047-1.094,0.156-2.094,0.328-3.016
		c0.188-0.922,0.469-1.766,0.859-2.516c0.406-0.781,0.969-1.531,1.703-2.25c1.016-0.938,2.156-1.688,3.406-2.203
		c1.266-0.516,2.75-0.766,4.438-0.766c2.734,0,5.063,0.75,7,2.25s3.156,3.719,3.703,6.703H213c-0.281-1.172-0.813-2.141-1.594-2.891
		s-1.875-1.125-3.281-1.125c-0.781,0-1.5,0.125-2.109,0.391c-0.625,0.266-1.125,0.625-1.547,1.078c-0.281,0.281-0.5,0.625-0.672,1
		s-0.328,0.844-0.438,1.438c-0.109,0.578-0.203,1.313-0.234,2.203c-0.063,0.891-0.094,2.016-0.094,3.359
		c0,1.359,0.031,2.484,0.094,3.375c0.031,0.891,0.125,1.625,0.234,2.219c0.109,0.563,0.266,1.063,0.438,1.422
		c0.172,0.375,0.391,0.703,0.672,1c0.422,0.453,0.922,0.797,1.547,1.078c0.609,0.25,1.328,0.391,2.109,0.391
		c1.406,0,2.531-0.375,3.297-1.141c0.797-0.75,1.328-1.719,1.625-2.875h5.781c-0.547,2.969-1.766,5.203-3.703,6.703
		c-1.938,1.516-4.266,2.266-7,2.266c-1.688,0-3.172-0.281-4.438-0.781c-1.25-0.531-2.391-1.266-3.406-2.219
		c-0.734-0.719-1.297-1.469-1.703-2.219c-0.391-0.781-0.672-1.625-0.859-2.531c-0.172-0.922-0.281-1.938-0.328-3.016
		c-0.031-1.094-0.063-2.313-0.063-3.672C197.328,161.375,197.359,160.156,197.391,159.063z M163.172,148.531h20.969v4.953h-7.625
		v23.422h-5.703v-23.422h-7.641V148.531z M152.844,148.531h5.688v28.375h-5.688V148.531z M125.797,148.531h10.547
		c2,0,3.688,0.344,5.125,1c1.422,0.672,2.656,1.719,3.688,3.156c0.438,0.609,0.781,1.25,1.047,1.938
		c0.266,0.672,0.453,1.406,0.563,2.219s0.172,1.703,0.203,2.672s0.031,2.047,0.031,3.203c0,1.172,0,2.25-0.031,3.219
		s-0.094,1.844-0.203,2.656s-0.297,1.563-0.563,2.234s-0.609,1.328-1.047,1.938c-1.031,1.422-2.266,2.484-3.688,3.141
		c-1.438,0.672-3.125,1-5.125,1h-10.547V148.531z M100.969,148.531h19.219v4.953h-13.531v6.641h11.531v4.953h-11.531v6.891h13.531
		v4.938h-19.219V148.531z M74.125,148.531h11.453c1.484,0,2.797,0.25,3.969,0.703c1.172,0.469,2.172,1.094,3,1.875
		s1.453,1.703,1.859,2.75c0.438,1.047,0.656,2.172,0.656,3.359c0,1.016-0.156,1.922-0.438,2.719c-0.297,0.797-0.688,1.5-1.156,2.125
		c-0.5,0.625-1.063,1.156-1.719,1.594c-0.641,0.438-1.313,0.781-2.031,1.016l6.531,12.234h-6.625l-5.688-11.313h-4.109v11.313
		h-5.703V148.531z M60.344,285.75v-21.875h33.25v21.875H60.344z M93.594,292.75v23.625H75.219c-8.219,0-14.875-6.656-14.875-14.875
		v-8.75H93.594z M60.344,256.875V235h33.25v21.875H60.344z M60.344,228v-8.75c0-8.219,6.656-14.875,14.875-14.875h18.375V228H60.344
		z M47.688,162.719c0-1.344,0.031-2.563,0.063-3.656c0.047-1.094,0.156-2.094,0.344-3.016c0.172-0.922,0.469-1.766,0.844-2.516
		c0.406-0.781,0.969-1.531,1.719-2.25c1-0.938,2.125-1.688,3.406-2.203c1.25-0.516,2.734-0.766,4.422-0.766
		c2.734,0,5.078,0.75,7.016,2.25c1.922,1.5,3.141,3.719,3.688,6.703h-5.813c-0.297-1.172-0.828-2.141-1.594-2.891
		c-0.781-0.75-1.875-1.125-3.297-1.125c-0.797,0-1.484,0.125-2.109,0.391s-1.125,0.625-1.531,1.078c-0.281,0.281-0.5,0.625-0.688,1
		c-0.172,0.375-0.313,0.844-0.438,1.438c-0.109,0.578-0.188,1.313-0.234,2.203s-0.078,2.016-0.078,3.359
		c0,1.359,0.031,2.484,0.078,3.375s0.125,1.625,0.234,2.219c0.125,0.563,0.266,1.063,0.438,1.422c0.188,0.375,0.406,0.703,0.688,1
		c0.406,0.453,0.906,0.797,1.531,1.078c0.625,0.25,1.313,0.391,2.109,0.391c1.422,0,2.531-0.375,3.297-1.141
		c0.797-0.75,1.328-1.719,1.625-2.875h5.781c-0.547,2.969-1.766,5.203-3.688,6.703c-1.938,1.516-4.281,2.266-7.016,2.266
		c-1.688,0-3.172-0.281-4.422-0.781c-1.281-0.531-2.406-1.266-3.406-2.219c-0.75-0.719-1.313-1.469-1.719-2.219
		c-0.375-0.781-0.672-1.625-0.844-2.531c-0.188-0.922-0.297-1.938-0.344-3.016C47.719,165.297,47.688,164.078,47.688,162.719z
		 M128,370.656H48v-16h80V370.656z M132.094,228v7v9.031v0.594v12.25v7v9.625v5.531v6.719v7v13.406v10.219h-31.5v-10.219V292.75v-7
		v-6.719V273.5v-9.625v-7v-12.25v-0.594V235v-7v-7.594v-16.031h18.375h13.125h5.25h16.625h3.484c8.219,0,14.891,6.656,14.891,14.875
		V228h-18.375h-16.625H132.094z M139.094,256.875V235h33.25v21.875H139.094z M172.344,263.875v21.875h-33.25v-21.875H172.344z
		 M139.094,316.375V292.75h33.25v8.75c0,8.219-6.672,14.875-14.891,14.875H139.094z M240,370.656h-80v-16h80V370.656z
		 M240.375,176.906l-1.719-5.016h-10.375l-1.781,5.016h-5.938l10.625-28.375h4.469l10.688,28.375H240.375z M259.75,165.594h-4.094
		v11.313h-5.703v-28.375h11.453c1.469,0,2.797,0.25,3.969,0.703c1.172,0.469,2.172,1.094,3,1.875
		c0.813,0.781,1.438,1.703,1.859,2.75c0.438,1.047,0.641,2.172,0.641,3.359c0,1.016-0.141,1.922-0.438,2.719
		c-0.281,0.797-0.672,1.5-1.156,2.125c-0.5,0.625-1.063,1.156-1.703,1.594s-1.328,0.781-2.047,1.016l6.531,12.234h-6.609
		L259.75,165.594z M352,370.656h-80v-16h80V370.656z M464,370.656h-80v-16h80V370.656z M464,322.656H304v-16h160V322.656z" />
                                            <path class="st0" d="M291.75,169.141c0.125-0.391,0.266-0.891,0.344-1.453c0.078-0.578,0.125-1.266,0.156-2.078
		c0.031-0.797,0.031-1.766,0.031-2.891c0-1.109,0-2.063-0.031-2.875s-0.078-1.5-0.156-2.078s-0.219-1.047-0.344-1.453
		c-0.156-0.406-0.375-0.75-0.656-1.078c-0.938-1.172-2.375-1.75-4.266-1.75h-4.344v18.484h4.344c1.891,0,3.328-0.594,4.266-1.75
		C291.375,169.891,291.594,169.531,291.75,169.141z" />
                                        </g>
									</svg>
                        KREDİ KART
                    </a>
                </li>
                --}}
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <!-- ANGELX -->
        <div class="tab-pane fade show active" id="Bitcoin">
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="card">
                        <div class="card-header pb-0 border-0">
                            <h4 class="mb-0 text-black fs-20">About</h4>

                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img class="mb-3" src="public/images/svg/btc.svg" alt="">
                                <h2 class="fs-24 font-w600 text-black mb-0">ANGELX</h2>
                                <p class="fs-14 font-w600 text-black">ANGELX</p>
                                <span class="text-primary fs-14">1 ANGELX = 0.005 USDT</span>
                            </div>
                            <p class="fs-14">Angel Investors Club, vizyoner proje sahiplerini ileri görüşlü
                                melek yatırımcılarla buluşturan ve blok zinciri inovasyonunu teşvik etmek
                                için stratejik işbirliklerini teşvik eden yenilikçi bir platformdur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="card">
                        <div
                            class="card-header pb-0 d-block d-sm-flex flex-wrap border-0 align-items-center">
                            <div class="mr-auto mb-3">
                                <h4 class="fs-20 text-black">{{__("Angelx Satın Al")}}</h4>
                            </div>

                        </div>
                        <div class="col-12 mb-3">
                            <div class="basic-form">
                                <form method="post" action="{{route('user.panel.buy.token')}}">
                                    @csrf
                                    <div class="d-flex gap-3">
                                        <select class="form-control default-select mb-2" name="system_wallet_address">
                                            @foreach($systemWallets as $systemWallet)
                                                <option @selected(old('system_wallet_address') == $systemWallet->wallet_id) value="{{$systemWallet->wallet_id}}">
                                                    {{$systemWallet->wallet_id}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button class="btn btn-icon btn-outline-primary ml-2" type="button" onclick="copyButton()"
                                                style="display: flex;
                                        justify-content: center;
                                        align-items: center;max-height:55px"><i class="fa fa-copy"></i></button>
                                    </div>
                                    <div class="d-flex">
                                        <div class="input-group mb-2">
                                            <input type="text" id="walletAddress" readonly value="{{old('user_wallet_address')}}" name="user_wallet_address" class="form-control"
                                                   placeholder="{{__('Cüzdan Adresiniz')}}" >
                                        </div>
                                        <button class="btn btn-icon btn-outline-primary ml-2" type="button" data-toggle="modal" data-target="#walletModal"
                                                style="display: flex;
                                        justify-content: center;
                                        align-items: center;max-height:55px"><i class="fa fa-credit-card"></i></button>

                                    </div>

                                    <div class="input-group mb-2">
                                        <input type="text" name="tx_id" value="{{old('tx_id')}}" class="form-control" placeholder="Tx Id">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$0.005</span>
                                        </div>
                                        <input type="text" name="amount" value="{{old('amount')}}"  id="dollarPriceInput" class="form-control">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ANGELX</span>
                                        </div>
                                        <input type="text" id="cryptoPriceInput" placeholder="Total Token" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 ">{{__("Angelx Satın Al")}}</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="walletModal">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 15px !important;"> <!-- Modal Başlığı -->

                            <div class="modal-body text-center">
                                <div class="wallet-option mb-4" onclick="connectMetaMask()">
                                    <img src="/user/assets/images/metamask.png" alt="MetaMask" style="width: 50px;">
                                    <h3 class="mt-2" style="color: black; font-weight: bold;font-size: large;"> Meta Mask</h3>
                                    <p>MetaMask Cüzdanınıza Bağlanın</p>
                                </div>
                                <div class="wallet-option mb-4" onclick="connectTrustWallet()">
                                    <img src="/user/assets/images/trustwallet.png" alt="MetaMask" style="width: 50px;">
                                    <h3 class="mt-2" style="color: black; font-weight: bold;font-size: large;"> TrustWallet</h3>
                                    <p>TrustWallet Cüzdanınıza Bağlanın</p>
                                </div>
                                {{--
                                    <div class="wallet-option" onclick="connectWalletConnect()">
                                    <img src="/user/assets/images/walletconnect.png"  alt="WalletConnect" style="width:50px">
                                    <h5 class="mt-2" style="color: black; font-weight: bold;font-size: large;">
                                        WalletConnect
                                    </h5>
                                    <p>Bağlanmak için WalletConnect ile tarayın</p>
                                </div>
                                --}}
                            </div> <!-- Modal Altbilgisi -->

                        </div>
                    </div>
                </div>
               @include('user.home.parts.orders')
            </div>
        </div>

        {{--
        <div class="tab-pane fade" id="Ethereum">
            <!-- Angelx -->
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="card">
                        <div class="card-header pb-0 border-0">
                            <h4 class="mb-0 text-black fs-20">About</h4>

                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img class="mb-3" src="public/images/svg/btc.svg" alt="">
                                <h2 class="fs-24 font-w600 text-black mb-0">ANGELX</h2>
                                <p class="fs-14 font-w600 text-black">ANGELX</p>
                                <span class="text-primary fs-14">1 ANGELX = 0.005 USDT</span>
                            </div>
                            <p class="fs-14">Angel Investors Club, vizyoner proje sahiplerini ileri görüşlü
                                melek yatırımcılarla buluşturan ve blok zinciri inovasyonunu teşvik etmek
                                için stratejik işbirliklerini teşvik eden yenilikçi bir platformdur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="card">
                        <div
                            class="card-header pb-0 d-block d-sm-flex flex-wrap border-0 align-items-center">
                            <div class="mr-auto mb-3">
                                <h4 class="fs-20 text-black">Buy ANGELX</h4>
                            </div>

                        </div>
                        <div class="col-xl-10 col-lg-10 mx-auto">
                            <div class="basic-form">
                                <form action="#">
                                    <select class="form-control default-select mb-2">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control"
                                               placeholder="Cüzdan Adresiniz">
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Tx Id">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$0.005</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ANGELX</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 ">Satın Al</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <!-- Buy Order -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="mb-0 text-black fs-20">Buy Order</h4>
                                    <div class="dropdown ml-auto">
                                        <div class="btn-link" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="table-responsive">
                                        <table class="table text-center bg-info-hover tr-rounded">
                                            <thead>
                                            <tr>
                                                <th class="text-left">Price</th>
                                                <th class="text-center">Amount</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-left">82.3</td>
                                                <td>0.15</td>
                                                <td class="text-right">$134,12</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">83.9</td>
                                                <td>0.18</td>
                                                <td class="text-right">$237,31</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">84.2</td>
                                                <td>0.25</td>
                                                <td class="text-right">$252,58</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">86.2</td>
                                                <td>0.35</td>
                                                <td class="text-right">$126,26</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">91.6</td>
                                                <td>0.75</td>
                                                <td class="text-right">$46,92</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">92.6</td>
                                                <td>0.21</td>
                                                <td class="text-right">$123,27</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">93.9</td>
                                                <td>0.55</td>
                                                <td class="text-right">$212,56</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">94.2</td>
                                                <td>0.18</td>
                                                <td class="text-right">$129,26</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0 text-center">
                                    <a href="javascript:void(0);" class="btn-link">Show more <i
                                            class="fa fa-caret-right ml-2 scale-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="Dash">
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="card">
                        <div class="card-header pb-0 border-0">
                            <h4 class="mb-0 text-black fs-20">About</h4>

                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <img class="mb-3" src="public/images/svg/btc.svg" alt="">
                                <h2 class="fs-24 font-w600 text-black mb-0">ANGELX</h2>
                                <p class="fs-14 font-w600 text-black">ANGELX</p>
                                <span class="text-primary fs-14">1 ANGELX = 0.005 USDT</span>
                            </div>
                            <p class="fs-14">Angel Investors Club, vizyoner proje sahiplerini ileri görüşlü
                                melek yatırımcılarla buluşturan ve blok zinciri inovasyonunu teşvik etmek
                                için stratejik işbirliklerini teşvik eden yenilikçi bir platformdur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="card">
                        <div
                            class="card-header pb-0 d-block d-sm-flex flex-wrap border-0 align-items-center">
                            <div class="mr-auto mb-3">
                                <h4 class="fs-20 text-black">Buy ANGELX</h4>
                            </div>

                        </div>
                        <div class="col-xl-10 col-lg-10 mx-auto">
                            <div class="basic-form">
                                <form action="#">
                                    <select class="form-control default-select mb-2">
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control"
                                               placeholder="Cüzdan Adresiniz">
                                    </div>
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Tx Id">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$0.005</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">ANGELX</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 ">Satın Al</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12">
                    <div class="row">
                        <!-- Buy Order -->
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="mb-0 text-black fs-20">Buy Order</h4>
                                    <div class="dropdown ml-auto">
                                        <div class="btn-link" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                 height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                    <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Edit</a>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <div class="table-responsive">
                                        <table class="table text-center bg-info-hover tr-rounded">
                                            <thead>
                                            <tr>
                                                <th class="text-left">Price</th>
                                                <th class="text-center">Amount</th>
                                                <th class="text-right">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-left">82.3</td>
                                                <td>0.15</td>
                                                <td class="text-right">$134,12</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">83.9</td>
                                                <td>0.18</td>
                                                <td class="text-right">$237,31</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">84.2</td>
                                                <td>0.25</td>
                                                <td class="text-right">$252,58</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">86.2</td>
                                                <td>0.35</td>
                                                <td class="text-right">$126,26</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">91.6</td>
                                                <td>0.75</td>
                                                <td class="text-right">$46,92</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">92.6</td>
                                                <td>0.21</td>
                                                <td class="text-right">$123,27</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">93.9</td>
                                                <td>0.55</td>
                                                <td class="text-right">$212,56</td>
                                            </tr>
                                            <tr>
                                                <td class="text-left">94.2</td>
                                                <td>0.18</td>
                                                <td class="text-right">$129,26</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0 text-center">
                                    <a href="javascript:void(0);" class="btn-link">Show more <i
                                            class="fa fa-caret-right ml-2 scale-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        --}}
    </div>
@endsection
@section('scripts')

    <script>
        $('#dollarPriceInput').on('input', function () {
            let oneTokenPrice = 0.005;
            var dollarPrice = $(this).val();
            var cryptoPrice = dollarPrice / oneTokenPrice;
            $('#cryptoPriceInput').val(cryptoPrice);
        });
        $('#cryptoPriceInput').on('input', function () {
            let oneTokenPrice = 0.005;
            var dollarPrice = $(this).val();
            var cryptoPrice = dollarPrice * oneTokenPrice;
            $('#dollarPriceInput').val(cryptoPrice);
        });
    </script>
    <script>
        let web3Modal;
        let provider;
        let web3;

        window.addEventListener('load', async () => {
            const providerOptions = {
                walletconnect: {
                    package: WalletConnectProvider.default,
                    options: {
                        infuraId: "4973a0f2383a47999fedf147bf68737f"
                    }
                },
                metamask: {
                    package: true
                },
                trustwallet: {
                    package: WalletConnectProvider.default,
                    options: {
                        infuraId: "4973a0f2383a47999fedf147bf68737f"
                    }
                }
            };

            web3Modal = new Web3Modal.default({
                cacheProvider: false,
                providerOptions
            });

            // Otomatik olarak cüzdan bağlamak için kontrol
            const cachedAddress = localStorage.getItem('walletAddress');
            if (cachedAddress) {
                document.getElementById('walletAddress').value = cachedAddress;
                document.getElementById('btn-connect').style.display = 'none';
                document.getElementById('disconnectButton').style.display = 'inline-block';
            }
        });

        function openModal() {
            document.getElementById('walletModal').style.display = "block";
        }

        function closeModal() {
            $('#walletModal').modal('hide');
        }

        async function connectMetaMask() {
            closeModal();
            if (window.ethereum && window.ethereum.isMetaMask) {
                const MMSDK = new MetaMaskSDK.MetaMaskSDK({
                    dappMetadata: {
                        name: "Angelx DAPP",
                    },
                    infuraAPIKey: "4973a0f2383a47999fedf147bf68737f",
                });
                const accounts = await MMSDK.connect();
                if (accounts.length > 0) {
                    const walletAddressTex = accounts[0];
                    handleWalletConnected(walletAddressTex);
                }
            } else {
                alert('MetaMask is not installed. Please install it to use this option.');
            }
        }

        async function connectTrustWallet() {
            closeModal();
            if (window.ethereum && window.ethereum.isMetaMask) {
                provider = window.ethereum;
                await provider.request({method: 'eth_requestAccounts'});
                connectWallet();
            } else {
                alert('TrustWallet is not installed. Please install it to use this option.');
            }
        }

        async function connectWalletConnect() {
            closeModal();
            provider = await web3Modal.connectTo('walletconnect');
            connectWallet();
        }

        async function connectWallet() {
            web3 = new Web3(provider);
            const accounts = await web3.eth.getAccounts();
            if (accounts.length > 0) {
                const walletAddress = accounts[0];
                handleWalletConnected(walletAddress);
            }
        }

        function handleWalletConnected(walletAddress) {
            document.getElementById('walletAddress').value = walletAddress;
            document.getElementById('btn-connect').style.display = 'none';
            document.getElementById('disconnectButton').style.display = 'inline-block';

            // Cüzdan adresini localStorage'a kaydet
            localStorage.setItem('walletAddress', walletAddress);

            Toast.fire({
                icon: 'success',
                title: 'Wallet Connected Successfully',
            });
        }

        function disconnect() {
            if (provider && provider.close) {
                provider.close();
            }
            provider = null;
            web3 = null;
            document.getElementById('walletAddress').value = "";
            document.getElementById('btn-connect').style.display = 'inline-block';
            document.getElementById('disconnectButton').style.display = 'none';

            // Cüzdan adresini localStorage'dan sil
            localStorage.removeItem('walletAddress');

            Toast.fire({
                icon: 'success',
                title: 'Disconnected from wallet.',
            });
        }
    </script>
    <script>
        function copyButton(){

            let copWalletAddress = $('select[name="system_wallet_address"]').val();
            if(copWalletAddress == ""){
                Toast.fire({
                    icon: 'info',
                    title: '{{__("Lütfen Bir Cüzdan Seçiniz.")}}',
                });
            } else{
                let splittedAddress = copWalletAddress.split('|');
                let textWalletAddress = splittedAddress[1];
                navigator.clipboard.writeText(textWalletAddress) .then(() => {
                    Toast.fire({
                        icon: 'success',
                        title: 'Wallet Address Copied',
                    });
                })
                .catch(err => {
                    console.error('Failed to copy wallet address: ', err);
                });
            }
            console.log(copWalletAddress);

        }
    </script>

@endsection
