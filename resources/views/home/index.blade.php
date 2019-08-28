@extends('layouts.master')

@section('content')

<!--==========================
Intro Section
============================-->
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro-carousel/janela.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Consultoria Digital</h2>
              <div class="container">
                <h5 style="color:white;">Mais de 11 anos atuando na área de tecnologia da informação. Desenhar estratégias para sua empresa, compreender e se posicionar junto ao mercado de tecnologia com base nas transformações digitais.</h5>
              </div>
              <a href="#services" class="btn-get-started scrollto">Conheça</a>
            </div>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-background"><img src="img/intro-carousel/work.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Desenvolvimento de Sites</h2>
              <div class="container">
                <h5 style="color:white;">Desenvolvimento de Sites que se adaptam a qualquer dispositivo, integração com redes sociais, otimização para mecanismos de busca, administração e gerenciamento de conteúdo e muito mais.  </h5>
              </div>
              <a href="#services" class="btn-get-started scrollto">Conheça</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Sistemas Web</h2>
              <div class="container">
                <h5 style="color:white;">Criação e Desenvolvimento de Intranet local ou em nuvem, áreas restritas com segurança utilizando login e senha de acesso, adequando sempre as necessidades pontuais de cada empresa.</h5>
              </div>
              <a href="#services" class="btn-get-started scrollto">Conheça</a>
            </div>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section><!-- #intro -->

<main id="main">
  <!--==========================
  Featured Services Section
  ============================-->
  <section id="featured-services">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 box box-bg">
          <i class="ion-ios-bookmarks-outline"></i>
          <h4 class="title"><a href="">Foco</a></h4>
          <p class="description">Foco em resultados, definir prioridades, estabelecer metas e planejar tarefas, cumprir esforços para alcançar e superar metas.</p>
        </div>
        <div class="col-lg-4 box box-bg">
          <i class="ion-ios-stopwatch-outline"></i>
          <h4 class="title"><a href="">Organização</a></h4>
          <p class="description">Organização é a forma como se dispõe um sistema para atingir os resultados pretendidos. Executar funções de modo controlado e coordenado com a missão de atingir um objetivo em comum com eficácia. </p>
        </div>
        <div class="col-lg-4 box box-bg">
          <i class="ion-ios-heart-outline"></i>
          <h4 class="title"><a href="">Ética</a></h4>
          <p class="description">A ética profissional é o conjunto de valores, normas e condutas que conduzem e conscientizam as atitudes e o comportamento de um profissional na organização e junto aos seus clientes.</p>
        </div>
      </div>
    </div>
  </section><!-- #featured-services -->

  <!--==========================
  About Us Section
  ============================-->
  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>Sobre</h3>
        <p>
          O novo papel da Tecnologia da Informação dentro das empresas vem mudando nos últimos anos. Deixando de ser mera área de suporte, agora ela passou a ser estratégica e vital aos negócios. É necessário compreender como a Tecnologia da Informação pode ser o melhor caminho para deixar os negócios da Companhia mais estáveis, organizados e potentes para atuar com sucesso no competitivo sistema empresarial.
        </p>
      </header>

      <div class="row about-cols">
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="about-col">
            <div class="img">
              <img src="img/about-plan.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-list-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Valores</a></h2>
            <p>
              O princípio é prestar um atendimento altamente profissional sempre direcionado ao foco do cliente. Se destacando no mercado e obtendo o reconhecimento de seus clientes e parceiros.
            </p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp">
          <div class="about-col">
            <div class="img">
              <img src="img/about-mission.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Missão</a></h2>
            <p>
              Planejar e prover soluções de tecnologia unindo rigor técnico e agilidade de execução de tarefas de alto desempenho na vanguarda do cenário competitivo.
            </p>
          </div>
        </div>

        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="about-col">
            <div class="img">
              <img src="img/about-vision.jpg" alt="" class="img-fluid">
              <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            </div>
            <h2 class="title"><a href="#">Visão</a></h2>
            <p>
              Tornar-se referência de atuação na área de tecologia da informação, através da excelência em serviços, contribuindo com os resultados dos clientes, responsabilidade e o bem-estar das pessoas.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #about -->

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container">

      <header class="section-header wow fadeInUp">
        <h3>Serviços</h3>
        <p>Vamos transformar idéias em valores.</p>
      </header>

      <div class="row">

        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
          <h4 class="title"><a href="">Consultoria Especializada</a></h4>
          <p class="description">Mais de 10 anos de experiência atuando na área de tecnologia da informação</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
          <h4 class="title"><a href="">Sistemas Web</a></h4>
          <p class="description">Especialização no desenvolvimento de Sistemas Web. Desenvolvimento do seu sistema personalizado de acordo com a sua necessidade.</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-paper-outline"></i></div>
          <h4 class="title"><a href="">Reformulação de Sites</a></h4>
          <p class="description">Atualize seu site com as novas tendências da web, sites responsivos, sites indexados no Google, dinâmicos com banco de dados</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
          <h4 class="title"><a href="">Email Marketing</a></h4>
          <p class="description">Soluções para criação do seu Email Marketing e divulgação, vários planos de envios e geração do seu email para sua empresa ou produto</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
          <h4 class="title"><a href="">Lojas Virtuais</a></h4>
          <p class="description">Solução completa e profissional de Lojas Virtuais, com varias opções de pagamento e frete com estoque, suporte completo</p>
        </div>
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="icon"><i class="ion-ios-people-outline"></i></div>
          <h4 class="title"><a href="">Hospedagem de Sites</a></h4>
          <p class="description">A hospedagem é o servidor onde ficam os arquivos do seu site e e-mails, com equipamentos de ponta com redundância de energia, conexão e proteção</p>
        </div>

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
  Call To Action Section
  ============================-->
  <section id="call-to-action" class="wow fadeIn">
    <div class="container text-center">
      <h3>Entre em Contato agora mesmo pelo Whatsapp</h3>
      <p> Entre em contato para tirar suas idéias do papel ou aumentar seus resultados.</p>
      <a class="cta-btn" href="http://api.whatsapp.com/send?1=pt_BR&phone=5511996108766" target="_blank">
        <img src="{{ asset('img/whatsapp.png') }}" width="50" height="50"/>
        Ligar
      </a>
    </div>
  </section><!-- #call-to-action -->


  <!--==========================
  Portfolio Section
  ============================-->
  <section id="portfolio"  class="section-bg" >
    <div class="container">

      <header class="section-header">
        <h3 class="section-title">Blog de Notícias</h3>
      </header>

      <div class="row">
        <!-- <div class="col-lg-12">
      </div> -->
    </div>

    <div class="col-lg-12">
      <!-- Heading Row -->
      @foreach($posts as $post)
      <div class="row align-items-center my-5">
        <div class="col-lg-4">
          @if ($post['imagem'])
          <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('uploads/posts/'.$post->imagem) }}" class="card-img-top" alt="card">
          @else
          <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('uploads/posts/padrao.jpeg') }}" width="340" height="203">
          @endif
          <!-- <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt=""> -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-8">
          <h3>{{ strtoupper(str_limit($post->titulo, 65)) }}</h3>
          <p>{{ str_limit($post->descricao, 260) }}</p>
          <p class="card-text"> Categoria: {{ $post->categoria->nome }}<br>
          <b>Criado em: {{ date('d/m/Y', strtotime($post->created_at)) }}</b></p>
          <a class="btn btn-primary pull-right" href="#">Detalhes</a>
        </div>
        <!-- /.col-md-4 -->
      </div>
      <hr>
      @endforeach

      <!-- /.row -->

      <br/>
      <center>
        <a href="{{ route('noticias') }}">Ver todas as Notícias</a>
      </center>
    </div>

  </div>
</section><!-- #portfolio -->

<!--==========================
Clients Section
============================-->
<section id="clients" class="wow fadeInUp">
  <div class="container">

    <header class="section-header">
      <h3>Parceiros </h3>
    </header>

    <div class="owl-carousel clients-carousel">
      <img src="img/clients/linux.jpg" alt="">
      <img src="img/clients/ubuntu.png" alt="">
      <img src="img/clients/php.png" alt="">
      <img src="img/clients/wordpress.png" alt="">
      <img src="img/clients/mysql.png" alt="">
      <img src="img/clients/laravel.png" alt="">
      <img src="img/clients/google.jpg" alt="">
    </div>

  </div>
</section><!-- #clients -->


<!--==========================
Contact Section
============================-->
<section id="contact" class="section-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h3>Contato</h3>
      <p>Entre em contato, envie suas dúvidas e conheça soluções em tecologia da informação. </p>
    </div>

    <div class="row contact-info">

      <!-- <div class="col-md-4">
      <div class="contact-address">
      <i class="ion-ios-location-outline"></i>
      <h3>Address</h3>
      <address>A108 Adam Street, NY 535022, USA</address>
    </div>
  </div> -->

  <div class="col-md-6">
    <div class="contact-phone">
      <i class="ion-ios-telephone-outline"></i>
      <h3>Celular (Whatsapp)</h3>
      <p><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511996108766">(11) 99610-8766</a></p>
    </div>
  </div>

  <div class="col-md-6">
    <div class="contact-email">
      <i class="ion-ios-email-outline"></i>
      <h3>Email</h3>
      <p><a href="mailto:oliveira.roberto@gmail.com">oliveira.roberto@gmail.com</a></p>
    </div>
  </div>

</div>

<div class="form">
  <div id="sendmessage">Your message has been sent. Thank you!</div>
  <div id="errormessage"></div>
  <form action="{{ url('send') }}" method="post">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome Completo" data-rule="minlen:4" data-msg="Mínimo 4 caracteres no campo nome" required/>
        <div class="validation"></div>
      </div>
      <div class="form-group col-md-6">
        <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail de contato" data-rule="email" data-msg="Entre com um e-mail válido" required/>
        <div class="validation"></div>
      </div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Mínimo de 8 caracteres no assunto" required/>
      <div class="validation"></div>
    </div>
    <div class="form-group">
      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mensagem" placeholder="Mensagem" required></textarea>
      <div class="validation"></div>
    </div>
    <div class="text-center"><button type="submit" onclick="EnviarEmail()">Enviar Mensagem</button></div>
  </form>
</div>

</div>
</section><!-- #contact -->

</main>


@endsection
