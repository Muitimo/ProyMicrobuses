<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href=" {{ asset('img/minibus.png ') }}">
        <title>Control de microbuses </title>

        <!-- Bootstrap -->
        <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('iCheck/skins/flat/green.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('nprogress/nprogress.css') }}" rel="stylesheet">
        
        <!-- bootstrap-progressbar -->
        <link href="{{ asset('bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="{{ asset('bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <!-- JQVMap -->
        <link href="{{ asset('jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">        
    </head>

    <body class="nav-md">

        <div class="container body">
          
              <div class="main_container">
                <div class="col-md-3 left_col">
                  <div class="left_col scroll-view">

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                      <div class="profile_pic">
                        <img src="img/img.jpg" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>  {{ Auth::user()->name }}  </h2>
                      </div>
                    </div>    <!-- /menu profile quick info -->
                    


                    <br />


                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                      <div class="menu_section">
                        <h3>Funcionalidades</h3>
                        <ul class="nav side-menu">

                          <li><a><i class="fa fa-user"></i> Personal <span class="fa fa-chevron-down"> </span></a>
                            <ul class="nav child_menu">
                              <li><a href="reg_Empleado">Registrar Persona</a></li>
                              <li><a href="listaEmpleados">Personal administrativo</a></li>
                              <li><a href="listaEmpleados">Solo Choferes</a></li>
                              <li><a href="listaCargo">Cargos</a></li>
                            </ul>
                          </li>                      

                          <li><a><i class="fa fa-car"></i> Busese <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="reg_Bus">Registrar Bus</a></li>
                              <li><a href="listaBuses">Buses Registrados</a></li>
                              <li><a href="listaBuses">Bus - Chofer</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="general_elements.html">General Elements</a></li>
                              <li><a href="media_gallery.html">Media Gallery</a></li>
                              <li><a href="typography.html">Typography</a></li>
                              <li><a href="icons.html">Icons</a></li>
                              <li><a href="glyphicons.html">Glyphicons</a></li>
                              <li><a href="widgets.html">Widgets</a></li>
                              <li><a href="invoice.html">Invoice</a></li>
                              <li><a href="inbox.html">Inbox</a></li>
                              <li><a href="calendar.html">Calendar</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="tables.html">Tables</a></li>
                              <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="chartjs.html">Chart JS</a></li>
                              <li><a href="chartjs2.html">Chart JS2</a></li>
                              <li><a href="morisjs.html">Moris JS</a></li>
                              <li><a href="echarts.html">ECharts</a></li>
                              <li><a href="other_charts.html">Other Charts</a></li>
                            </ul>
                          </li>

                          <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                              <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                              <li><a href="fixed_footer.html">Fixed Footer</a></li>
                            </ul>
                          </li>

                        </ul>
                      </div>
                      
                    </div>  <!-- /sidebar menu -->
                    

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                      <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      </a>
                      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                      </a>
                    </div>  <!-- /menu footer buttons -->
                    
                  </div>
                </div>



                <!-- top navigation -->
                <div class="top_nav">
                  <div class="nav_menu">
                    <nav>

                      <!-- Left Side Of Navbar -->
                      <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>                        
                      </div>
                      
                      <!-- Right Side Of Navbar -->
                      <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li class="nav-item">
                                 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="">
                              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="img/img.jpg" alt=""> {{ Auth::user()->name }}
                                <span class=" fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu dropdown-usermenu pull-right">

                                <li><a href="javascript:;"> Profile</a></li>
                                <li><a href="javascript:;"> <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                  </a>
                                </li>

                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="{{ route('logout') }}" class="dropdown-item"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                                </li>
                              </ul>
                            </li>

                            <li role="presentation" class="dropdown">
                              <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">2</span>
                              </a>
                              <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">

                                <li>
                                  <a>
                                    <span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                      <span> {{ Auth::user()->name }} </span>
                                      <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                      Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                                  </a>
                                </li>

                                <li>
                                  <a>
                                    <span class="image"><img src="img/img.jpg" alt="Profile Image" /></span>
                                    <span>
                                      <span> {{ Auth::user()->name }} </span>
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

                        @endguest
                      </ul>
                    </nav>
                  </div>
                </div>  <!-- /top navigation -->
            </div>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('fastclick/lib/fastclick.js') }}"></script>
        <!-- NProgress -->
        <script src="{{ asset('nprogress/nprogress.js') }}"></script>
        <!-- Chart.js -->
        <script src="{{ asset('Chart.js/dist/Chart.min.js') }}"></script>
        <!-- gauge.js -->
        <script src="{{ asset('gauge.js/dist/gauge.min.js') }}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{ asset('bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('iCheck/icheck.min.js') }}"></script>
        <!-- Skycons -->
        <script src="{{ asset('skycons/skycons.js') }}"></script>
        <!-- Flot -->
        <script src="{{ asset('Flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('Flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('Flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('Flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('Flot/jquery.flot.resize.js') }}"></script>
        <!-- Flot plugins -->
        <script src="{{ asset('flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('flot-spline/js/jquery.flot.spline.min.js') }}"></script>
        <script src="{{ asset('flot.curvedlines/curvedLines.js') }}"></script>
        <!-- DateJS -->
        <script src="{{ asset('DateJS/build/date.js') }}"></script>
        <!-- JQVMap -->
        <script src="{{ asset('jqvmap/dist/jquery.vmap.js') }}"></script>
        <script src="{{ asset('jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{ asset('moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <!-- validator -->
        <script src="validator/validator.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset('build/js/custom.min.js') }}"></script>
    </body>
</html>
