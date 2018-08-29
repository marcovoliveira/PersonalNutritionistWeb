@extends('admin.layout.admin')
@php Carbon\Carbon::setLocale('pt') @endphp
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin/home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Utentes</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-6 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">Mensagens!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('admin/chat') }}">
                        <span class="float-left">Ver Mensagens</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">Tarefas!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Ver detalhes</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>

        @include('partials.flash')
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Utentes</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Telemovel</th>
                            <th>Plano Nutricional</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Telemovel</th>
                            <th>Plano Nutricional</th>
                            <th>Ações</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{\Carbon\Carbon::parse($user->birthday)->age}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>
                                @if($user->foodplan)
                                    {{$user->foodplan->name}}
                                @else
                                    <h5><span class="badge badge-warning">Sem plano nutricional associado</span></h5>
                                @endif
                            </td>
                            <td>
                                <a href="utente/criar/consulta/{{$user->id}}" style="text-decoration: none">
                                <button type="button" class="btn btn-primary">Realizar consulta</button>
                                </a>
                                <a href="utente/{{$user->id}}"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @if(!$users->isEmpty())
            <div class="card-footer small text-muted"> Atualizado há {{ Carbon\Carbon::parse($users->first()->updated_at)->diffForHumans() }}</div>
            @else
                <div class="card-footer small text-muted">Sem registo de pacientes</div>
            @endif
        </div>
    </div>
</div>
@endsection

