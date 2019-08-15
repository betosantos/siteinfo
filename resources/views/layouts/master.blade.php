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
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="{{ route('homepage') }}" class="">SiteInfo</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('homepage') }}">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services">Serviços</a></li>
          <li class="menu-has-children"><a href="{{ route('noticias') }}">Notícias</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contato</a></li>
          @if (Auth::check())
          @else
          <li><a href="{{ route('logar') }}">Login</a></li>
          @endif
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
  Content
  ============================-->
  @yield('content')



  <!--==========================
  Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>SiteInfo</h3>
            <p>A Tecnologia da Informação (TI) é uma área ou grupo no qual se desenvolve a grande maioria de atividades e serviços desenvolvidos pela área da computação.
              Ou seja, são todos os proventos de informática desenvolvidos para melhoria de processos, trazendo automatização aos mesmos.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Sobre</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p>
              <!-- A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br> -->
              <strong>Cel. Whtatsapp:</strong> +55 (11) 99610-8766<br>
              <strong>Email:</strong> oliveira.roberto@gmail.com<br>
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
            <h4>Assine o Newsletter</h4>
            <p>Cadastre seu e-mail e tenha acesso a importantes notícias na área de Tecnologia da Informação no Brasil e no mundo, receba tambem dicas importantes na área de tecnologia, tudo isso gratuitamente é só se cadastrar.</p>
            <form action="{{ url('assinar') }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <!-- <input type="email" name="email" placeholder="Seu EMail" style="width:250px"> -->
              <input type="email" class="form-control" name="email" id="email" placeholder="Informe seu E-mail" data-rule="email" data-msg="Entre com um e-mail válido" required/>
              <input type="submit" value="Assinar" onclick="myFunction()">
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
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

  <script>
  function myFunction() {
    alert("Seu E-mail foi cadastrado com Sucesso!!!");
  }

  function EnviarEmail() {
    alert("Sua Mensagem foi enviada com Sucesso, em breve entrarei em Contato. Obrigado pelo contato.");
  }

  </script>


</body>
</html>
