@inject("tournamentDatefunction", "App\Tournaments")
@extends('layouts.app')
@section('title-page')
    Home page
@endsection
@section('sections')
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">

                <div class="col-xl-12 col-lg-12">
                    <h1>Calendário enxadrístico!</h1>
                    <h2>Confira todos os campeonatos de Xadrez que estão rolando!</h2>
                </div>
            </div>
            <br/>
            <br/>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="row">

                    @guest
                    @else
                        <div class="col-md-12 d-flex align-items-center justify-content-lg-center pb-4">
                            <button type="button" id="btn-add-comp" class="btn btn-primary">Adicionar competicao
                            </button>
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div id="calendar" class="calendar"></div>
                    </div>
                    <div class="col-md-12">
                        <h2><p>Quer ajudar a contribuir colocando datas de campeonatos de sua Cidade/Região ou Estado?
                                Ou
                                até campeonatos que você esta organizando? Cadastre-se e preencha as informações do
                                campeonato,
                                que iremos colocar para aprovação, respostas em ate 24hrs!</p></h2>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('modals')
    <div class="modal fade" id="add-tournament-date-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg">

            <div class="modal-content" style="background-image: url('{{ asset('assets/img/fundo-modal-body.png') }}')">
                <div class="modal-header">
                    <img class="image d-flex align-items-center justify-content-center" style="border-radius: 10px"
                         src="{{ asset('assets/img/banner-modal-top.png') }}" width="100%" height="100%">
                </div>
                <div class="modal-body">
                    <form id="adicionar-campeonato">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group pb-3">
                                <label class="text-white">Nome do evento:</label>
                                <input type="text" name="name" class="form-control"
                                       value="" id="name" placeholder="Nome do evento"
                                       required autofocus>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0 pb-3">
                                <label class="text-white">Local:</label>
                                <select class="form-control" name="state" id="state" required>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0 pb-3">
                                <label class="text-white">Ritmo:</label>
                                <select class="form-control" name="rhythm" id="rhythm" required>
                                    <option value="Clássico">Clássico</option>
                                    <option value="Rápido">Rápido</option>
                                    <option value="Blitz">Blitz</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group mt-3 mt-md-0 pb-3">
                                <label class="text-white">Data de inicio:</label>
                                <input class="form-control" type="date" name="event_start_date" id="event_start_date"
                                       required>
                            </div>

                            <div class="col-md-6 form-group mt-4 mt-md-0 pb-3">
                                <label class="text-white">Data final:</label>
                                <input class="form-control" type="date" name="event_end_date" id="event_end_date" required>
                            </div>

                            <div class="col-md-6 form-group mt-4 mt-md-0 pb-3">
                                <label class="text-white">Organizador(a):</label>
                                <input type="text" class="form-control" placeholder="Nome do organizador(a)"
                                       name="host_name" id="host_name" required>
                            </div>

                            <div class="col-md-12 form-group mt-4 mt-md-0 pb-3">
                                <label class="text-white">Descrição: </label>
                                <textarea type="text" class="form-control" maxlength="255" name="description"
                                          id="description" required></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="pt-3 btn-group">
                                <button type="submit" id="add-camp-confirm" class="btn btn-success">Confirmar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-12">
                    <!--<img class="image d-flex align-items-center justify-content-center" style="border-radius: 10px"
                         width="100%" height="100%" src="{{ asset('assets/img/campeonatos-baner.png') }}">-->
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts-footer')
<script type="text/javascript">

    $(document).ready(function () {
        $('.phone').mask('(00) 0 0000-0000')

        $('#btn-add-comp').click(function (event) {
            $('#add-tournament-date-modal').modal('show');
        });

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
                url: "{{ route('tournaments.store') }}",
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

        @if(isset($calendarDates))

        $("#calendar").evoCalendar({
            theme: "Orange Coral",
            language: 'pt',
            eventHeaderFormat: 'd MM yyyy',
            calendarEvents: [
                    @foreach($calendarDates as $data)
                {
                    id: "{{ $data->id }}", // Event's ID (required)
                    name: "{{ $data->name }}", // Event name (required)
                    description:
                        "<b>Local:</b> {{ $data->state }}" +
                        "</br> <b>Ritmo:</b>  {{ $data->rhythm }}" +
                        "</br> <b>Período:</b> {{ implode('/', array_reverse(explode('-', $data->event_start_date))) }} a {{ implode('/', array_reverse(explode('-', $data->event_end_date))) }}" +
                        "</br> <b>Organizador:</b> {{ $data->host_name }}" +
                        `</br> <b>Descricao:</b> {{ $data->description }}`,
                    date: "{{ $tournamentDatefunction->DateNumberToMonth($data->event_start_date) }}", // Event date (required)
                    color: "#63d867", // Event custom color (optional)
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
@endsection

