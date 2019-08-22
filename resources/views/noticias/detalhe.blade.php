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
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="{{ url('home') }}#contact">Contato</a></li>
          <li><a href="{{ route('logar') }}">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--Noticia -->
  <div class="container">
    <header class="section-header">
      <h3>Notícia</h3>
    </header>


    <!-- Page Content -->
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
        <!-- Title -->
        <h1 class="mt-4">{{ $post->titulo }}</h1>
        <!-- Author -->
        <!-- <p class="lead">
        by
        <a href="#">Start Bootstrap</a>
      </p> -->

      <!-- Date/Time -->
      <p><b>Criado em:</b> {{ $post->created_at }}</p>
      <hr>

      <!-- Preview Image -->
      @if ($post['imagem'])
      <img class="img-fluid rounded" src="{{ asset('uploads/posts/'.$post->imagem) }}" class="card-img-top" alt="card">
      @else
      <img class="img-fluid rounded" src="{{ asset('uploads/posts/padrao.jpeg') }}" width="286" height="178">
      @endif
      <hr>


      <blockquote class="blockquote">
        <p class="mb-0">{{ $post->descricao }}</p>
      </blockquote>
      <hr>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Buscar</h5>
        <div class="card-body">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar por...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button">Buscar</button>
            </span>
          </div>
        </div>
      </div>

      <!-- Categories Widget -->
      <div class="card my-4">
        <h5 class="card-header">Categorias Notícias</h5>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Dicas</a>
                </li>

              </ul>
            </div>
            <div class="col-lg-6">
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#">Informática</a>
                </li>

              </ul>
            </div>
          </div>
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
