<div class="modal fade bd-example-modal-sm" id="myEquivalenteModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Criar Equivalente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="{{  url('/admin/equivalentes/create/') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Equivalente -->
                            <div class="form-group">

                                <label class="" for="name">Nome do equivalente</label>
                                <input type="text"
                                       class="form-control equivalente" name="equivalente" id="equivalente" aria-describedby="helpId"
                                       placeholder="Equivalente" autofocus required>
                                <small id="helpId" class="form-text text-muted">Equivalente</small>
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
</div>