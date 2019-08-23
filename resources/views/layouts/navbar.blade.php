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
            <li><a href="{{ route('dicas') }}">Dicas</a></li>
            <li><a href="{{ route('informatica') }}">Informática</a></li>
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
