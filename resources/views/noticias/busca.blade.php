<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>SiteInfo Tecnologia da Informação</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" style="background: rgba(0, 0, 0, 0.9); padding: 20px 0; height: 72px; transition: all 0.5s;">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="{{ route('homepage') }}" class="">SiteInfo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('homepage') }}">Home</a></li>
          <li><a href="{{ url('home') }}#about">Sobre</a></li>
          <li><a href="{{ url('home') }}#services">Serviços</a></li>
          <li class="menu-has-children"><a href="{{ route('noticias') }}">Notícias</a>
            <ul>
              <li><a href="{{ route('dicas') }}">Dicas</a></li>
              <li><a href="{{ route('informatica') }}">Informática</a></li>
            </ul>
          </li>
          <li><a href="{{ url('home') }}#contact">Contato</a></li>
          <li><a href="{{ route('logar') }}">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->


  <header class="section-header" style="margin-top:110px;">
    <h3>Buscar Notícias "{{ $busca }}"</h3>
  </header>


  <!--Noticia -->
  <div class="container">

    <!-- Page Content -->
    <div class="row">
      <!-- Post Content Column -->

      <div class="col-lg-8">
        <div class="row" style="margin-bottom:20px;">
          @foreach($posts as $post)
          <div class="col-lg-6">
            <div class="card" style="margin-top:15px;">
              <!-- Preview Image -->

              <div class="card-body">
                <h5 class="card-title"><b>{{$post->titulo}} </b></h5>
                <p class="card-text"><b>Criado em: </b></p>
                <center><a href="#" class="btn btn-primary">Detalhes</a></center>
              </div>
            </div>
          </div>
          @endforeach
        </div><!-- FIM DA ROW -->
      </div>


      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header text-dark bg-light">Categorias Notícias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <b><a href="{{ route('dicas') }}">Dicas</a></b>
                  </li>

                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <b><a href="{{ route('informatica') }}">Informática</a></b>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header text-dark bg-light">Buscar</h5>
          <div class="card-body">
            <form method="GET" action="{{ url('buscar') }}">
              <div class="input-group">
                @csrf
                <input type="text" class="form-control" placeholder="Buscar por..." name="busca" id="busca">
                <button class="btn btn-secondary" type="submit">Buscar</button>
              </div>
            </form>
          </div>
        </div>

        <!-- Side Widget -->
        <!-- <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div> -->
  </div>
</div>
<!-- /.row -->

</div>





@include('layouts/rodape')



</body>
</html>
