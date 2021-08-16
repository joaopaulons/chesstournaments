<script type="text/javascript">
    $(document).ready(function () {
        $('#adicionar-campeonato').submit(function (event) {
            var token = $(this).serializeArray()[0].value;
            var name = document.getElementById('name').value;
            var state = document.getElementById('state').value;
            var rhythm = document.getElementById('rhythm').value;
            var event_start_date = document.getElementById('event_start_date').value;
            var event_end_date = document.getElementById('event_end_date').value;
            var host_name = document.getElementById('host_name').value;
            var description = document.getElementById('description').value;

            $.ajax({
                data: {
                    _token: token,
                    name: name,
                    state: state,
                    rhythm: rhythm,
                    event_start_date: event_start_date,
                    event_end_date: event_end_date,
                    host_name: host_name,
                    description: description
                },
                method: 'post',
                url: "{{ route('tournament.store') }}",
                success: function (response) {
                    if (response.status === 200) {
                        Swal.fire({
                            icon: 'success',
                            title: `O campeonato ${response.name} foi adicionado no dia ${response.event_start_date}! Agradecemos a sua colaboracao!`,
                            showConfirmButton: true,
                            confirmButtonText: `Ok :)`,
                        }).then((result) => {
                            location.reload();
                        })

                    } else if (response.status === 400) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: `${response.msg}`,
                            showConfirmButton: false,
                            timer: 2000
                        })
                    }
                }
            });
            event.preventDefault();
        });
    });
</script>
