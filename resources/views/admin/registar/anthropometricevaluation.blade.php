@extends('admin.layout.admin')

@section('content')
@php
    $user = Session::get('key');
    Session::reflash(); 
@endphp

  
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/home') }}">Inicio</a>
        </li>
        <li class="breadcrumb-item">{{ $user->name }}</li>
        <li class="breadcrumb-item active">Registar Informação Pessoal</li>
      </ol>


      <!-- Nome -->

      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
      		            <form class="form" role="form" method="POST" 
                      action="/admin/registar/anthropometricevaluation">
                         {{ csrf_field() }}
                         <div class="row">
                     
                        <!-- Altura -->
                        <div class="form-group">
                          <label class="" for="altura">Altura</label>
                          <input style="width:270px" type="number" step="0.01" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="altura" placeholder="Altura em centimetros"  value="{{ old('altura') }}" autofocus>
                        </div>
                       
                           <!-- Peso -->

                         <div class="form-group">
                          <label class="" for="peso">Peso</label>
                          <input style="width:270px" type="number" step="0.01" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="peso" placeholder="Peso em kilogramas"  value="{{ old('peso') }}">
                        </div>
                      
                          <!-- Gordura Visceral -->

                         <div class="form-group">
                          <label class="" for="gorduravisceral">Gordura Visceral</label>
                          <input style="width:270px" type="number" step="0.01" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="gorduravisceral" placeholder="Gordura Visceral (%)"  value="{{ old('gorduravisceral') }}">
                        </div>

                        <!-- Massa Gorda -->

                         <div class="form-group">
                          <label class="" for="massagorda">Massa Gorda</label>
                          <input style="width:270px" type="number" step="0.01" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="massagorda" placeholder="Massa Gorda (%)"  value="{{ old('massagorda') }}">
                        </div>

                          <!-- Perimetro Cintura -->

                         <div class="form-group">
                          <label class="" for="perimetrocintura">Perimetro Cintura</label>
                          <input style="width:270px" type="number" step="0.01" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="perimetrocintura" placeholder="Perimetro Cintura em centimetros"  value="{{ old('perimetrocintura') }}">
                        </div>

                            <!-- Perimetro Anca -->

                         <div class="form-group">
                          <label class="" for="perimetroanca">Perimetro Anca</label>
                          <input style="width:270px" type="number"  step="0.01" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="perimetroanca" placeholder="Perimetro Anca em centimetros"  value="{{ old('perimetroanca') }}">
                        </div>

                          <!--Atividade Fisica / Estado Clinico-->      
                          

            
                      <div class="form-group">
                        <label class="" for="atividadefisica">Atividade Fisica / Estado Clinico</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="atividadefisica">

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
                          <select style="width:270px" class="custom-select mb-2 mr-sm-2 mb-sm-3" name="objetivo">
                              <option value="Perder" selected>Perder Peso</option>
                              <option value="Manter">Manter Peso</option>
                              <option value="Ganhar">Ganhar Peso</option>
                              <option value="Aumentar">Aumentar massa muscular</option>
                              <option value="Habitos">Habitos Alimentares</option>
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
                          <button type="submit" class="btn btn-primary">Registar</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                </div>
          </div>
@endsection


