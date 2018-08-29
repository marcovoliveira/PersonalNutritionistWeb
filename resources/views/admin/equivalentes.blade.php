@extends('admin.layout.admin')

@section('content')
    @include('partials.modals.equivalentes.equivalente')
    @include('partials.modals.equivalentes.alimentos')
    @include('partials.modals.equivalentes.verAlimentos')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ url('admin/home') }}">Inicio</a>
                </li>
                <li class="breadcrumb-item active">Equivalentes</li>
            </ol>
            @include('partials.flash')

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Equivalentes
                    <!-- Or align right ? -->
                    <button data-toggle="createEquivalente" id="createEquivalente" data-target="#createEquivalente"  class="btn btn-primary btn-sm" role="button">Criar Equivalente</button></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Equivalente</th>
                                <th>Data de criação</th>
                                <th>Numero de equivalentes</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Equivalente</th>
                                <th>Data de criação</th>
                                <th>Numero de equivalentes</th>
                                <th>Ações</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($alimentos as $alimento)
                                <tr>
                                    <td>{{$alimento->name}}</td>
                                    <td>{{$alimento->created_at}}</td>
                                    <td>{{$alimento->equivalentes->count()}}</td>
                                    <td>

                                        <button type="button" id="verAlimentos"  data-id="{{$alimento->id}} "class="btn btn-primary">Ver</button>
                                        <button type="button"  id="adicionarAlimento" data-id="{{$alimento->id}}"  class="btn btn-success">Adicionar</button>
                                        <button type="button" id="apagarEquivalente" data-id="{{$alimento->id}}" class="btn btn-danger"><b href=""><i class="fa fa-trash" aria-hidden="true"></i></b></button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(!$alimentos->isEmpty())
                <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($alimentos->last()->updated_at)->diffForHumans() }}</div>
                @else
                    <div class="card-footer small text-muted"> Sem registos!</div>
                @endif
            </div>
        </div>
        </div>

    <script src="{{ asset('js/modal/equivalentes.js')}}"></script>
    <script src="{{ asset('js/modal/sweetalert.js')}}"></script>


@endsection
