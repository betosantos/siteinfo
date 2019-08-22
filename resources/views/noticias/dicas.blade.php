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


<!-- Content Row -->
<div class="row">
  @foreach($dicas as $dica)
  <div class="col-md-4 mb-5">
    <div class="card h-100">
      <div class="card-body">
        <!-- Preview Image -->
        @if ($dica['imagem'])
        <img class="img-fluid rounded" src="{{ asset('uploads/posts/'.$dica->imagem) }}" class="card-img-top" alt="card">
        @else
        <img class="img-fluid rounded" src="{{ asset('uploads/posts/padrao.jpeg') }}" width="286" height="178">
        @endif
        <hr>

        <h2 class="card-title">{{ str_limit($dica->titulo,30) }}</h2>
        <p class="card-text">{{ str_limit($dica->descricao,90) }}</p>
      </div>
      <center>
        <div class="card-footer">
          <a href="{{ url('noticia/detalhe/categoria/'.$dica->id) }}" class="btn btn-primary btn-sm">Detalhes</a>
        </div>
      </center>
    </div>
  </div>
  @endforeach

</div>
<!-- /.row -->

</div>
<!-- /.container -->



@include('layouts/rodape')



</body>
</html>
