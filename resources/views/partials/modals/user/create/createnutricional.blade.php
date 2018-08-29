<div class="modal fade bd-example-modal-lg" id="createnutricional">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Criar Informação Nutricional </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="/admin/utente/create/nutricional/{{$user->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Nome -->
                            <div class="form-group">

                                <label class="" for="name">Refeições fim de semana</label>
                                <input type="text"
                                       class="form-control name" name="ref_fim_semana" id="ref_fim_semana"  aria-describedby="helpId"
                                       placeholder="Introduzir refeições fim de semana" autofocus >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Confeçoes mais utilizadas</label>
                                <input type="text"
                                       class="form-control name" name="conf_mais_utilizadas" id="conf_mais_utilizadas"  aria-describedby="helpId"
                                       placeholder="Introduzir confeçoes mais utilizadas" >
                            </div>

                            <!-- Consumo de bebidas alcolicas -->

                            <div class="form-group">
                                <label class="" for="genero">Frequencia do consumo de bebidas alcolicas</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="bebidasalcolicas">
                                        <option value="Raramente" selected>Raramente</option>
                                        <option value="Diariamente">Diariamente</option>
                                        <option value="Semanalmente">Semanalmente</option>
                                        <option value="Mensalmente">Mensalmente</option>
                                        <option value="Nunca">Nunca</option>
                                    </select>
                                </div>
                            </div>


                            <!-- Frequência do consumo de doces -->

                            <div class="form-group">
                                <label class="" for="genero">Frequência do consumo de doces</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="frequenciadoces">
                                        <option value="Raramente" selected>Raramente</option>
                                        <option value="Diariamente">Diariamente</option>
                                        <option value="Semanalmente">Semanalmente</option>
                                        <option value="Mensalmente">Mensalmente</option>
                                        <option value="Nunca">Nunca</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Frequência do consumo de salgados/enchidos -->

                            <div class="form-group">
                                <label class="" for="genero">Frequência do consumo de salgados/enchidos</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="frequenciasalgados">
                                        <option value="Raramente" selected>Raramente</option>
                                        <option value="Diariamente">Diariamente</option>
                                        <option value="Semanalmente">Semanalmente</option>
                                        <option value="Mensalmente">Mensalmente</option>
                                        <option value="Nunca">Nunca</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="" for="name">Alimentos preferidos</label>
                                <input type="text"
                                       class="form-control name" name="alimentos_preferidos" id="alimentos_preferidos"  aria-describedby="helpId"
                                       placeholder="Introduzir alimentos preferidos"  >
                            </div>


                            <div class="form-group">
                                <label class="" for="name">Alimentos preteridos</label>
                                <input type="text"
                                       class="form-control name" name="alimentos_preteridos" id="alimentos_preteridos"  aria-describedby="helpId"
                                       placeholder="Introduzir alimentos preteridos" >
                            </div>



                            <div class="form-group">

                                <label class="" for="pequenoalmoco">Observações</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="observacoes"></textarea>
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
