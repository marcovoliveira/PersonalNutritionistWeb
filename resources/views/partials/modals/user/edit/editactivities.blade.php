<div class="modal fade bd-example-modal-lg" id="editatividades">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Editar Informação Horarios e Atividades </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="/admin/utente/edit/activities/{{$user->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Nome -->
                            <div class="form-group">

                                <label class="" for="name">Horario semanal</label>
                                <input type="text"
                                       class="form-control name" name="horario_semanal" id="horario_semanal" value="{{$user->userpersonalinformation->last()->week_schedule}}" aria-describedby="helpId"
                                       placeholder="Introduzir horario semanal do utente" autofocus >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Horario de fim de semana</label>
                                <input type="text"
                                       class="form-control name" name="horario_fim_semana" id="horario_fim_semana" value="{{$user->userpersonalinformation->last()->weekend_schedule}}" aria-describedby="helpId"
                                       placeholder="Introduzir de fim de semana do utente" >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Exercicio fisico</label>
                                <input type="text"
                                       class="form-control name" name="exercicio_fisico" id="exercicio_fisico" value="{{$user->userpersonalinformation->last()->physical_exercise}}" aria-describedby="helpId"
                                       placeholder="Introduzir qual o exercicio fisico praticado pelo utente" >
                            </div>


                            <div class="form-group">
                                <label class="" for="exercice_frequency">Frequencia de exercicio fisico</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select id="exercice_frequency" style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="exercice_frequency" required>
                                        <option value="" disabled selected>Escolha a frequencia...</option>
                                        @if($user->userpersonalinformation->last()->exercice_frequency)
                                            <option value ="{{$user->userpersonalinformation->last()->alcohol_consume}}" selected>{{$user->userpersonalinformation->last()->exercice_frequency}}</option>
                                            @if($user->userpersonalinformation->last()->exercice_frequency !== "Raramente")
                                                <option value="Raramente">Raramente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->exercice_frequency !== "Diariamente")
                                                <option value="Diariamente">Diariamente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->exercice_frequency !== "Semanalmente")
                                                <option value="Semanalmente">Semanalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->exercice_frequency !== "Mensalmente")
                                                <option value="Mensalmente">Mensalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->exercice_frequency !== "Nunca")
                                                <option value="Nunca">Nunca</option>
                                            @endif
                                        @else
                                            <option value="Raramente">Raramente</option>
                                            <option value="Diariamente">Diariamente</option>
                                            <option value="Semanalmente">Semanalmente</option>
                                            <option value="Mensalmente">Mensalmente</option>
                                            <option value="Nunca">Nunca</option>
                                        @endif

                                    </select>

                                </div>
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
