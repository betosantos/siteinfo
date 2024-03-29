<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146276745-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-146276745-1');
</script>

<meta charset="utf-8">
<title>SiteInfo Tecnologia da Informação</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="Portal de conteúdo Web">
<meta content="" name="SiteInfo">
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
?>

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


  @include('layouts/navbar')

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
            <p>Planejar e prover soluções de tecnologia unindo rigor técnico e agilidade de execução de tarefas de alto desempenho na vanguarda do cenário competitivo.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Sobre</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('noticias') }}">Notícias</a></li>
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

            <!-- <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
          </div> -->

        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Assine o Newsletter</h4>
          <p>Cadastre seu e-mail e receba gratuitamente importantes dicas e notícias na área de Tecnologia da Informação no Brasil e no mundo é só cadastrar seu e-mail agora mesmo.</p>
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

  var empt = document.forms["formcontato"]["name"].value;
  if (empt == "")
  {
    alert("O campo Nome não foi informado!");
    return false;
  }
  var empt = document.forms["formcontato"]["email"].value;
  if (empt == "")
  {
    alert("O campo E-mail não foi informado!");
    return false;
  }
  var empt = document.forms["formcontato"]["assunto"].value;
  if (empt == "")
  {
    alert("O campo Assunto não foi informado!");
    return false;
  }
  var empt = document.forms["formcontato"]["mensagem"].value;
  if (empt == "")
  {
    alert("O campo Mensagem não foi informado!");
    return false;
  }

}
</script>


</body>
</html>
