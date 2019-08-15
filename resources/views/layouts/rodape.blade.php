
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
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}#about">Sobre</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}#services">Serviços</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('noticias') }}">Notícias</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{ url('home') }}#contact">Contato</a></li>
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
