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
      		            <form class="form-group" role="form" method="POST" action="{{  url('/admin/registar') }}">
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
                            <small id="emailHelp" class="form-text text-muted">O link para criação de senha ira ser enviada para este e-mail.</small>                       
                        
                        @if ($errors->has('email'))

                                    <span class="has-error">
                                        <span class="errormessage">{{ $errors->first('email') }} </span>
                                    </span>
                                @endif
                            </div>
                          <!-- Data nascimento -->
                          <div class="form-group{{ $errors->has('data') ? ' has-error' : '' }}">
                          <label class="" for="date">Data de nascimento</label>
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


