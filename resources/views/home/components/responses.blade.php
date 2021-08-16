<script type="text/javascript">
    $(document).ready(function () {
        @if(\Session::has('status') && \Session::get('status') == 200)
        Swal.fire({
            title: 'Sucesso!',
            text: 'Você foi Registrado(a) com sucesso! Esta é 7ª imagem da sequência correta!',
            imageUrl: '{{ asset('assets/img/mosaicos/up.gif') }}',
            imageWidth: 500,
            imageHeight: 500,
            imageAlt: 'Dica do desafio',
        })
        @endif

        @if(isset($status) && $status == 200)
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{$msg}}',
            showConfirmButton: false,
            timer: 2000
        })
        @endif
    });
</script>
