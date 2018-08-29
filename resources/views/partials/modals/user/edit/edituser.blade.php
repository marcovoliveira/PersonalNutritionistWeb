<div class="modal fade bd-example-modal-lg" id="edituser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Editar Utente </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="panel-body">
                        <form class="form-group edit" role="form"
                              method="POST" action="{{  url('/admin/utente/edit/'.$user->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <meta name="_token" content="{{ csrf_token() }}" />
                        {{ csrf_field() }}

                        <!-- Nome -->
                            <div class="form-group">

                                <label class="" for="name">Nome do utente</label>
                                <input type="text"
                                       class="form-control name" name="name" id="name" value="{{$user->name}}" aria-describedby="helpId"
                                       placeholder="Nome do utente" autofocus required>
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Telemovel</label>
                                <input type="text"
                                       class="form-control name" name="telemovel" id="telemovel" value="{{$user->phone_number}}" aria-describedby="helpId"
                                       placeholder="Telemovel" required>
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Localidade</label>
                                <input type="text"
                                       class="form-control name" name="localidade" value="{{$user->city}}" id="localidade" aria-describedby="helpId"
                                       placeholder="Localidade" required>
                            </div>

                            <div class="form-group">

                                <label class="" for="name">Ocupação</label>
                                <input type="text"
                                       class="form-control name" name="ocupacao" value="{{$user->occupation}}" id="ocupacao" aria-describedby="helpId"
                                       placeholder="Ocupação" required>
                            </div>

                            <!-- Data nascimento -->
                            <div class="form-group">
                                <label class="" for="date">Data de nascimento</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <input type="date" class="form-control" name="data"  value="{{$user->birthday}}"  placeholder="Date" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="" for="genero">Genero</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="genero" required>
                                        @if ($user->genre === "M")
                                            <option value="M" selected>Masculino</option>
                                            <option value="F" >Feminino</option>
                                        @else
                                            <option value="F" selected>Feminino</option>
                                            <option value="M" >Masculino</option>
                                        @endif


                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="" for="objetivo">Planos</label>
                                <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                    <select id="plano" style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="food_plan_id" required>
                                        <option value="" disabled selected>Escolher plano...</option>
                                    @if($user->foodplan)
                                            <option value ="{{$user->foodplan->id}}" selected>{{$user->foodplan->name}}</option>
                                        @foreach($foodplans as $foodplan)
                                            @if($foodplan->id !== $user->foodplan->id)
                                                <option value="{{$foodplan->id}}">{{$foodplan->name}}</option>
                                            @endif
                                        @endforeach
                                    @else
                                            @foreach($foodplans as $foodplan)
                                                    <option value="{{$foodplan->id}}">{{$foodplan->name}}</option>
                                            @endforeach
                                    @endif

                                    </select>

                                </div>
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