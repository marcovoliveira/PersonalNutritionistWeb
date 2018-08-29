<div class="modal fade bd-example-modal-lg" id="createanamnese">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Criar Anamnese Alimentar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group create" role="form" id="formcreateanamnese"
                              method="POST" action=" /admin/utente/create/anamnese/{{$user->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                            <input type="hidden" id="id_hide" name="id_hide" value="{{$user->id}}">
                        <!-- Pequeno Almoço -->
                            <div class="form-group">

                                <label class="" for="pequenoalmoco">Pequeno almoço</label>
                                <input type="time" name="pequenoalmocohora" autofocus>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="pequenoalmoco"></textarea>
                            </div>

                            <!-- Meio da Manha -->
                            <div class="form-group">

                                <label class="" for="meiodamanha">Meio da manha</label>
                                <input type="time" name="meiodamanhahora">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="meiodamanha"></textarea>
                            </div>

                            <!-- Almoço -->
                            <div class="form-group">

                                <label class="" for="almoco">Almoço</label>
                                <input type="time" name="almocohora">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="almoco"></textarea>
                            </div>


                            <!-- Lanche 1 -->
                            <div class="form-group">

                                <label class="" for="lancheum">Lanche 1</label>
                                <input type="time" name="lancheumhora">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="lancheum"></textarea>
                            </div>


                            <!-- Lanche 2 -->
                            <div class="form-group">

                                <label class="" for="lanchedois">Lanche 2</label>
                                <input type="time" name="lanchedoishora">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="lanchedois"></textarea>
                            </div>


                            <!-- Jantar -->
                            <div class="form-group">

                                <label class="" for="jantar">Jantar</label>
                                <input type="time" name="jantarhora">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="jantar"></textarea>
                            </div>

                            <!-- Ceia -->
                            <div class="form-group">

                                <label class="" for="ceia">Ceia</label>
                                <input type="time" name="ceiahora">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="ceia"></textarea>
                            </div>

                            <!-- Petiscos -->
                            <div class="form-group">

                                <label class="" for="petiscos">Petiscos</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="petiscos"></textarea>
                            </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submitedit" class="btn btn-primary">Gravar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>