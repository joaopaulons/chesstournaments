<script type="text/javascript">
    $(document).ready(function(event){
        $.ajax({
            method: 'get',
            url: "{{ route('tournament.index') }}",
            beforeSend: function(){
                $('#preloader').removeClass('hidden');
            },
            success: function (response) {

                console.log(response);

            },
            complete: function(){
                $('#preloader').addClass('hidden');
            }
        });
        @if(isset($calendarDates))

        @else
        $("#calendar").evoCalendar({
            theme: "Orange Coral",
            language: 'pt',
            eventHeaderFormat: 'd MM yyyy',
        });
        @endisset
    });
</script>
