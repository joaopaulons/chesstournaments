<script type="text/javascript">
    $(document).ready(function(event){
        $.ajax({
            method: 'get',
            url: "{{ route('tournament.index') }}",

            success: function (response) {
                console.log(response);
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
