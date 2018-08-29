<div class="modal fade bd-example-modal-lg" id="createclinica">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Criar Informação Clinica </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="/admin/utente/create/clinical/{{$user->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Nome -->
                            <div class="form-group">

                                <label class="" for="name">Situação clinica</label>
                                <input type="text"
                                       class="form-control name" name="situacao_clinica" id="situacao_clinica" aria-describedby="helpId"
                                       placeholder="Introduzir situação clinica" autofocus >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Analises clinicas</label>
                                <input type="text"
                                       class="form-control name" name="analises_clinicas" id="analises_clinicas" aria-describedby="helpId"
                                       placeholder="Introduzir analises clinicas" >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Transito intestinal</label>
                                <input type="text"
                                       class="form-control name" name="transito_intestinal"  id="transito_intestinal" aria-describedby="helpId"
                                       placeholder="Informação de transito intestinal" >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Queixas digestivas</label>
                                <input type="text"
                                       class="form-control name" name="queixas_digestivas"  id="queixas_digestivas" aria-describedby="helpId"
                                       placeholder="Informação de queixas digestivas" >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Intolerancias alimentares</label>
                                <input type="text"
                                       class="form-control name" name="intolerancias_alimentares"  id="intolerancias_alimentares" aria-describedby="helpId"
                                       placeholder="Intolerancia alimentar" >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Hidratação</label>
                                <input type="text"
                                       class="form-control name" name="hidratacao" id="hidratacao" aria-describedby="helpId"
                                       placeholder="Informação de hidratação" >
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Gravar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
