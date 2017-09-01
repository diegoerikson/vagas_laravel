<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RH Vagas</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.css">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <!--
    BODY TAG OPTIONS:
    =================
    Apply one or more of the following classes to get the
    desired effect
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
    -->
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>R</b>H</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>RH</b>Vagas</span>
                </a>

                <!-- Header Navbar -->
                <!--class="collapse navbar-collapse" id="app-navbar-collapse-->
                <!-- cabecalho -->   
                <!--class="navbar navbar-fixed-top navbar-inverse"-->
                <!--<div class="collapse navbar-collapse" role="navigation">-->
                <!-- Header Navbar: style can be found in header.less -->
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->          
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <!-- Authentication Links -->
                                @if (Auth::guest())			
                            <li><a href="{{ route('login') }}">Entrar</a></li>
                            <li><a href="{{ route('register') }}">Registrar</a></li>
                            @else
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        Alexander Pierce - Web Developer                  
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Curriculo</a>
                                    </div>				
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">    
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>					
                            @endif
                            </li>
                        </ul>     	
                    </div>
                </nav>			
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Menu</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Primeiro Link</span></a></li>
                        <li><a href="#"><i class="fa fa-link"></i> <span>Segundo Link</span></a></li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-link"></i> <span>Dropdown</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Primeiro nivel dropdown</a></li>
                                <li><a href="#">Segundo nivel dropdown</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Main content -->
                <section class="content container-fluid">

                    <!--------------------------
                    | Your Page Content Here |
                    -------------------------->
                    @yield('content')

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">

                <!-- Default to the left -->
                <strong>Copyright &copy; 2017 <a href="#">RH Vagas</a>.</strong> Todos os direitos reservados.
            </footer>


            <div class="control-sidebar-bg"></div>


        </div>
        <!-- ./wrapper -->




        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>


    </body>
</html>
