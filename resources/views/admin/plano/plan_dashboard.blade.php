

@extends('admin.layout.admin')

@section('content')
    @php Carbon\Carbon::setLocale('pt') @endphp
    @include('partials.modals.viewfood')
    @include('partials.modals.editfood')
    @include('partials.modals.food')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin/home') }}">Inicio</a>
                </li>
                <li class="breadcrumb-item active">Planos Alimentares</li>
            </ol>
            @include('partials.flash')
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Planos Alimentares
                    &nbsp; <!-- Or align right ? -->
                    <button data-toggle="modal" data-target="#createPlan"  class="btn btn-primary btn-sm" role="button">Criar Plano Alimentar</button>

                </div>


                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Plano</th>
                                <th>Data de criação</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Plano</th>
                                <th>Data de criação</th>
                                <th>Ações</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($plans as $plan)
                            <tr>
                                <td>{{$plan->name}}</td>
                                <td>{{$plan->created_at}}</td>
                                <td>
                                    <button type="button" class="view-modal btn btn-primary"
                                            data-id="{{$plan->id}}"
                                            data-name="{{$plan->name}}"
                                            data-breakfast="{{$plan->breakfast}}"
                                            data-morning_snack="{{$plan->morning_snack}}"
                                            data-morning_snack_one="{{$plan->morning_snack_one}}"
                                            data-lunch="{{$plan->lunch}}"
                                            data-snack_one="{{$plan->snack_one}}"
                                            data-snack_two="{{$plan->snack_two}}"
                                            data-diner="{{$plan->diner}}"
                                            data-bedtime_snack="{{$plan->bedtime_snack}}"
                                            data-recomendations="{{$plan->recomendations}}">
                                            Ver
                                    </button>&nbsp;
                                    <button type="button" class="edit-modal btn btn-warning"
                                            data-id="{{$plan->id}}"
                                            data-name="{{$plan->name}}"
                                            data-breakfast="{{$plan->breakfast}}"
                                            data-morning_snack="{{$plan->morning_snack}}"
                                            data-morning_snack_one="{{$plan->morning_snack_one}}"
                                            data-lunch="{{$plan->lunch}}"
                                            data-snack_one="{{$plan->snack_one}}"
                                            data-snack_two="{{$plan->snack_two}}"
                                            data-diner="{{$plan->diner}}"
                                            data-bedtime_snack="{{$plan->bedtime_snack}}"
                                            data-recomendations="{{$plan->recomendations}}">
                                        Editar
                                    </button>&nbsp;
                                    @if(count($plan->user))
                                        <div class="disabled-button-wrapper">
                                        <div class="disabled-button-wrapper" id="disabled-button-wrapper_{{$plan->id}}" data-title="Este plano nutricional esta em uso!">
                                            <button type="button" class="btn btn-danger" disabled>Apagar</button>
                                        </div>
                                        </div>
                                    @else
                                        <a href="/admin/plan/delete/{{$plan->id}}">
                                        <button  type="button" class="btn btn-danger">Apagar</button>
                                        </a>
                                    @endif
                                    &nbsp;
                                    <a href="pdf/{{$plan->id}}"><button type="button" class="btn btn-info">Imprimir</button></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if (!$plans->isEmpty())
                <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($plans->first()->updated_at)->diffForHumans() }}</div>
                @else
                    <div class="card-footer small text-muted">Sem registos de planos alimentares</div>
                @endif
            </div>
        </div>
    </div>
    <script src="{{ asset('public/js/modal/planos.js')}}"></script>
@endsection
