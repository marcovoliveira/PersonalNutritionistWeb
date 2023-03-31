
@extends('admin.layout.admin')
@php Carbon\Carbon::setLocale('pt') @endphp
@section('content')
@include('partials.modals.user.edit.edituser')
@if($user->hasUserPersonalInformation())
    @include('partials.modals.user.edit.editclinica')
    @include('partials.modals.user.edit.editnutricional')
    @include('partials.modals.user.edit.editactivities')
@else
    @include('partials.modals.user.create.createclinica')
    @include('partials.modals.user.create.createnutricional')
    @include('partials.modals.user.create.createactivities')
@endif
@if($user->hasAnthropometricEvaluation())
    @include('partials.modals.user.edit.editconsulta')
    @include('partials.modals.user.detalhesconsulta')
@endif
@if($user->hasFoodAnamnesis())
    @include('partials.modals.user.edit.editanamnese')
    @include('partials.modals.user.detalhesanamnese')
@else
    @include('partials.modals.user.create.createanamnese')
@endif

<div class="content-wrapper">
    <div class="container-fluid">
            <!-- Breadcrumbs-->

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/home') }}">Inicio</a>
                </li>
                <li class="breadcrumb-item">
                    Utente
                </li>
                <li class="breadcrumb-item active">{{$user->name}}</li>
            </ol>
            @include('partials.flash')

        <div class="row">



                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Utente </div>
                            <div class="card-body">
                                <p>Nome:  <strong>{{$user->name}}</strong><hr></p>
                                <p>Email:  <strong>{{$user->email}}</strong><hr></p>
                                <p>Telemovel:  <strong>{{$user->phone_number}}</strong><hr></p>
                                <p>Localidade:  <strong>{{$user->city}}</strong><hr></p>
                                <p>Ocupação:  <strong>{{$user->occupation}}</strong><hr></p>
                                <p>Data de Nascimento:  <strong>{{ Carbon\Carbon::parse($user->birthday)->format('d/m/Y')  }}
                                        &nbsp; {{ $user->age }} Anos</strong><hr></p>
                                @if ($user->genre === "M")
                                    <p>Genero:  <strong>Masculino</strong><hr></p>
                                @else
                                    <p>Genero:  <strong>Feminino</strong><hr></p>
                                @endif
                                @if($user->foodplan)
                                    <p>Plano Alimentar:  <strong>{{$user->foodplan->name}}</strong><a href="{{ route('admin.plano_pdf', ['id' => $user->foodplan->id ]) }}" style="text-decoration: none">&nbsp; &nbsp; &nbsp;<button type="button" class="btn btn-info">Imprimir</button></a><hr></p>

                                @else <p> Sem plano alimentar associado.  <hr></p>
                                @endif
                                <button type="button" id="editarpersonalinformation" style="float: right;" class="btn btn-warning">Editar</button>
                            </div>
                            <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($user->updated_at)->diffForHumans() }} </div>
                        </div>
                    </div>





                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Informação Clinica </div>
                            <div class="card-body">
                            @if($user->hasUserPersonalInformation())
                                @if($user->userpersonalinformation->last()->clinical_situation)
                                    <p>Situação clinica:  <strong>{{$user->userpersonalinformation->last()->clinical_situation}}</strong><hr></p>
                                @else <p> Sem informação de situação clinica.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->clinical_analysis)
                                    <p>Analises Clinicas:  <strong>{{$user->userpersonalinformation->last()->clinical_analysis}}</strong><hr></p>
                                @else <p> Sem informação de analises clinicas.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->intestinal_transit)
                                    <p>Transito intestinal:  <strong>{{$user->userpersonalinformation->last()->intestinal_transit}}</strong><hr></p>
                                @else <p> Sem informação de transito intestinal.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->digestive_complaints)
                                    <p>Queixas digestivas:  <strong>{{$user->userpersonalinformation->last()->digestive_complaints}}</strong><hr></p>
                                @else <p> Sem informação de queixas digestivas.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->alergies_intolerances)
                                    <p>Intolerancias alimentares:  <strong>{{$user->userpersonalinformation->last()->alergies_intolerances}}</strong><hr></p>
                                @else <p> Sem informação de intolerancias alimentares.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->hydration)
                                    <p>Hidratração:  <strong>{{$user->userpersonalinformation->last()->hydration}}</strong><hr></p>
                                @else <p> Sem informação de hidratação.  <hr></p>
                                @endif
                                <button type="button" id="editarinformacaoclinica" style="float: right;" class="btn btn-warning">Editar</button>
                            </div>
                            <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($user->userpersonalinformation->last()->updated_at)->diffForHumans() }} </div>
                                @else
                                    <p>Ainda não foi adicionada informação clinica relativa a este utente.</p>
                                    <button type="button" id="criarinformacaoclinica" style="float: right;" class="btn btn-primary">Adicionar</button>
                                    </div>
                            @endif

                        </div>
                    </div>






                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Informação Nutricional </div>
                            <div class="card-body">
                            @if($user->hasUserPersonalInformation())
                                @if($user->userpersonalinformation->last()->weekend_food)
                                    <p>Refeições fim de semana:  <strong>{{$user->userpersonalinformation->last()->weekend_food}}</strong><hr></p>
                                @else <p> Sem informação de refeições de fim de semana.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->most_confection)
                                    <p>Confeçoes mais utilizadas:  <strong>{{$user->userpersonalinformation->last()->most_confection}}</strong><hr></p>
                                @else <p> Sem informação de onfeçoes mais utilizadas.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->alcohol_consume)
                                    <p>Frequencia Consumo de alcool:  <strong>{{$user->userpersonalinformation->last()->alcohol_consume}}</strong><hr></p>
                                @else <p> Sem informação de consumo de alcool.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->candys_frequency)
                                    <p>Frequencia Consumo de doces:  <strong>{{$user->userpersonalinformation->last()->candys_frequency}}</strong><hr></p>
                                @else <p> Sem informação de consumo de doces.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->salty_food_frequency)
                                    <p>Frequencia Consumo de sal:  <strong>{{$user->userpersonalinformation->last()->salty_food_frequency}}</strong><hr></p>
                                @else <p> Sem informação de consumo de sal.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->favorite_foods)
                                    <p>Alimentos preferidos:  <strong>{{$user->userpersonalinformation->last()->favorite_foods}}</strong><hr></p>
                                @else <p> Sem informação de alimentos preferidos.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->deprecated_foods)
                                    <p>Alimentos preteridos:  <strong>{{$user->userpersonalinformation->last()->deprecated_foods}}</strong><hr></p>
                                @else <p> Sem informação de alimentos preteridos.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->observations)
                                    <p>Observações:  <strong>{{$user->userpersonalinformation->last()->observations}}</strong><hr></p>
                                @else <p> Sem observações. <hr></p>
                                @endif
                                    <button type="button" id="editarinformacaonutricional" style="float: right;" class="btn btn-warning">Editar</button>
                            </div>
                            <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($user->userpersonalinformation->last()->updated_at)->diffForHumans() }} </div>
                            @else
                                    <p>Ainda não foi adicionada informação nutricional relativa a este utente.</p>
                                    <button type="button" id="criarinformacaonutricional" style="float: right;" class="btn btn-primary">Adicionar</button>
                                    </div>
                            @endif
                        </div>
                    </div>


        </div>
        <div class="row">


                    <div class="col-sm-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Consultas </div>
                            <div class="card-body">
                                @if($user->hasAnthropometricEvaluation())

                                    <div class="table-responsive"><a href="criar/consulta/{{$user->id}}"> <button type="button" id="criarprimeiraconsulta" style="float: right; margin-left: 20px; margin-bottom: 5px; margin-right: 15px;"  class="btn btn-primary btn-sm">Realizar consulta</button></a>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Data</th>
                                            <th>Peso</th>
                                            <th>Altura</th>
                                            <th>IMC</th>
                                            <th>Massa Gorda</th>
                                            <th>Ações</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Data</th>
                                            <th>Peso</th>
                                            <th>Altura</th>
                                            <th>IMC</th>
                                            <th>Massa Gorda</th>
                                            <th>Ações</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach ($user->anthropometricevaluation as $evaluation)
                                            <tr>
                                                <td>{{Carbon\Carbon::parse($evaluation->created_at)->format('d/m/Y') }}</td>
                                                <td>{{$evaluation->weight}} kg.</td>
                                                <td>{{$evaluation->height}} cm.</td>
                                                <td>{{$evaluation->imc}} kg/m²</td>
                                                <td>{{$evaluation->fat_mass}}%</td>
                                                <td>
                                                    <button type="button" id="detalhesconsulta" class="view-modal btn btn-primary btn-sm"
                                                            data-id="{{$evaluation->id}}"
                                                            data-height="{{$evaluation->height}}"
                                                            data-weight="{{$evaluation->weight}}"
                                                            data-visceral_fat="{{$evaluation->visceral_fat}}"
                                                            data-fat_mass="{{$evaluation->fat_mass}}"
                                                            data-waist_perimeter="{{$evaluation->waist_perimeter}}"
                                                            data-hip_permieter="{{$evaluation->hip_permieter}}"
                                                            data-physical_activity="{{$evaluation->physical_activity}}"
                                                            data-objectivity="{{$evaluation->objectivity}}"
                                                            data-recomendations="{{$evaluation->recomendations}}"
                                                            data-imc="{{$evaluation->imc}}"
                                                            data-basal_metabolism="{{$evaluation->basal_metabolism}}"
                                                            data-energy_needs="{{$evaluation->energy_needs}}"
                                                            data-waist_perimeter_risk="{{$evaluation->waist_perimeter_risk}}"
                                                            data-hc_recomendation="{{$evaluation->hc_recomendation}}"
                                                            data-p_recomendation="{{$evaluation->p_recomendation}}"
                                                            data-f_recomendation="{{$evaluation->f_recomendation}}"
                                                            data-created_at="{{$evaluation->created_at}}">
                                                        Detalhes
                                                    </button>

                                                    <button type="button" id="editarconsulta" class="edit-modal btn btn-warning btn-sm"
                                                            data-id="{{$evaluation->id}}"
                                                            data-height="{{$evaluation->height}}"
                                                            data-weight="{{$evaluation->weight}}"
                                                            data-visceral_fat="{{$evaluation->visceral_fat}}"
                                                            data-fat_mass="{{$evaluation->fat_mass}}"
                                                            data-waist_perimeter="{{$evaluation->waist_perimeter}}"
                                                            data-hip_permieter="{{$evaluation->hip_permieter}}"
                                                            data-physical_activity="{{$evaluation->physical_activity}}"
                                                            data-recomendations="{{$evaluation->recomendations}}"
                                                            data-objectivity="{{$evaluation->objectivity}}">
                                                        Editar
                                                    </button>&nbsp;
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($user->updated_at)->diffForHumans() }} </div>
                            @else
                                <p>Pode realizar a primeira consulta do utente neste momento!</p>
                                <a href="criar/consulta/{{$user->id}}">
                                <button type="button" id="criarprimeiraconsulta" style="float: right;" class="btn btn-primary">Realizar consulta</button>
                                </a>
                        </div>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Horarios/Atividades </div>
                            <div class="card-body">
                                @if($user->hasUserPersonalInformation())
                                @if($user->userpersonalinformation->last()->week_schedule)
                                    <p>Horario semanal:  <strong>{{$user->userpersonalinformation->last()->week_schedule}}</strong><hr></p>
                                @else <p> Sem informação de horario semanal.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->weekend_schedule)
                                    <p>Horario fim de semana:  <strong>{{$user->userpersonalinformation->last()->weekend_schedule}}</strong><hr></p>
                                @else <p> Sem informação de horario de fim de semana.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->physical_exercise)
                                    <p>Exercicio fisico:  <strong>{{$user->userpersonalinformation->last()->physical_exercise}}</strong><hr></p>
                                @else <p> Sem informação de exercicio fisico.  <hr></p>
                                @endif
                                @if($user->userpersonalinformation->last()->exercice_frequency)
                                    <p>Frequencia Exercicio fisico:  <strong>{{$user->userpersonalinformation->last()->exercice_frequency}}</strong><hr></p>
                                @else <p> Sem informação de frequencia de exercicio fisico.  <hr></p>
                                @endif
                                    <button type="button" id="edithorariosatividades" style="float: right;" class="btn btn-warning">Editar</button>
                            </div>
                                    <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($user->userpersonalinformation->last()->updated_at)->diffForHumans() }} </div>
                                @else
                                    <p>Ainda não foi adicionada informação de horarios ou atividades relativas a este utente.</p>
                                    <button type="button" id="criarhorariosatividades" style="float: right;" class="btn btn-primary">Adicionar</button>
                                    </div>
                                @endif



                        </div>
                    </div>











        </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-table"></i> Ultima Anamnese Alimentar </div>
                    <div class="card-body">
                        @if($user->hasFoodAnamnesis())
                        <div class="col-md-4 breakfast">
                            <h5 class="breakfast">
                                Pequeno Almoço
                            </h5>
                            @if($user->FoodAnamnesis->last()->breakfast_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->breakfast_hour)->format('H:i')}}
                            @endif
                        </div>
                        <div class="modal-body breakfast">
                            <div class="modal-breakfast">
                                @if(!$user->FoodAnamnesis->last()->breakfast)
                                    Sem informação de pequno almoço!
                                @endif
                                {{$user->FoodAnamnesis->last()->breakfast}}

                            </div>
                        </div>

                        <div class="col-md-4 morning_snack">
                            <h5 class="morning_snack">
                                Lanche da manha
                            </h5>
                            @if($user->FoodAnamnesis->last()->morning_snack_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->morning_snack_hour)->format('H:i')}}
                            @endif
                        </div>
                        <div class="modal-body morning_snack">
                            <div class="modal-morning_snack">
                                @if(!$user->FoodAnamnesis->last()->morning_snack)
                                    Sem informação de lanche da manha!
                                @endif
                                {{$user->FoodAnamnesis->last()->morning_snack}}
                            </div>
                        </div>
                        <div class="col-md-4 lunch">
                            <h5 class="lunch">
                                Almoço
                            </h5>
                            @if($user->FoodAnamnesis->last()->lunch_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->lunch_hour)->format('H:i')}}
                            @endif
                        </div>
                        <div class="modal-body lunch">
                            <div class="modal-lunch">
                                @if(!$user->FoodAnamnesis->last()->lunch)
                                    Sem informação de almoço!
                                @endif
                                {{$user->FoodAnamnesis->last()->lunch}}
                            </div>
                        </div>

                        <div class="col-md-4 snack_one">
                            <h5 class="snack_one">
                                Lanche
                            </h5>
                            @if($user->FoodAnamnesis->last()->snack_one_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->snack_one_hour)->format('H:i')}}
                            @endif
                        </div>
                        <div class="modal-body snack_one">
                            <div class="modal-snack_one">
                                @if(!$user->FoodAnamnesis->last()->snack_one)
                                    Sem informação de lanche!
                                @endif
                                {{$user->FoodAnamnesis->last()->snack_one}}
                            </div>
                        </div>

                        <div class="col-md-4 snack_two">
                            <h5 class="snack_two">
                                Segundo lanche
                            </h5>
                            @if($user->FoodAnamnesis->last()->snack_two_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->snack_two_hour)->format('H:i')}}
                            @endif
                        </div>
                        <div class="modal-body snack_two">
                            <div class="modal-snack_two">
                                @if(!$user->FoodAnamnesis->last()->snack_two)
                                    Sem informação de segundo lanche!
                                @endif
                                {{$user->FoodAnamnesis->last()->snack_two}}
                            </div>
                        </div>

                        <div class="col-md-4 diner">
                            <h5 class="diner">

                                Jantar
                            </h5>
                            @if($user->FoodAnamnesis->last()->diner_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->diner_hour)->format('H:i')}}
                             @endif
                        </div>
                        <div class="modal-body diner">
                            <div class="modal-diner">
                                @if(!$user->FoodAnamnesis->last()->diner)
                                    Sem informação de segundo jantar!
                                @endif
                                {{$user->FoodAnamnesis->last()->diner}}
                            </div>
                        </div>

                        <div class="col-md-4 bedtime_snack">
                            <h5 class="bedtime_snack">
                                Ceia
                            </h5>
                            @if($user->FoodAnamnesis->last()->bedtime_snack_hour)
                            {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->bedtime_snack_hour)->format('H:i')}}
                            @endif
                        </div>
                        <div class="modal-body bedtime_snack">
                            <div class="modal-bedtime_snack">
                                @if(!$user->FoodAnamnesis->last()->bedtime_snack)
                                    Sem informação de segundo ceia!
                                @endif
                                {{$user->FoodAnamnesis->last()->bedtime_snack}}
                            </div>
                        </div>

                        <div class="col-md-4 bedtime_snack">
                            <h5 class="bedtime_snack">

                                Snacks
                            </h5>
                        </div>
                        <div class="modal-body bedtime_snack">
                            <div class="modal-bedtime_snack">
                                @if(!$user->FoodAnamnesis->last()->snacks)
                                    Sem informação de snacks!
                                @endif
                                {{$user->FoodAnamnesis->last()->snacks}}
                            </div>
                        </div>
                            <button type="button" id="editaranamnesealimentar" style="float: right;" class="btn btn-warning">Editar</button>
                    </div>
                    <div class="card-footer small text-muted"> Atualizado há {{Carbon\Carbon::parse($user->FoodAnamnesis->last()->updated_at)->diffForHumans()}} </div>
                    @else
                        Ainda não foi adicionada informação de anamnese alimentar relativa a este utente.
                        <button type="button" id="criaranamnese" style="float: right;" class="btn btn-primary">Adicionar</button>
                        </div>
                    @endif
                </div>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Registos Anamnese Alimentar </div>
        <div class="card-body">
            @if($user->hasFoodAnamnesis())

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Data</th>
                            <th>Pequeno Almoço</th>
                            <th>Almoço</th>
                            <th>Lanche</th>
                            <th>Jantar</th>
                            <th>Snacks</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Data</th>
                            <th>Pequeno Almoço</th>
                            <th>Almoço</th>
                            <th>Lanche</th>
                            <th>Jantar</th>
                            <th>Snacks</th>
                            <th>Ações</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($user->foodanamnesis as $anamnesis)
                            <tr>
                                <td>{{Carbon\Carbon::parse($anamnesis->created_at)->format('d/m/Y') }}</td>
                                <td>{{$anamnesis->breakfast}}</td>
                                <td>{{$anamnesis->lunch}}</td>
                                <td>{{$anamnesis->snack_one}}</td>
                                <td>{{$anamnesis->diner}}</td>
                                <td>{{$anamnesis->snacks}}</td>
                                <td>
                                    <button type="button" id="veranamnese" class="view-modal btn btn-primary btn-sm"
                                            data-id="{{$anamnesis->id}}"
                                            data-user_id="{{$anamnesis->user_id}}"
                                            data-breakfast_hour="{{ Carbon\Carbon::parse($anamnesis->breakfast_hour)->format('H:i') }}"
                                            data-brk="{{$anamnesis->breakfast}}"
                                            data-morning_snack_hour="{{$anamnesis->morning_snack_hour}}"
                                            data-morning_snack="{{$anamnesis->morning_snack}}"
                                            data-lunch_hour="{{$anamnesis->lunch_hour}}"
                                            data-lunch="{{$anamnesis->lunch}}"
                                            data-snack_one_hour="{{$anamnesis->snack_one_hour}}"
                                            data-snack_one="{{$anamnesis->snack_one}}"
                                            data-snack_two_hour="{{$anamnesis->snack_two_hour}}"
                                            data-snack_two="{{$anamnesis->snack_two}}"
                                            data-diner_hour="{{$anamnesis->diner_hour}}"
                                            data-diner="{{$anamnesis->diner}}"
                                            data-bedtime_snack_hour="{{$anamnesis->bedtime_snack_hour}}"
                                            data-bedtime_snack="{{$anamnesis->bedtime_snack}}"
                                            data-snacks="{{$anamnesis->snacks}}"
                                            data-created_at="{{$anamnesis->created_at}}">
                                        Ver
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($user->FoodAnamnesis->last()->updated_at)->diffForHumans() }} </div>
        @else
            <p>Realize um consulta e registe uma nova anamnese!</p>
    </div>
        @endif
    </div>






<script src="{{ asset('public/js/modal/user.js')}}"></script>
@endsection

