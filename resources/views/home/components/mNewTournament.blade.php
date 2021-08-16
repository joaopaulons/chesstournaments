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

                        <div class="col-md-12 form-group mt-4 mt-md-0 pb-3">
                            <label class="text-white">Link para mais informações: </label>
                            <input type="text" class="form-control" maxlength="255" name="link_more_information"
                                      id="link_more_information" required>
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
