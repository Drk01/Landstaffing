  <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }} </title>

  <!-- Bootstrap -->
  <link href="{{ asset('Panel/assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('Panel/assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{ asset('Panel/assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{ asset('Panel/assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{ asset('Panel/assets/build/css/custom.min.css') }}" rel="stylesheet">
  <!-- Datatable -->
  <link href="{{ asset('Panel/assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Panel/assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Panel/assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Panel/assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Panel/assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('index') }}" class="site_title"><img width="50px" src="{{ asset('img/icon.png') }}" alt="LS"> <span>{{ config('app.name') }}</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="{{ asset('/storage/'.auth()->user()->foto) }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido,</span>
              <h2>{{ auth()->user()->name }}</h2>
            </div>
            <div class="clearfix"></div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio </a></li>

                @if (auth()->user()->hasFulfilledData() && auth()->user()->hasRole('Empleador'))
                <li><a><i class="fa fa-edit"></i> Órdenes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="{{ route('orders.create') }}">Nueva orden</a></li>
                    <li><a href="{{ route('orders.index') }}">Listado de ordenes</a></li>
                    <li><a href="form_validation.html">Historial de ordenes</a></li>
                  </ul>
                </li>
                @endif
                {{-- <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                <li><a href="form.html">General Form</a></li>
                <li><a href="form_advanced.html">Advanced Components</a></li>
                <li><a href="form_validation.html">Form Validation</a></li>
                <li><a href="form_wizards.html">Form Wizard</a></li>
                <li><a href="form_upload.html">Form Upload</a></li>
                <li><a href="form_buttons.html">Form Buttons</a></li>
              </ul>
            </li> --}}
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
              <img src="{{ asset('/storage/'.auth()->user()->foto) }}" alt="">{{ auth()->user()->name }}
              <span class=" fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
              <li><a href="javascript:;">Perfíl</a></li>
              <li>
                <a href="{{ route('account') }}">Mis datos</a>
              </li>
              </li>
              <li><a href="javascript:;"> Configuración </a></li>
              <li><a href="javascript:;">Ayuda</a></li>
              <li>
                <a onclick="document.getElementById('close_session').submit();" > <i class="fa fa-sign-out pull-right"></i> Cerrar Sesión </a>
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

            <div class="">
                    <div class="page-title">
                            <div class="title_left">
                                    <h3>@yield('title-left')</h3>
                            </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>@yield('x-title')</h2>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
      @yield('content')
    </div>
</div>
</div>
</div>
    </div>
  </div>
  <!-- footer content -->
  <footer>
    <div class="pull-right">
      {{ config('app.name') }} - <a href="{{ route('index') }}">{{ config('app.name') }}</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{ asset('Panel/assets/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('Panel/assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('Panel/assets/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('Panel/assets/vendors/nprogress/nprogress.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('Panel/assets/vendors/iCheck/icheck.min.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('Panel/assets/build/js/custom.min.js') }}"></script>
<!-- Datatable -->
<script src="Panel/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="Panel/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="Panel/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="Panel/assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="Panel/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="Panel/assets/vendors/pdfmake/build/vfs_fonts.js"></script>

<form id="close_session" action="{{ route('logout') }}" method="post">
    {{ csrf_field() }}
  </form>
</body>
</html>
