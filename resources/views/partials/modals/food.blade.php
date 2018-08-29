<div class="modal fade bd-example-modal-lg" id="createPlan" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Novo plano nutricional</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form id="formgroupcreate" class="form-group create" role="form"
                                          method="POST" action="{{  url('/admin/plan/registar') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                    <!-- Nome -->
                                        <div class="form-group">

                                            <label class="" for="name">Nome do plano nutricional</label>
                                                <input type="text"
                                                       class="form-control" name="name" id="name" aria-describedby="helpId"
                                                       placeholder="O meu plano nutricional" autofocus required>
                                                <small id="helpId" class="form-text text-muted">Nome de identificação do plano nutricional.</small>
                                        </div>


                                    <!-- Pequeno Almoço -->
                                        <div class="form-group">

                                            <label class="" for="pequenoalmoco">Pequeno almoço</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="pequenoalmoco"></textarea>
                                        </div>

                                        <!-- Meio da Manha1 -->
                                        <div class="form-group">

                                            <label class="" for="meiodamanhaum">Meio da manha 1</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="meiodamanhaum"></textarea>
                                        </div>

                                        <!-- Meio da Manha2 -->
                                        <div class="form-group">

                                            <label class="" for="meiodamanhadois">Meio da manha 2</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="meiodamanhadois"></textarea>
                                        </div>

                                        <!-- Almoço -->
                                        <div class="form-group">

                                            <label class="" for="almoco">Almoço</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="almoco"></textarea>
                                        </div>


                                        <!-- Lanche 1 -->
                                        <div class="form-group">

                                            <label class="" for="lancheum">Lanche 1</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="lancheum"></textarea>
                                        </div>


                                        <!-- Lanche 2 -->
                                        <div class="form-group">

                                            <label class="" for="lanchedois">Lanche 2</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="lanchedois"></textarea>
                                        </div>


                                        <!-- Jantar -->
                                        <div class="form-group">

                                            <label class="" for="jantar">Jantar</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="jantar"></textarea>
                                        </div>

                                        <!-- Ceia -->
                                        <div class="form-group">

                                            <label class="" for="ceia">Ceia</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="ceia"></textarea>
                                        </div>

                                        <!-- Recomendações -->
                                        <div class="form-group">

                                            <label class="" for="recomendacoes">Recomendações</label>
                                            <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="recomendacoes"></textarea>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Criar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                            </form>
                            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
