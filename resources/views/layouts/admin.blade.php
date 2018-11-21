<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NGBet</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-purple-light sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>NG</b>B</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>NGBet</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-green">Online</small>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      <br>

                      <img src="{{asset('img/usuario.png')}}" alt="No disponible" height="100px" width="100px" class="img-thumbnail">

                      <br>

                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i>
                <span>Administracion</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/carga')}}"><i class="fa fa-circle-o"></i> Cargar CSV</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/participante')}}"><i class="fa fa-circle-o"></i> Perfil</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Reportes</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/reporte/reporte1')}}"><i class="fa fa-circle-o"></i> Reporte 1</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/reporte/reporte2')}}"><i class="fa fa-circle-o"></i> Reporte 2</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/reporte/reporte3')}}"><i class="fa fa-circle-o"></i> Reporte 3</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/reporte/reporte4')}}"><i class="fa fa-circle-o"></i> Reporte 4</a></li>
              </ul>
              <ul class="treeview-menu">
                <li><a href="{{url('bet/reporte/reporte5')}}"><i class="fa fa-circle-o"></i> Reporte 5</a></li>
              </ul>
            </li>

            <li>
              <a href="{{url('/bet/seleccion')}}">
                <i class="fa fa-flag"></i> <span>Selecciones</span>
              </a>
            </li>

            <li>
              <a href="{{url('/bet/partido')}}">
                <i class="fa fa-soccer-ball-o"></i> <span>Partidos</span>
              </a>
            </li>

            <li>
              <a href="{{url('/bet/pronostico')}}">
                <i class="fa fa-cubes"></i> <span>Pronosticos</span>
              </a>
            </li>

            <li>
              <a href="{{url('/bet/jugador')}}">
                <i class="fa fa-users"></i> <span>Jugadores</span>
              </a>
            </li>

            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Ayuda</span>
                <small class="label pull-right bg-yellow">NGBet</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Quinielas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
		                          @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.1.0
        </div>
        <strong>Copyright &copy; 2018 <a href="#">NGBet</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
