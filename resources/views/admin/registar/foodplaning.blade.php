@extends('admin.layout.admin')

@section('content')
@php
    $user = Session::get('key2');
    $data = Session::get('calculations');
    Session::reflash(); 
@endphp
@include('partials.modals.editfood')
@include('partials.modals.food')
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/home') }}">Inicio</a>
        </li>
        <li class="breadcrumb-item">{{ $user->name }}</li>
        <li class="breadcrumb-item active">Planemaneto Alimentar</li>
      </ol>

    <div class="row">

      <div class="col-lg-3">
        <div class="card mb-3">
          <div class="card-header">
              <!-- start -->
              @include('partials.flash')
            <i class="fa fa-user"></i> Informação Utente</div>
            <div class="card-body">            
               <div class="col text-center my-auto">
                  <div class="h4 mb-0 text-primary">{{ $user->age }}</div>
                  <div class="small text-muted">Idade</div>
                  <hr>
                  @if ($user->genre == 'M')
                  <div class="h4 mb-0 text-warning">Masculino</div>
                  @else
                  <div class="h4 mb-0 text-warning">Feminino</div>
                  @endif
                  <div class="small text-muted">Genero</div>
                  <hr>
                  <div class="h4 mb-0 text-success">{{ $data->physical_activity}}</div>
                  <div class="small text-muted">Coeficiente de Atividade Fisica</div>
                </div>
            </div> 
             <div class="card-footer small text-muted">Perimetro de cintura: {{ $data->waist_perimeter_risk }}</div>

        <!-- end -->
        </div>
        </div>




      <div class="col-lg-3">
        <div class="card mb-3">
          <div class="card-header">
              <!-- start -->
            <i class="fa fa-calculator"></i> Calculos automaticos</div>
            <div class="card-body">            
               <div class="col text-center my-auto">
                  <div class="h4 mb-0 text-primary">{{ number_format($data->imc, 2)  }} kg/m²</div>
                  <div class="small text-muted">Indice de Massa Corporal</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">{{ number_format($data->basal_metabolism, 2) }}</div>
                  <div class="small text-muted">Metabolismo Basal</div>
                  <hr>
                  <div class="h4 mb-0 text-success">{{ number_format($data->energy_needs, 2) }}</div>
                  <div class="small text-muted">Necessidades Energeticas Totais</div>
                </div>
            </div> 
            @if($user->genre == 'M')
             <div class="card-footer small text-muted">66+(13,8*peso)+(5*altura)-(6,8*idade)</div>
            
            @else
             <div class="card-footer small text-muted">664+(9,6*peso)+(1,8*altura)-(4,7*idade)</div>
          
          @endif

        <!-- end -->
        </div>
        </div>


        <div class="col-lg-5">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Distribuição dos macronutrientes recomendada</div>
            <div class="card-body">            
               <div class="col text-center my-auto">
                  <div class="h4 mb-0 text-danger">{{ number_format($data->p_recomendation, 2) }} g</div>
                  <div class="small text-muted">Proteina</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">{{ number_format($data->hc_recomendation, 2) }} g</div>
                  <div class="small text-muted">Hidratos de carbono</div>
                  <hr>
                  <div class="h4 mb-0 text-success">{{ number_format($data->f_recomendation, 2) }} g</div>
                  <div class="small text-muted">Lipidos</div>
                </div>
            </div>        
            <div class="card-footer small text-muted">50% Hidratos de carbono / 30% Lipidos / 20% Proteinas </div>
          </div>
        </div>
  


        <div class="col-lg-11">
          <!-- Example Pie Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-cutlery"></i> Plano Alimentar</div>
            <div class="card-body">            
               <div class="col text-left my-auto">
                 <!--Objetivo-->

                   <form class="form-group" role="form"
                         method="POST" action="{{  url('/admin/plan/link/'.$user->id) }}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       {{ csrf_field() }}
                      <div class="form-group">
                        <label class="" for="objetivo">Planos</label>

                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select id="plano" style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="food_plan_id" required>
                              <option value="" disabled selected>Escolher plano...</option>
                                @foreach($foodplans as $foodplan)
                                    <option value="{{$foodplan->id}}">{{$foodplan->name}}</option>
                                    @endforeach

                          </select>

                          </div>
                          @if($user->foodplan)
                          Plano alimentar em uso: <strong>{{$user->foodplan->name}}</strong>
                          @endif
                        </div>
                       <button type="button" id="create" class="btn btn-primary btn-sm">Adicionar novo plano</button>
                      <button type="button" id="edit" class="btn btn-warning btn-sm">Editar plano escolhido</button>
                      <button type="submit" class="btn btn-success btn-sm">Associar plano</button>
                       @if($user->foodplan)
                           <a href="{{ url('admin/home') }}">
                           <button type="button" class="btn btn-secondary btn-sm">Manter plano</button>
                           </a>
                       @endif
                   </form>

                </div>
            </div>        

            <div class="card-footer small text-muted">Recomendações: {{ $data->recomendations }}</div>
          </div>
        </div>

  </div>





</div>
</div>

<script src="{{ asset('public/js/modal/associar.js')}}"></script>
    @endsection