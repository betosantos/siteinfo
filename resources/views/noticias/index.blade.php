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

  <!--Noticias -->
  <div class="container" style="margin-top:110px; margin-bottom:40px;">


    <!-- Call to Action Well -->
    <!-- <div class="card text-white bg-secondary my-5 py-4 text-center">
    <div class="card-body">
    <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
  </div>
</div> -->
<header class="section-header">
  <h3>Notícias</h3>
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
              @if ($post['imagem'])
                <img class="img-fluid rounded" src="{{ asset('uploads/posts/'.$post->imagem) }}" class="card-img-top" alt="card">
                @else
                <img src="{{ asset('uploads/posts/padrao.jpeg') }}" width="298" height="198">
              @endif
              <h5 class="card-title"><b> {{$post->titulo}}</b></h5>
              <p class="card-text"><b>Criado em: {{ date('d/m/Y', strtotime($post->created_at)) }} </b></p>
              <center><a href="{{ url('noticia/detalhe/'.$post->id) }}" class="btn btn-primary">Detalhes</a></center>
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




</div>
<!-- /.container -->



<!--==========================
Footer
============================-->
<!-- <footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>SiteInfo</h3>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}">Home</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}#about">Sobre</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}#services">Serviços</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('noticias') }}">Notícias</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}#contact">Contato</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit"  value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; <strong>SiteInfo</strong>. Todos os direitos reservados.
    </div>
    <div class="credits">
      Desenvolvido por: <a href="http://www.siteinfo.com.br/">José Roberto Oliveira</a>
    </div>
  </div>
</footer> -->

@include('layouts/rodape')



</body>
</html>
