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
      		            <form class="form-group" role="form" method="POST" 
                      action="/admin/registar/personalinformation">
                         {{ csrf_field() }}

                        <!-- Horario de semana -->
                        <div class="form-group">
                          <label class="" for="horariosemana">Horario de semana</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="horariosemana" placeholder="Horario de semana"  value="{{ old('horariosemana') }}" autofocus>
                        </div>

                           <!-- Horario fim de semana -->

                        <div class="form-group">
                          <label class="" for="horariofimsemana">Horario fim de semana</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="horariofimsemana" placeholder="Horario fim de semana"  value="{{ old('horariofimsemana') }}">
                        </div>
                             
                         <!-- Situacao Clinica -->

                        <div class="form-group">
                          <label class="" for="situacaoclinica">Situação clinica</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="situacaoclinica" placeholder="Situação clinica"  value="{{ old('horariofimsemana') }}">
                        </div>

                          <!-- Analises Clinica -->

                        <div class="form-group">
                          <label class="" for="analisesclinicas">Analises clinicas</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="analisesclinicas" placeholder="Analises clinicas"  value="{{ old('analisesclinicas') }}">
                        </div>

                            <!-- Transito Intestinal -->

                        <div class="form-group">
                          <label class="" for="transitointestinal">Transito intestinal</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="transitointestinal" placeholder="Transito intestinal"  value="{{ old('transitointestinal') }}">
                        </div>

                          <!-- Queixas Digestivas -->

                        <div class="form-group">
                          <label class="" for="quexiasdigestivas">Queixas Digestivas</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="quexiasdigestivas" placeholder="Queixas Digestivas"  value="{{ old('quexiasdigestivas') }}">
                        </div>

                        <!-- Alergias/Intolerancias Alimentares -->

                        <div class="form-group">
                          <label class="" for="alergiasintolerancias">
                          Alergias/Intolerancias Alimentares</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="alergiasintolerancias" placeholder="Alergias/Intolerancias Alimentares"  value="{{ old('alergiasintolerancias') }}">
                        </div>

                        <!-- Hidratação -->

                        <div class="form-group">
                          <label class="" for="hidratacao">Hidratação</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="hidratacao" placeholder="Hidratação"  value="{{ old('hidratacao') }}">
                        </div>


                        <!-- Atividade Exercicio/Fisico -->

                        <div class="form-group">
                          <label class="" for="atividadefisica">Atividade/Exercicio fisico</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="atividadefisica" placeholder="Atividade/Exercicio Fisico"  value="{{ old('atividadefisica') }}">
                        </div>                  


                         <!--Frequencia-->      
                      <div class="form-group">
                        <label class="" for="genero">Frequencia exercicio fisico</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="frequenciaexercicio">
                              <option value="Raramente" selected>Raramente</option>
                              <option value="Diariamente">Diariamente</option>
                              <option value="Semanalmente">Semanalmente</option>
                              <option value="Mensalmente">Mensalmente</option>
                              <option value="Nunca">Nunca</option>
                          </select>
                          </div>
                      </div>


                       <!-- Alimentação Fim de semana -->

                        <div class="form-group">
                          <label class="" for="alimentacaofimdesemana">Alimentação fim de semana</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="alimentacaofimdesemana" placeholder="Alimentação fim de semana"  value="{{ old('alimentacaofimdesemana') }}">
                        </div>

                         <!-- Confeções mais utilizadas -->

                        <div class="form-group">
                          <label class="" for="confecoesutilizadas">Confeções mais utilizadas</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="confecoesutilizadas" placeholder="Confeções mais utilizadas"  value="{{ old('confecoesutilizadas') }}">
                        </div>       

                         <!-- Consumo de bebidas alcolicas -->

                        <div class="form-group">
                        <label class="" for="genero">Consumo de bebidas alcolicas</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="bebidasalcolicas">
                              <option value="Raramente" selected>Raramente</option>
                              <option value="Diariamente">Diariamente</option>
                              <option value="Semanalmente">Semanalmente</option>
                              <option value="Mensalmente">Mensalmente</option>
                              <option value="Nunca">Nunca</option>
                          </select>
                          </div>
                      </div>

                      <!-- Frequência do consumo de doces -->

                        <div class="form-group">
                        <label class="" for="genero">Frequência do consumo de doces</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="frequenciadoces">
                              <option value="Raramente" selected>Raramente</option>
                              <option value="Diariamente">Diariamente</option>
                              <option value="Semanalmente">Semanalmente</option>
                              <option value="Mensalmente">Mensalmente</option>
                              <option value="Nunca">Nunca</option>
                          </select>
                          </div>
                      </div>

                      <!-- Frequência do consumo de salgados/enchidos -->

                        <div class="form-group">
                        <label class="" for="genero">Frequência do consumo de salgados/enchidos</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="frequenciasalgados">
                              <option value="Raramente" selected>Raramente</option>
                              <option value="Diariamente">Diariamente</option>
                              <option value="Semanalmente">Semanalmente</option>
                              <option value="Mensalmente">Mensalmente</option>
                              <option value="Nunca">Nunca</option>
                          </select>
                          </div>
                      </div>


                      <!-- Alimentos preferidos -->

                        <div class="form-group">
                          <label class="" for="alimentospreferidos">Alimentos preferidos</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="alimentospreferidos" placeholder="Alimentos preferidos"  value="{{ old('alimentospreferidos') }}">
                        </div>  

                         <!-- Alimentos preteridos -->

                        <div class="form-group">
                          <label class="" for="alimentospreteridos">Alimentos preteridos</label>
                          <input style="width:400px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="alimentospreteridos" placeholder="Alimentos preteridos"  value="{{ old('alimentospreteridos') }}">
                        </div>  


                         <!-- Observações -->
                        <div class="form-group">
                          <label class="" for="observacoes">Observações</label>
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="observacoes"></textarea>
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


