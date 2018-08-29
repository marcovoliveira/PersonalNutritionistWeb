<div class="modal fade bd-example-modal-lg" id="editconsultas">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Editar Consulta </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="/admin/utente/edit/consulta/{{$user->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                            <input type="hidden" id="id" name="id">

                            <div class="form-inline" style="margin-bottom: 2pc;">



                                <!-- Altura -->
                            <div class="form-group">
                                <label class="" for="height">Altura</label> &nbsp;&nbsp;
                                <div class="input-group" style="width:130px">
                                    <input  type="number" min="0.100" step="0.001"
                                            class="form-control"
                                            id="height"
                                            name="height" placeholder="Centimetros"
                                            required>
                                    <span class="input-group-addon">cm</span>
                                </div>
                            </div>

                            <!-- Peso -->


                            <div class="form-group" style="margin-left: 6pc;">
                                <label class="" for="weight">Peso</label>&nbsp;&nbsp;
                                <div class="input-group" style="width:130px;">
                                    <input  type="number" min="0.100" step="0.001"
                                           class="form-control"
                                           id="weight"
                                           name="weight" placeholder="Kilogramas"
                                           required>
                                    <span class="input-group-addon">kg</span>
                                </div>
                            </div>

                            </div>


                            <div class="form-inline" style="margin-bottom: 2pc;">
                            <!-- Gordura -->
                            <div class="form-group">
                                <label class="" for="visceral_fat">Gordura Visceral</label> &nbsp;&nbsp;
                                <div class="input-group" style="width:130px">
                                <input  type="number" min="1" step="0.1"
                                       class="form-control"
                                       id="visceral_fat"
                                       name="visceral_fat" placeholder="Percentagem"
                                       required>
                                </div>
                            </div>

                            <!-- Massa Gorda -->
                            <div class="form-group" style="margin-left: 2pc;">
                                <label class="" for="fat_mass">Massa Gorda</label> &nbsp;&nbsp;
                                <div class="input-group" style="width:130px">
                                    <input  type="number" min="1" step="0.1"
                                            class="form-control"
                                            id="fat_mass"
                                            name="fat_mass" placeholder="Percentagem"
                                            required>
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                            </div>


                            <div class="form-inline" style="margin-bottom: 2pc;">
                            <!-- Perimetro Cintura -->
                            <div class="form-group">
                                <label class="" for="waist_perimeter">Perimetro Cintura</label>&nbsp;&nbsp;
                                <div class="input-group" style="width:130px">
                                    <input  type="number" min="5.000" step="0.001"
                                            class="form-control"
                                            id="waist_perimeter"
                                            name="waist_perimeter" placeholder="Centimetros"
                                            required>
                                    <span class="input-group-addon">cm</span>
                                </div>
                            </div>

                            <!-- Perimetro Anca -->
                            <div class="form-group" style="margin-left: 1.7pc;">
                                <label class="" for="hip_permieter">Perimetro Anca</label>&nbsp;&nbsp;
                                <div class="input-group" style="width:130px">
                                    <input  type="number" min="5.000" step="0.001"
                                            class="form-control"
                                            id="hip_permieter"
                                            name="hip_permieter" placeholder="Centimetros"
                                            required>
                                    <span class="input-group-addon">cm</span>
                                </div>
                            </div>
                            </div>

                            <!-- Recomendaçoes-->
                            <div class="form-group">
                                <label class="" for="alteracoes">Alterações a cumprir</label>
                                <textarea style="width:550px" class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="recomendations" id="recomendations"></textarea>
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
