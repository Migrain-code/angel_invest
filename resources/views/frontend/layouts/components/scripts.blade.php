<script src="/frontend/assets/js/jquery-3-7-1.min.js"></script>
<script src="/frontend/assets/js/bootstrap.min.js"></script>
<script src="/frontend/assets/js/aos.js"></script>
<script src="/frontend/assets/js/fontawesome.js"></script>
<script src="/frontend/assets/js/mobile-menu.js"></script>
<script src="/frontend/assets/js/jquery.magnific-popup.js"></script>
<script src="/frontend/assets/js/owl.carousel.min.js"></script>
<script src="/frontend/assets/js/jquery.countup.js"></script>
<script src="/frontend/assets/js/slick-slider.js"></script>
<script src="/frontend/assets/js/gsap.min.js"></script>
<script src="/frontend/assets/js/jquery.nice-select.js"></script>
<script src="/frontend/assets/js/ScrollTrigger.min.js"></script>
<script src="/frontend/assets/js/Splitetext.js"></script>
<script src="/frontend/assets/js/SmoothScroll.js"></script>
<script src="/frontend/assets/js/text-animation.js"></script>
<script src="/frontend/assets/js/switchmode.js"></script>
<script src="/frontend/assets/js/swiper.js"></script>
<script src="/frontend/assets/js/jquery.lineProgressbar.js"></script>
<script src="/frontend/assets/js/tilt.jquery.js"></script>
<script src="/frontend/assets/js/animation.js"></script>
<script src="/frontend/assets/js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    let csrf_token = "{{csrf_token()}}";
</script>
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


@yield('scripts')
