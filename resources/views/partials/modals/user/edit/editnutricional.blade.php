<div class="modal fade bd-example-modal-lg" id="editnutricional">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Editar Informação Nutricional </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="/admin/utente/edit/nutricional/{{$user->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Nome -->
                            <div class="form-group">

                                <label class="" for="name">Refeições fim de semana</label>
                                <input type="text"
                                       class="form-control name" name="ref_fim_semana" id="ref_fim_semana" value="{{$user->userpersonalinformation->last()->weekend_food}}" aria-describedby="helpId"
                                       placeholder="Introduzir refeições fim de semana" autofocus >
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Confeçoes mais utilizadas</label>
                                <input type="text"
                                       class="form-control name" name="conf_mais_utilizadas" id="conf_mais_utilizadas" value="{{$user->userpersonalinformation->last()->most_confection}}" aria-describedby="helpId"
                                       placeholder="Introduzir confeçoes mais utilizadas" >
                            </div>


                            <div class="form-group">
                                <label class="" for="freq_consumo_alcool">Frequencia do consumo de alcool</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select id="freq_consumo_alcool" style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="freq_consumo_alcool" required>
                                        <option value="" disabled selected>Escolha a frequencia...</option>
                                        @if($user->userpersonalinformation->last()->alcohol_consume)
                                            <option value ="{{$user->userpersonalinformation->last()->alcohol_consume}}" selected>{{$user->userpersonalinformation->last()->alcohol_consume}}</option>
                                            @if($user->userpersonalinformation->last()->alcohol_consume !== "Raramente")
                                                <option value="Raramente">Raramente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->alcohol_consume !== "Diariamente")
                                                <option value="Diariamente">Diariamente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->alcohol_consume !== "Semanalmente")
                                                <option value="Semanalmente">Semanalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->alcohol_consume !== "Mensalmente")
                                                <option value="Mensalmente">Mensalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->alcohol_consume !== "Nunca")
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

                            <div class="form-group">
                                <label class="" for="freq_consumo_doces">Frequencia do consumo de doces</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select id="freq_consumo_doces" style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="freq_consumo_doces" required>
                                        <option value="" disabled selected>Escolha a frequencia...</option>
                                        @if($user->userpersonalinformation->last()->candys_frequency)
                                            <option value ="{{$user->userpersonalinformation->last()->candys_frequency}}" selected>{{$user->userpersonalinformation->last()->candys_frequency}}</option>
                                            @if($user->userpersonalinformation->last()->candys_frequency !== "Raramente")
                                                <option value="Raramente">Raramente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->candys_frequency !== "Diariamente")
                                                <option value="Diariamente">Diariamente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->candys_frequency !== "Semanalmente")
                                                <option value="Semanalmente">Semanalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->candys_frequency !== "Mensalmente")
                                                <option value="Mensalmente">Mensalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->candys_frequency !== "Nunca")
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

                            <div class="form-group">
                                <label class="" for="freq_consumo_sal">Frequencia do consumo de sal</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select id="freq_consumo_sal" style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="freq_consumo_sal" required>
                                        <option value="" disabled selected>Escolha a frequencia...</option>
                                        @if($user->userpersonalinformation->last()->salty_food_frequency)
                                            <option value ="{{$user->userpersonalinformation->last()->candys_frequency}}" selected>{{$user->userpersonalinformation->last()->salty_food_frequency}}</option>
                                            @if($user->userpersonalinformation->last()->salty_food_frequency !== "Raramente")
                                                <option value="Raramente">Raramente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->salty_food_frequency !== "Diariamente")
                                                <option value="Diariamente">Diariamente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->salty_food_frequency !== "Semanalmente")
                                                <option value="Semanalmente">Semanalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->salty_food_frequency !== "Mensalmente")
                                                <option value="Mensalmente">Mensalmente</option>
                                            @endif
                                            @if($user->userpersonalinformation->last()->salty_food_frequency !== "Nunca")
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

                            <div class="form-group">
                                <label class="" for="name">Alimentos preferidos</label>
                                <input type="text"
                                       class="form-control name" name="alimentos_preferidos" id="alimentos_preferidos" value="{{$user->userpersonalinformation->last()->favorite_foods}}" aria-describedby="helpId"
                                       placeholder="Introduzir alimentos preferidos"  >
                            </div>


                            <div class="form-group">
                                <label class="" for="name">Alimentos preteridos</label>
                                <input type="text"
                                       class="form-control name" name="alimentos_preteridos" id="alimentos_preteridos" value="{{$user->userpersonalinformation->last()->deprecated_foods}}" aria-describedby="helpId"
                                       placeholder="Introduzir alimentos preteridos" >
                            </div>



                            <div class="form-group">

                                <label class="" for="pequenoalmoco">Observações</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="observacoes">{{$user->userpersonalinformation->last()->observations}}</textarea>
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
