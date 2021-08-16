@inject('formatDate', "App\Tournaments")
<script type="text/javascript">
    $(document).ready(function (event) {
        @if(isset($results))
        $("#calendar").evoCalendar({
            theme: "Orange Coral",
            language: 'pt',
            eventHeaderFormat: 'd MM yyyy',
            calendarEvents: [
                    @foreach($results as $data)
                {
                    id: `{{ $data->id }}`, // Event's ID (required)
                    name: "{{ $data->name }}", // Event name (required)
                    description:
                        "<b>Local:</b> {{ $data->state }}" +
                        "</br> <b>Ritmo:</b>  {{ $data->rhythm }}" +
                        "</br> <b>Período:</b> {{ implode('/', array_reverse(explode('-', $data->event_start_date))) }} a {{ implode('/', array_reverse(explode('-', $data->event_end_date))) }}" +
                        "</br> <b>Organizador:</b> {{ $data->host_name }}" +
                        `</br> <b>Descricao:</b> {{ $data->description }}`,
                    date: "{{ $formatDate->formatDate($data->event_start_date) }}", // Event date (required)
                    color: @if(strtotime(date("Y-m-d")) > strtotime($data->event_end_date)) "#63d867" @else "#FF0000" @endif, // Event custom color (optional)
                },
                @endforeach
            ]
        });
        @else
        $("#calendar").evoCalendar({
            theme: "Orange Coral",
            language: 'pt',
            eventHeaderFormat: 'd MM yyyy',
        });
        @endisset
    });
</script>
