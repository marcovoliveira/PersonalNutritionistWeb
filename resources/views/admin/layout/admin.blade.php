
@inject('users3', 'App\View')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Personal Nutritionist - Diana Ferreira</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel  ="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{ asset('datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin.css')}}" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('admin/home') }}">Personal Nutritionist - Diana Ferreira</a>

    <div align="center">

    </div>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link" href="{{ url('admin/home') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Pagina Inicial</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registar Utente">
                <a class="nav-link" href="{{ url('admin/registar') }}">
                    <i class="fa fa-fw fa-user-plus"></i>
                    <span class="nav-link-text">Registar Paciente</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Planos Alimentares">
                <a class="nav-link" href="{{ url('admin/foodplans') }}">
                    <i class="fa fa-fw fa-cutlery"></i>
                    <span class="nav-link-text">Planos Alimentares</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Equivalentes">
                <a class="nav-link"  href="{{ url('admin/equivalentes') }}" >
                    <i class="fa fa-fw fa-exchange"></i>
                    <span class="nav-link-text">Equivalentes</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Chat">
                <a class="nav-link" href="{{ url('admin/chat') }}">
                    <i class="fa fa-fw fa-comments"></i>
                    <span class="nav-link-text">Chat</span>
                </a>

            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Sites Imporatantes</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Noticias de Nutrição</a>
                    </li>
                    <li>
                        <a href="http://www.alimentacaosaudavel.dgs.pt/">Alimentação Saudavel</a>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Institucionais</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="http://www.ordemdosnutricionistas.pt/">Ordem dos nutricionistas</a>
                            </li>
                            <li>
                                <a href="www.apn.org.pt">Associação Portuguesa de Nutricão</a>
                            </li>
                            <li>
                                <a href="https://dre.pt/web/guest/pesquisa/-/search/70179155/details/normal?l=1">Legislação em Vigor</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="/app">
                    <i class="fa fa-fw fa-mobile"></i>
                    <span class="nav-link-text">Aplicação movel</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Mensagens
              <!--<span class="badge badge-pill badge-primary"> 12 novas </span> -->
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">Novas Mensagens:</h6>


                    @foreach($users3->viewUsers() as $u)
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('admin/chat/'.$u->id) }}">
                        <strong>{{$u->name}}</strong>
                        <span class="small float-right text-muted">
                            {{ Carbon\Carbon::parse($users3->messageUsers()->where('user_id', $u->id)->first()->updated_at)->diffForHumans() }}
                        </span>
                        <div class="dropdown-message small">{{ $users3->messageUsers()->where('user_id', $u->id)->first()->message}}</div>
                    </a>

                    @endforeach

                    <a class="dropdown-item small" href="{{ url('admin/chat') }}">Ver todas as mensages</a>
                </div>
            </li>


            <!-- Criar um procurar ??? -->
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2" id="search_text" method="get" action="http://www.google.com/search">
                    <div class="input-group">
                        <input class="form-control" name="q" type="text" placeholder="Procurar...">
                        <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                    </div>
                </form>
                <!-- Cortar por aqui -->



            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>

            <!-- Call javascript to yeld -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@yield('content')

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © PersonalNutritionist 2018</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Sair Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja sair ? </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleciona "Sair" abaixo para terminar sessão.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ url('admin/logout') }}">Sair</a>
                </div>
            </div>
        </div>
    </div>


<!-- O meu javascript -->
<script src="{{ asset('js/modal/flash.js')}}"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('jquery/jquery.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('jquery-easing/jquery.easing.min.js')}}"></script>

                        <!-- Js para graficos -->
<!-- <script src="{{ asset('chart.js/Chart.min.js')}}"></script> -->
<!-- <script src="{{ asset('js/sb-admin-charts.min.js')}}"></script> -->

<!-- Page level plugin JavaScript-->
    <script src="{{ asset('datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('datatables/dataTables.bootstrap4.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin.js')}}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{ asset('js/sb-admin-datatables.min.js')}}"></script>

</div>
</body>

</html>