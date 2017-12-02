@extends('admin.layout.admin')

@section('content')

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/home') }}">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Registar</li>
      </ol>


      <!-- Nome -->

      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
      		            <form class="form-group" role="form" method="POST" action="/admin/registar">
                         {{ csrf_field() }}

                        <!-- Nome -->
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                          <label class="" for="nome">Nome Completo</label>
                          <input style="width:300px" type="text" class="form-control mb-2 mr-sm-2 mb-sm-3" name="nome" placeholder="Nome Completo"  value="{{ old('nome') }}" required autofocus>
                          @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <span class="errormessage">{{ $errors->first('nome') }}</span>
                                    </span>
                                @endif
                              </div>
                             
                          <!-- Email -->
                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Endereço de Email" required >
                            <small id="emailHelp" class="form-text text-muted">A senha do utilizador sera enviada para este e-mail.</small>                       
                        
                        @if ($errors->has('email'))

                                    <span class="has-error">
                                        <span class="errormessage">{{ $errors->first('email') }} </span>
                                    </span>
                                @endif
                            </div>
                          <!-- Data nascimento -->
                          <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                          <label class="" for="date">Data</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                            <input type="date" class="form-control" name="data"  value="{{ old('data') }}"  placeholder="Date" required>
                          </div>
                          @if ($errors->has('data'))
                                    <span class="help-block">
                                        <span class="errormessage">{{ $errors->first('data') }}</span>>
                                    </span>
                                @endif

                            </div>
                          <!--Genero-->      
                      <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                        <label class="" for="genero">Genero</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                          <select class="custom-select mb-2 mr-sm-2 mb-sm-3" name="genero" required>
                            @if (old('genero') != "" && old('genero') == "M")

                                <option value="{{ old('genero') }}" selected>Masculino</option>
                                <option value="F">Feminino</option>

                            @elseif (old('genero') != "" && old('genero') == "F")
                                <option value="{{ old('genero') }}" selected>Feminino</option>
                                <option value="M">Masculino</option>
                            @else
                            
                              <option value="" disabled selected>Genero</option>
                              <option value="M">Masculino</option>
                              <option value="F">Feminino</option>
                            @endif
                          </select>
                        </div>
                          @if ($errors->has('genero'))
                                    <span class="help-block">
                                        <span class="errormessage">{{ $errors->first('genero') }}</span>
                                    </span>
                          @endif
                      </div>

                      <!--Telemovel-->
                      <div class="form-group{{ $errors->has('telemovel') ? ' has-error' : '' }}">
                        <label class="" for="telemovel">Telemovel</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                            <input style="width:250px" type="number" class="form-control"  value="{{ old('telemovel') }}" name="telemovel" placeholder="Telemovel" required>
                          </div>
                          @if ($errors->has('telemovel'))
                                    <span class="help-block">
                                        <span class="errormessage">{{ $errors->first('telemovel') }}</span>>
                                    </span>
                          @endif
                        </div>


                        <!--Localidade-->
                        <div class="form-group{{ $errors->has('localidade') ? ' has-error' : '' }}">
                          <label class="" for="localidade">Localidade</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                            <input style="width:250px" type="text" class="form-control" value="{{ old('localidade') }}" name="localidade" placeholder="Localidade" required>
                          </div>
                          @if ($errors->has('localidade'))
                                    <span class="help-block">
                                        <span class="errormessage">{{ $errors->first('localidade') }}</span>
                                    </span>
                                @endif
                        </div>
                      <!--Profissão-->
                      <div class="form-group{{ $errors->has('profissao') ? ' has-error' : '' }}">
                         <label class="" for="profissao">Profissão</label>
                          <div class="input-group mb-2 mr-sm-2 mb-sm-3">
                            <input style="width:250px" type="text" class="form-control" value="{{ old('profissao') }}" name="profissao" placeholder="Profissão" required>
                          </div>
                          @if ($errors->has('profissao'))
                                    <span  class="help-block">
                                        <span class="errormessage">{{ $errors->first('profissao') }}</span>
                                    </span>
                                @endif
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


    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

@endsection


<!-- 

  <label class="sr-only" for="horario_semanal">Horario semanal</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:300px" type="text" class="form-control" id="horario_semanal" placeholder="Horario semanal">
  </div>


  <label class="sr-only" for="horario_fim_semana">Horario fim de semana</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="horario_fim_semana" placeholder="Horario fim de semana">
  </div>  

   <label class="sr-only" for="situacao_clinica">Situação Clinica</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="situacao_clinica" placeholder="Situação Clinica">
  </div>  

   <label class="sr-only" for="analises_clinicas">Analises Clinicas</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="analises_clinicas" placeholder="Analises Clinica">
  </div>  

  <label class="sr-only" for="transito_intestinal">Transito Intestinal</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="transito_intestinal" placeholder="Transito Intestinal">
  </div>  

  <label class="sr-only" for="queixas_digestivas">Queixas Digestivas</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="queixas_digestivas" placeholder="Queixas Digestivas">
  </div>  

  <label class="sr-only" for="alergias_intolerancia_alimentar">Alergias e Intolereancias Alimentar</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:290px" type="text" class="form-control" id="alergias_intolerancia_alimentar" placeholder="Alergias \ Intolereancias Alimentares">
  </div>  

  <label class="sr-only" for="hidratacao">Hidratação</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:230px" type="text" class="form-control" id="hidratacao" placeholder="Hidratação">
  </div>  

  <label class="sr-only" for="atividade_exercicio_fisico">Atividade e Exercicio Fisico</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:270px" type="text" class="form-control" id="atividade_exercicio_fisico" placeholder="Atividade \ Exercicio Fisico">
  </div>  

  <label class="sr-only" for="frequencia_exercicio">Frequencia Atividade/Exercicio Fisico</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="frequencia_exercicio" placeholder="Frequencia Exercicio Fisico">
  </div>  

  <label class="sr-only" for="alimentacao_fim_semana">Alimentação Fim de Semana</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:350px" type="text" class="form-control" id="alimentacao_fim_semana" placeholder="Alimentação fim de semana">
  </div>  

   <label class="sr-only" for="confecoes_utilizadas">Confeções mais utilizadas</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:250px" type="text" class="form-control" id="confecoes_utilizadas" placeholder="Confeções mais utilizadas">
  </div>

    <label class="sr-only" for="bebidas_alcolicas">Consumo de bebidas alcoólicas</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-3" id="bebidas_alcolicas">
    <option value="" disabled selected>Consumo de bebidas alcoólicas</option>
    <option value="N">Não</option>
    <option value="D">Diariamente</option>
    <option value="S">Semanalmente</option>
    <option value="M">Mensalmente</option>
  </select>

   <label class="sr-only" for="consumo_doces">Frequencia do consumo de doces</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-3" id="consumo_doces">
    <option value="" disabled selected>Frequencia do consumo de doces</option>
    <option value="N">Não</option>
    <option value="D">Diariamente</option>
    <option value="S">Semanalmente</option>
    <option value="M">Mensalmente</option>
  </select>

  <label class="sr-only" for="consumo_salgados_enchidos">Frequencia do consumo de salgados/enchidos</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-3" id="consumo_salgados_enchidos">
    <option value="" disabled selected>Frequencia do consumo de salgados/enchidos</option>
    <option value="N">Não</option>
    <option value="D">Diariamente</option>
    <option value="S">Semanalmente</option>
    <option value="M">Mensalmente</option>
  </select>

  <label class="sr-only" for="alimentos_preferidos">Alimentos preferidos</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:350px" type="text" class="form-control" id="alimentos_preferidos" placeholder="Alimentos Preferidos">
  </div>

  <label class="sr-only" for="alimentos_preteridos">Alimentos preteridos</label>
  <div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <input style="width:350px" type="text" class="form-control" id="alimentos_preteridos" placeholder="Alimentos Preteridos">
  </div>
<div class="input-group mb-2 mr-sm-2 mb-sm-3">
    <label class="sr-only" for="exampleTextarea">Observações</label>
    <textarea style="width:400px" class="form-control" id="observacoes" rows="5" placeholder="Observações"></textarea>
</div>