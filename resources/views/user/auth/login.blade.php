<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>{{setting('speed_site_title')." | "}}@yield('title', trans('Anasayfa'))</title>
    <meta name="description" content="@yield('description', trans(setting('speed_meta_descriptions')))">

    <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="{{image(setting('favicon'))}}" rel="shortcut icon">

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank">
<!--begin::Theme mode setup on page load-->
<form class="form w-100 bg-white" style="border-radius: 15px;padding: 30px" method="post" action="{{route('user.login')}}">
    <img alt="Logo" src="{{image(setting('logo'))}}" class="h-25px" />
    @csrf
    <!--begin::Body-->
    <div class="card-body">
        <!--begin::Heading-->
        <div class="text-start mb-10">
            <!--begin::Title-->
            <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">User Panel</h1>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">{{setting('speed_site_title')}} Yönetim Paneli</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group=-->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <input type="text" placeholder="E-posta Adresiniz" name="email" value="" autocomplete="off" data-kt-translate="sign-in-input-email" class="form-control form-control-solid phone" />
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-7">
            <!--begin::Password-->
            <input type="password" placeholder="Password" name="password" autocomplete="off" data-kt-translate="sign-in-input-password" value="" class="form-control form-control-solid" />
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Actions-->
        <div class="d-flex flex-stack">
            <!--begin::Submit-->
            <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0 w-100">
                <!--begin::Indicator label-->
                <span class="indicator-label" data-kt-translate="sign-in-submit">Giriş Yap</span>
                <!--end::Indicator label-->

            </button>
            <!--end::Submit-->

        </div>
        <!--end::Actions-->
    </div>
    <!--begin::Body-->
</form>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,//3sn
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>
@if(session('response'))
    <script>
        Toast.fire({
            icon: '{{session('response.status')}}',
            title: '{{session('response.message')}}',

        })
    </script>
@endif
@if($errors->any())
    <script>
        var errors = [];
        @foreach ($errors->all() as $error)
        errors.push("{{ $error }}");
        @endforeach

        Swal.fire({
            title: 'Hata',
            icon: 'error',
            html: errors.join("<br>"),
            confirmButtonText: "Tamam"
        });
    </script>
@endif
<style>
    .swal2-popup.swal2-toast .swal2-title {
        margin: 0.5em 1em;
        padding: 0;
        font-size: 1em;
        text-align: initial;
        color: black !important;
        font-weight: 700 !important;

    }
</style>
</body>
<!--end::Body-->

</html>
