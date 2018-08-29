<div class="modal fade bd-example-modal-lg" id="myEditModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Editar Plano nutricional</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="{{  url('/admin/plan/edit/') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Nome -->
                            <div class="form-group">

                                <label class="" for="name">Nome do plano nutricional</label>
                                <input type="text"
                                       class="form-control name" name="name" id="name" aria-describedby="helpId"
                                       placeholder="O meu plano nutricional" autofocus required>
                                <small id="helpId" class="form-text text-muted">Nome de identificação do plano nutricional.</small>
                            </div>


                            <!-- Pequeno Almoço -->
                            <div class="form-group">

                                <label class="" for="breakfast">Pequeno almoço</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="breakfast" id="breakfast"></textarea>
                            </div>

                            <!-- Meio da Manha1 -->
                            <div class="form-group">

                                <label class="" for="morning_snack">Meio da manha 1</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="morning_snack" id="morning_snack"></textarea>
                            </div>

                            <!-- Meio da Manha2 -->
                            <div class="form-group">

                                <label class="" for="morning_snack_one">Meio da manha 2</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="morning_snack_one" id="morning_snack_one"></textarea>
                            </div>

                            <!-- Almoço -->
                            <div class="form-group">

                                <label class="" for="lunch">Almoço</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="lunch" id="lunch"></textarea>
                            </div>


                            <!-- Lanche 1 -->
                            <div class="form-group">

                                <label class="" for="snack_one">Lanche 1</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="snack_one" id="snack_one"></textarea>
                            </div>


                            <!-- Lanche 2 -->
                            <div class="form-group">

                                <label class="" for="snack_two">Lanche 2</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="snack_two" id="snack_two"></textarea>
                            </div>


                            <!-- Jantar -->
                            <div class="form-group">

                                <label class="" for="diner">Jantar</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="diner" id="diner"></textarea>
                            </div>

                            <!-- Ceia -->
                            <div class="form-group">

                                <label class="" for="bedtime_snack">Ceia</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="bedtime_snack" id="bedtime_snack"></textarea>
                            </div>

                            <!-- Recomendações -->
                            <div class="form-group">

                                <label class="" for="recomendations">Recomendações</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="recomendations" id="recomendations"></textarea>
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