@extends('layouts.app')
@section('title-page')
    Home page
@endsection
@section('content')
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

@section('scripts-footer')
    @include('home.components.mNewTournament')
    @include('home.scriptsFooter')
@endsection
