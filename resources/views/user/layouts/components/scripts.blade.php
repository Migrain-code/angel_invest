<script src="/user/assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="/user/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="/user/assets/vendor/chart.js/Chart.bundle.min.js" type="text/javascript"></script>
<script src="/user/assets/vendor/peity/jquery.peity.min.js" type="text/javascript"></script>
<script src="/user/assets/vendor/apexchart/apexchart.js" type="text/javascript"></script>
<script src="/user/assets/js/dashboard/dashboard-1.js" type="text/javascript"></script>
<script src="/user/assets/vendor/owl-carousel/owl.carousel.js" type="text/javascript"></script>
<script src="/user/assets/js/custom.js" type="text/javascript"></script>
<script src="/user/assets/js/deznav-init.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS - END -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.9/dist/inputmask/inputmask.min.js"></script>
<!-- Inputmask bindings dosyasını yükle -->
<script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.9/dist/bindings/inputmask.binding.min.js"></script>

<script src="/assets/js/custom.js"></script>

<script>
    /*$(document).ready(function(){
        //$(selector).inputmask("99-9999999");  //static mask
        //$('.phone').inputmask({"mask": "(999) 999-9999"}); //specifying options
        //$(selector).inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
    });*/
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
    $('.notificationDetail').on('click', function (){
        var title = $(this).data('title');
        var message = $(this).data('message');
        var notification_id = $(this).data('notification');
        $.ajax({
            url: '{{route('user.panel.notification.detail')}}',
            type: 'POST',
            data: {
                _token: '{{csrf_token()}}',
                notification_id: notification_id,
            }
        })
        Swal.fire({
            title: title,
            html: message,
            icon: 'info',
            confirmButtonText: '{{__('Tamam')}}'
        });
    });
</script>
<script>

    function updateFileCount(input) {
        var fileCountSpan = input.parentElement.querySelector('.file-count');
        if (input.files && input.files.length > 0) {
            fileCountSpan.textContent = input.files.length + ' dosya seçildi';
        } else {
            fileCountSpan.textContent = '0 dosya seçildi';
        }
    }
</script>

@yield('scripts')
