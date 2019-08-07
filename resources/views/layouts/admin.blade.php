<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>Painel de Administração </title>

  <!-- Bootstrap -->
  <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> -->

  <!-- NProgress -->
  <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="{{ asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
  <!-- JQVMap -->
  <link href="{{ asset('admin/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Administração</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{ asset('admin/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bem-Vindo,</span>
              <h2>{{ Auth::user()->name }}</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Posts</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Posts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{ route('posts.list') }}">Lista Posts</a></li>
                    <li><a href="{{ route('posts.form') }}">Cadastrar Post</a></li>
                  </ul>
                </li>
              </ul>
            </div>

            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="e_commerce.html">E-commerce</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="project_detail.html">Project Detail</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="profile.html">Profile</a></li>
                  </ul>
                </li>

                <!-- <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                <li><a href="#level1_1">Level One</a>
                <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                <li class="sub_menu"><a href="level2.html">Level Two</a>
              </li>
              <li><a href="#level2_1">Level Two</a>
            </li>
            <li><a href="#level2_2">Level Two</a>
          </li>
        </ul>
      </li>
      <li><a href="#level1_2">Level One</a>
    </li>
  </ul>
</li> -->
<!-- <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li> -->
</ul>
</div>

</div>
<!-- /sidebar menu -->

</div>
</div>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

            @if (Auth::check())
              <img src="{{ asset('uploads/users/'.Auth::user()->imagem) }}" width="40" height="40">
              {{ Auth::user()->name }}
            @else
              <img src="{{ asset('padrao/padrao.jpeg') }}" width="80" height="80">
            @endif



            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="#"><i class="fa fa-cog pull-right"></i> Configurações </a></li>
            <!-- <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
              </a>
            </li> -->
            <li><a href="javascript:;">Ajuda</a></li>
            <li><a href="{{ url('sair') }}"><i class="fa fa-sign-out pull-right"></i> Sair </a></li>
          </ul>
        </li>

        <li role="presentation" class="dropdown">
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <div class="text-center">
                <a>
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->



<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <!-- <div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
  <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
  <div class="count">2500</div>
  <span class="count_bottom"><i class="green">4% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
<div class="count">123.50</div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Males</span>
<div class="count green">2,500</div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Females</span>
<div class="count">4,567</div>
<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
<div class="count">2,315</div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
<span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
<div class="count">7,325</div>
<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
</div>
</div> -->
<!-- /top tiles -->

<div class="row">
  <div class="col-md-12 col-sm-4 col-xs-12"><!-- Painel em branco tamanho 12 -->
    @yield('content')
  </div>
</div>
</div>
<!-- /page content -->


<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('admin/vendors/nprogress/nprogress.js') }}"></script>
<!-- Chart.js -->
<script src="{{ asset('admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>
<!-- gauge.js -->
<script src="{{ asset('admin/vendors/gauge.js/dist/gauge.min.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('admin/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Skycons -->
<script src="{{ asset('admin/vendors/skycons/skycons.js') }}"></script>
<!-- Flot -->
<script src="{{ asset('admin/vendors/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/vendors/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('admin/vendors/Flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('admin/vendors/Flot/jquery.flot.stack.js') }}"></script>
<script src="{{ asset('admin/vendors/Flot/jquery.flot.resize.js') }}"></script>
<!-- Flot plugins -->
<script src="{{ asset('admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
<script src="{{ asset('admin/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
<script src="{{ asset('admin/vendors/flot.curvedlines/curvedLines.js') }}"></script>
<!-- DateJS -->
<script src="{{ asset('admin/vendors/DateJS/build/date.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('admin/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
<script src="{{ asset('admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
<script src="{{ asset('admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('admin/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('admin/build/js/custom.min.js') }}"></script>

</body>
</html>
