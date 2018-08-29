<div class="modal fade bd-example-modal-lg" id="editanamnese">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Editar Anamnese Alimentar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action=" /admin/utente/edit/anamnese/{{$user->FoodAnamnesis->last()->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}



                            <!-- Pequeno Almoço -->
                            <div class="form-group">

                                <label class="" for="breakfast">Pequeno almoço</label>
                                &nbsp;
                                <input type="time" value="{{$user->FoodAnamnesis->last()->breakfast_hour}}" name="breakfast_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="breakfast" id="breakfast">{{$user->FoodAnamnesis->last()->breakfast}}</textarea>
                            </div>

                            <!-- Meio da Manha1 -->
                            <div class="form-group">

                                <label class="" for="morning_snack">Lancha da manha</label>
                                &nbsp;
                                <input type="time"  value="{{$user->FoodAnamnesis->last()->morning_snack_hour}}" name="morning_snack_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="morning_snack" id="morning_snack">{{$user->FoodAnamnesis->last()->morning_snack}}</textarea>
                            </div>


                            <!-- Almoço -->
                            <div class="form-group">

                                <label class="" for="lunch">Almoço</label>
                                &nbsp;
                                <input type="time" value="{{$user->FoodAnamnesis->last()->lunch_hour}}" name="lunch_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="lunch" id="lunch">{{$user->FoodAnamnesis->last()->lunch}}</textarea>
                            </div>


                            <!-- Lanche 1 -->
                            <div class="form-group">

                                <label class="" for="snack_one">Lanche</label>
                                &nbsp;
                                <input type="time" value="{{$user->FoodAnamnesis->last()->snack_one_hour}}" name="snack_one_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="snack_one" id="snack_one">{{$user->FoodAnamnesis->last()->snack_one}}</textarea>
                            </div>


                            <!-- Lanche 2 -->
                            <div class="form-group">

                                <label class="" for="snack_two">Segundo lanche</label>
                                &nbsp;
                                <input type="time" value="{{$user->FoodAnamnesis->last()->snack_two_hour}}" name="snack_two_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="snack_two" id="snack_two">{{$user->FoodAnamnesis->last()->snack_two}}</textarea>
                            </div>


                            <!-- Jantar -->
                            <div class="form-group">

                                <label class="" for="diner">Jantar</label>
                                &nbsp;
                                <input type="time" value="{{$user->FoodAnamnesis->last()->diner_hour}}" name="diner_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="diner" id="diner">{{$user->FoodAnamnesis->last()->diner}}</textarea>
                            </div>

                            <!-- Ceia -->
                            <div class="form-group">

                                <label class="" for="bedtime_snack">Ceia</label>
                                &nbsp;
                                <input type="time" value="{{$user->FoodAnamnesis->last()->bedtime_snack_hour}}" name="bedtime_snack_hour">
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="bedtime_snack" id="bedtime_snack">{{$user->FoodAnamnesis->last()->bedtime_snack}}</textarea>
                            </div>

                            <!-- Recomendações -->
                            <div class="form-group">

                                <label class="" for="snacks">Snacks</label>
                                <textarea class="form-control mb-2 mr-sm-2 mb-sm-3"
                                          name="snacks" id="snacks">{{$user->FoodAnamnesis->last()->snacks}}</textarea>
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