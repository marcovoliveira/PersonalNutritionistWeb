@extends('admin.layout.admin')

@section('content')
    @if(!$tipo)
        @php
            $user = Session::get('key');
            Session::reflash();
        @endphp
    @else
        @include('partials.modals.user.create.createanamnese')
    @endif
    <style>

        .novo {
            padding: 15px;
            margin-bottom: 22px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .novo-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d;
        }

        .novo-success hr {
            border-top-color: #c9e2b3;
        }



        }





    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/home') }}">Inicio</a>
                </li>
                <li class="breadcrumb-item">{{ $user->name }}</li>
                <li class="breadcrumb-item active">Registar Informação Antropometrica</li>
            </ol>

            <div id="pflash">

            </div>
            <!-- Nome -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <form class="form" role="form" method="POST"
                                      action="/admin/registar/anthropometricevaluation/{{$user->id}}">
                                    {{ csrf_field() }}
                                    <div class="row">

                                        <!-- Altura -->
                                        <div class="form-group">
                                            <label class="" for="altura">Altura</label>
                                            <input style="width:270px" type="number" min="10" step="0.001"
                                                   class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                   name="altura" placeholder="Altura em centimetros"
                                                   value="{{ old('altura') }}" autofocus required>
                                            @if($tipo)
                                                @if($user->anthropometricevaluation->last())
                                                    <small id="altura" class="form-text text-muted">Altura na ultima consulta: {{$user->anthropometricevaluation->last()->height}} cm</small>
                                                @endif
                                            @endif
                                        </div>

                                        <!-- Peso -->

                                        <div class="form-group">
                                            <label class="" for="peso">Peso</label>
                                            <input style="width:270px" type="number"  min="0.100" step="0.001"
                                                   class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                   name="peso" placeholder="Peso em kilogramas"
                                                   value="{{ old('peso') }}" required>
                                            @if($tipo)
                                                @if($user->anthropometricevaluation->last())
                                                    <small id="peso" class="form-text text-muted">Peso na ultima consulta: {{$user->anthropometricevaluation->last()->weight}} Kg</small>
                                                @endif
                                            @endif
                                        </div>

                                        <!-- Gordura Visceral -->

                                        <div class="form-group">
                                            <label class="" for="gorduravisceral">Gordura Visceral</label>
                                            <input style="width:270px" type="number" min="1" step="0.01"
                                                   class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                   name="gorduravisceral" placeholder="Gordura Visceral"
                                                   value="{{ old('gorduravisceral') }}" required>
                                            @if($tipo)
                                                @if($user->anthropometricevaluation->last())
                                                    <small id="gorduravisceral" class="form-text text-muted">Gordura visceral na ultima consulta: {{$user->anthropometricevaluation->last()->visceral_fat}}</small>
                                                @endif
                                            @endif
                                        </div>

                                        <!-- Massa Gorda -->

                                        <div class="form-group">
                                            <label class="" for="massagorda">Massa Gorda</label>
                                            <input style="width:270px" type="number" min="1" step="0.01"
                                                   class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                   name="massagorda" placeholder="Massa Gorda (%)"
                                                   value="{{ old('massagorda') }}" required>
                                            @if($tipo)
                                                @if($user->anthropometricevaluation->last())
                                                    <small id="massagorda" class="form-text text-muted">Massa gorda na ultima consulta: {{$user->anthropometricevaluation->last()->fat_mass}}%</small>
                                                @endif
                                            @endif

                                        </div>

                                        <!-- Perimetro Cintura -->

                                        <div class="form-group">
                                            <label class="" for="perimetrocintura">Perimetro Cintura</label>
                                            <input style="width:270px" type="number" min="5" step="0.01"
                                                   class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                   name="perimetrocintura"
                                                   placeholder="Perimetro Cintura em centimetros"
                                                   value="{{ old('perimetrocintura') }}" required>
                                            @if($tipo)
                                                @if($user->anthropometricevaluation->last())
                                                    <small id="perimetrocintura" class="form-text text-muted">Perimetro cintura na ultima consulta: {{$user->anthropometricevaluation->last()->waist_perimeter}} cm.</small>
                                                @endif
                                            @endif
                                        </div>

                                        <!-- Perimetro Anca -->

                                        <div class="form-group">
                                            <label class="" for="perimetroanca">Perimetro Anca</label>
                                            <input style="width:270px" type="number" min="5"step="0.01"
                                                   class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                   name="perimetroanca" placeholder="Perimetro Anca em centimetros"
                                                   value="{{ old('perimetroanca') }}" required>
                                            @if($tipo)
                                                @if($user->anthropometricevaluation->last())
                                                    <small id="perimetroanca" class="form-text text-muted">Perimetro anca na ultima consulta: {{$user->anthropometricevaluation->last()->hip_permieter}} cm.</small>
                                                @endif
                                            @endif

                                        </div>

                                        <!--Atividade Fisica / Estado Clinico-->


                                        <div class="form-group">
                                            <label class="" for="atividadefisica">Atividade Fisica / Estado
                                                Clinico</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                                <select style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3"
                                                        name="atividadefisica">

                                                    @if ($user->genre == 'M')

                                                        <option value="1.2" selected>Sedentário (1,2)</option>
                                                        <option value="1.3">Minima (1,3)</option>
                                                        <option value="1.4">Normal (1,4)</option>
                                                        <option value="1.5">Alguma (1,5)</option>
                                                        <option value="1.6">Intensa (1,6)</option>
                                                        <option value="1.8">Muito intensa (1,8)</option>

                                                    @else

                                                        <option value="1.2" selected>Sedentário (1,2)</option>
                                                        <option value="1.3">Minima (1,3)</option>
                                                        <option value="1.35">Normal (1,35)</option>
                                                        <option value="1.45">Alguma (1,45)</option>
                                                        <option value="1.5">Intensa (1,5)</option>
                                                        <option value="1.7">Muito intensa (1,7)</option>

                                                    @endif

                                                    <option value="1.1">Vent. Acamado (1,1)</option>
                                                    <option value="1.2">Acamado (1,2)</option>
                                                    <option value="1.3">Ambulatório (1,3)</option>
                                                    <option value="1.1">Febre, pós oper. (1,1)</option>
                                                    <option value="1.4">Lesão; I. moder. (1,4)</option>
                                                    <option value="1.5">Sepsis (1,5)</option>
                                                    <option value="2.0">Queimados (2,0)</option>
                                                </select>

                                            </div>
                                        </div>


                                        <!--Objetivo-->
                                        <div class="form-group">
                                            <label class="" for="objetivo">Objetivo</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                                                <select style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3"
                                                        name="objetivo">
                                                    <option value="Perder Peso" selected>Perder Peso</option>
                                                    <option value="Manter Peso">Manter Peso</option>
                                                    <option value="Ganhar Peso">Ganhar Peso</option>
                                                    <option value="Aumentar massa muscular">Aumentar massa muscular</option>
                                                    <option value="Habitos Alimentares">Habitos Alimentares</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- Alterações a cumprir -->
                                        <div class="form-group">
                                            <label class="" for="alteracoes">Alterações a cumprir</label>
                                            <textarea style="width:550px" class="form-control mb-2 mr-sm-2 mb-sm-3"
                                                      name="alteracoes"></textarea>
                                        </div>
                                    </div>
                                    <div class="float-right mb-2 mr-sm-2 mb-sm-3">
                                        @if($tipo)
                                            <button type="button" id="criaranamnese" class="btn btn-info">Adicionar Anamnese</button>
                                        @endif
                                        <button type="submit" class="btn btn-primary">Registar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/modal/anamnese.js')}}"></script>
@endsection


