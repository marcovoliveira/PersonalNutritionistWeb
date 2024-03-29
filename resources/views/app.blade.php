<!DOCTYPE html>
<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PersonalNutritionist - Aplicação Movel</title>
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->


    <!-- Custom fonts for this template -->
     <link href="{{ asset('public/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{ asset('public/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
     <link href="{{ asset('public/device-mockups/device-mockups.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
     <link href="{{ asset('public/css/new-age.min.css')}}" rel="stylesheet" type="text/css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Personal Nutriotionist</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="https://play.google.com/store/apps">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Funcionalidades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead"> 
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Esta pronto para começar a usar a aplicação movel de nutrição!</h1>
              <a href="https://play.google.com/store/apps" class="btn btn-outline btn-xl js-scroll-trigger"><strong>Download Aplicação</a></strong>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup galaxy_s5 portrait white">
                <div class="device">
                  <div class="screen">
                    <img src="images/image1.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Descobre todas as funcionalidades aqui!</h2>
            <p>Funcionalidades avançadas que permitem o acompanhamento nutricional ao segundo!</p>
            <div class="badges">
              <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Funcionalidades e Extras</h2>
          <p class="text-muted">Todos os seus passos acompanhados de perto.</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup galaxy_s3 portrait white">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img src="images/image2.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-screen-smartphone text-primary"></i>
                    <h3>Compatibilidade</h3>
                    <p class="text-muted">Com todos sistemas android apartir da versão 4.0</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-bubbles text-primary"></i>
                    <h3>Chat</h3>
                    <p class="text-muted">Envie mensagens ao seu nutricionista em tempo real!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-book-open text-primary"></i>
                    <h3>Planos Alimentares</h3>
                    <p class="text-muted">Consulte o seu plano alimentar a qualquer alltura do dia no seu smartphone!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-graph text-primary"></i>
                    <h3>Evolução</h3>
                    <p class="text-muted">Consulte a sua evolução em tempo real, consulta apos consulta!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <p>&copy; 2018 PersonalNutritionist. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacidade</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Termos</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Perguntas Frequentes</a>
          </li>
        </ul>
      </div>
    </footer>
   <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('public/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{ asset('public/js/new-age.min.js')}}"></script>
  </body>

</html>
