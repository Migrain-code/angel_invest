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
    const snowflakeContainer = document.getElementById('snowflakes');
    const snowflakes = [];
    const maxSnowflakes = 100; // Maksimum kar tanesi sayısı

    function createSnowflake() {
        const snowflake = {
            element: document.createElement('i'),
            x: Math.random() * window.innerWidth, // X pozisyonu
            y: -50, // Başlangıç Y pozisyonu
            speed: Math.random() * 2 + 1, // Düşme hızı
            sway: Math.random() * 1 - 0.5 // Yana hareket
        };

        snowflake.element.classList.add('snowflake', 'fas', 'fa-snowflake', 'text-white');
        snowflake.element.style.left = snowflake.x + 'px';
        snowflake.element.style.fontSize = `${Math.random() * 15 + 15}px`; // 10px-20px arası boyut
        snowflakeContainer.appendChild(snowflake.element);
        snowflakes.push(snowflake);
    }

    function updateSnowflakes() {
        snowflakes.forEach((snowflake, index) => {
            // Y ekseninde düşüş
            snowflake.y += snowflake.speed;
            // X ekseninde hafif sallanma
            snowflake.x += snowflake.sway;

            // Pozisyon güncelleme
            snowflake.element.style.transform = `translate(${snowflake.x}px, ${snowflake.y}px)`;

            // Ekranın altına ulaşan kar tanelerini kaldır
            if (snowflake.y > window.innerHeight) {
                snowflakeContainer.removeChild(snowflake.element);
                snowflakes.splice(index, 1);
            }
        });

        // Kar tanelerini tekrar çağır
        while (snowflakes.length < maxSnowflakes) {
            createSnowflake();
        }

        requestAnimationFrame(updateSnowflakes);
    }

    // Başlat
    updateSnowflakes();

</script>
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
            title: '{{__('Hata!')}}',
            icon: 'error',
            html: errors.join("<br>"),
            confirmButtonText: '{{__('Tamam')}}'
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
<script>
    function onSubmit(token) {
        document.getElementById("subscribe-form").submit();
    }
</script>

@yield('scripts')
