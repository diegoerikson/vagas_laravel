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
        <link rel="stylesheet" href="dist/css/skins/skin-green.css">


        <!-- daterange picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="plugins/iCheck/all.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">

        <style>
            hr{
                border-top: 1px solid #ccc;
            }

        </style>


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
    <body class="hold-transition skin-green sidebar-mini">
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

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    @if (Auth::guest())	
                    @else
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    @endif
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
                                        {{ Auth::user()->name }} - Colocar a profissao aqui
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

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 3 -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>


        <!-- Select2 -->
        <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
        <!-- InputMask -->
        <script src="plugins/input-mask/jquery.inputmask.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- date-range-picker -->
        <script src="bower_components/moment/min/moment.min.js"></script>
        <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap datepicker -->
        <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <!-- bootstrap color picker -->
        <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- bootstrap time picker -->
        <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <!-- SlimScroll -->
        <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- iCheck 1.0.1 -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <!-- FastClick -->
        <script src="bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>


        <script>
                                            $(function () {
                                                //Initialize Select2 Elements
                                                $('.select2').select2()

                                                //Datemask dd/mm/yyyy
                                                $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
                                                //Datemask2 mm/dd/yyyy
                                                $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
                                                //Money Euro
                                                $('[data-mask]').inputmask()

                                                //Date range picker
                                                $('#reservation').daterangepicker()
                                                //Date range picker with time picker
                                                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
                                                //Date range as a button
                                                $('#daterange-btn').daterangepicker(
                                                        {
                                                            ranges: {
                                                                'Today': [moment(), moment()],
                                                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                                            },
                                                            startDate: moment().subtract(29, 'days'),
                                                            endDate: moment()
                                                        },
                                                        function (start, end) {
                                                            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                                                        }
                                                )

                                                //Date picker
                                                $('#datepicker').datepicker({
                                                    autoclose: true
                                                })

                                                //iCheck for checkbox and radio inputs
                                                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                                                    checkboxClass: 'icheckbox_minimal-blue',
                                                    radioClass: 'iradio_minimal-blue'
                                                })
                                                //Red color scheme for iCheck
                                                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                                                    checkboxClass: 'icheckbox_minimal-red',
                                                    radioClass: 'iradio_minimal-red'
                                                })
                                                //Flat red color scheme for iCheck
                                                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                                                    checkboxClass: 'icheckbox_flat-green',
                                                    radioClass: 'iradio_flat-green'
                                                })

                                                //Colorpicker
                                                $('.my-colorpicker1').colorpicker()
                                                //color picker with addon
                                                $('.my-colorpicker2').colorpicker()

                                                //Timepicker
                                                $('.timepicker').timepicker({
                                                    showInputs: false
                                                })
                                            })
        </script>


    </body>
</html>
