@extends('admin.layout.admin')

@section('content')

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('admin/home') }}">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Registar Informação Pessoal</li>
      </ol>


      <!-- Nome -->

      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                      @include('partials.anamnese')
      		            <form class="form-group" role="form" method="POST" action="/admin/registarpersonalinformation">
                         {{ csrf_field() }}

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