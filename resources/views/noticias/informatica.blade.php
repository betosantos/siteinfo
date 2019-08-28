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
              <li><a href="">Informática</a></li>
            </ul>
          </li>
          <li><a href="{{ url('home') }}#contact">Contato</a></li>
          <li><a href="{{ route('logar') }}">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--Noticias -->
  <div class="container" style="margin-top:110px; margin-bottom:40px;">


    <!-- Call to Action Well -->
    <!-- <div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
    <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
  </div>
</div> -->
<header class="section-header">
  <h3>Notícias Categoria {{ $categoria->nome }}</h3>
</header>

<!-- Heading Row -->
<!-- <div class="row align-items-center my-5">
<div class="col-lg-7">
<img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
</div>
<div class="col-lg-5">
<h1 class="font-weight-light">Business Name or Tagline</h1>
<p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
<a class="btn btn-primary" href="#">Call to Action!</a>
</div>
</div> -->
<!-- /.row -->


<!-- Page Content -->
<div class="row">
  <!-- Post Content Column -->
  <div class="col-lg-8">
    <div class="row" style="margin-bottom:20px;">

      <div class="col-lg-6">
        <div class="card" style="margin-top:15px;">
          <!-- Preview Image -->

          <div class="card-body">
            <h5 class="card-title"><b></b></h5>
            <p class="card-text"><b>Criado em:  </b></p>
            <center><a href="#" class="btn btn-primary">Detalhes</a></center>
          </div>
        </div>
      </div>



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
                <a href="{{ route('dicas') }}">Dicas</a>
              </li>

            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="{{ route('informatica') }}">Informática</a>
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
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar por...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Buscar</button>
          </span>
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
<!-- /.container -->



@include('layouts/rodape')



</body>
</html>
