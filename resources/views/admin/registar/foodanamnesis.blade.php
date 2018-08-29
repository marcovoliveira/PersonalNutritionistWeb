@extends('admin.layout.admin')
@php Carbon\Carbon::setLocale('pt') @endphp
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
        <li class="breadcrumb-item active">Registar Anamnese Alimentar</li>
      </ol>


      <!-- Nome -->

      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                      <form class="form-group" role="form" 
                      method="POST" action="/admin/registar/foodanamnesis">
                         {{ csrf_field() }}  

                         <!-- Pequeno Almoço -->
                        <div class="form-group">

                          <label class="" for="pequenoalmoco">Pequeno almoço</label>
                          <input type="time" name="pequenoalmocohora" autofocus>
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="pequenoalmoco"></textarea>
                        </div>  

                          <!-- Meio da Manha -->
                        <div class="form-group">

                          <label class="" for="meiodamanha">Meio da manha</label>
                          <input type="time" name="meiodamanhahora">
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="meiodamanha"></textarea>
                        </div>  

                          <!-- Almoço -->
                        <div class="form-group">

                          <label class="" for="almoco">Almoço</label>
                          <input type="time" name="almocohora">
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="almoco"></textarea>
                        </div>  


                          <!-- Lanche 1 -->
                        <div class="form-group">

                          <label class="" for="lancheum">Lanche 1</label>
                          <input type="time" name="lancheumhora">
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="lancheum"></textarea>
                        </div>  


                          <!-- Lanche 2 -->
                        <div class="form-group">

                          <label class="" for="lanchedois">Lanche 2</label>
                          <input type="time" name="lanchedoishora">
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="lanchedois"></textarea>
                        </div>  


                          <!-- Jantar -->
                        <div class="form-group">

                          <label class="" for="jantar">Jantar</label>
                          <input type="time" name="jantarhora">
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="jantar"></textarea>
                        </div>  

                        <!-- Ceia -->
                        <div class="form-group">

                          <label class="" for="ceia">Ceia</label>
                          <input type="time" name="ceiahora">
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="ceia"></textarea>
                        </div>  

                        <!-- Petiscos -->
                        <div class="form-group">

                          <label class="" for="petiscos">Petiscos</label>
                          <textarea class="form-control mb-2 mr-sm-2 mb-sm-3" 
                          name="petiscos"></textarea>
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


