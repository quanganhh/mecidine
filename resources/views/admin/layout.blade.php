<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/bootstrap/dist/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/font-awesome/css/font-awesome.min.css') }}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/Ionicons/css/ionicons.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/dist/css/AdminLTE.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/css/modal.css') }}">
        <!-- Morris chart -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/morris.js/morris.css') }}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/jvectormap/jquery-jvectormap.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/css/toastr.min.css') }}">
        <!-- Date Picker -->
        {{--    
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/bootstrap-datepicker/dist/cssbootstrap-datepicker.min.css') }}">
        --}}
        <!-- Daterange picker -->
        {{-- 
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/bootstrap-daterangepicker/daterangepicker.cs') }}">
        --}}
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="{{ asset('bower_components/assets_backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>DM</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs">{{ trans('message.info') }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Xin chào {{ Auth::user()->name }}
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- Menu Footer-->
                                    <li class="user-footer col-md-12">
                                        <div class="pull-right">
                                            <a href="{{ route('logout') }}" class="btn btn-primary">{{ trans('message.logout') }}</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">
                            <h4 align="center">{{ trans('message.manage') }}</h4>
                        </li>
                        <li>
                            <a href="{{ route ('home') }}">
                            <i class="fa fa-dashboard"></i>
                            <span>{{ trans('message.home') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}">
                            <i class="fa fa-files-o"></i>
                            <span>{{ trans('message.category') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.index') }}">
                            <i class="fa fa-th"></i>
                            <span>{{ trans('message.product') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('order') }}">
                            <i class="fa fa-pie-chart"></i>
                            <span>{{ trans('message.order') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-table"></i>
                            <span>{{ trans('message.comment') }}</span>
                            <span class="pull-right-container">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fa fa-table"></i>
                            <span>{{ trans('message.slide') }}</span>
                            <span class="pull-right-container">
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user') }}">
                            <i class="fa fa-share"></i>
                            <span>{{ trans('message.account') }}</span>
                            <span class="pull-right-container">
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
            </footer>
            <!-- Add the sidebar's background. This div must be placed
                immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 3 -->
        <script src="{{ asset ('bower_components/assets_backend/jquery/dist/jquery.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('bower_components/assets_backend/jquery-ui/jquery-ui.min.js') }}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset ('bower_components/assets_backend/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- Morris.js charts -->
        <script src="{{ asset('bower_components/assets_backend/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('bower_components/assets_backend/morris.js/morris.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('bower_components/assets_backend/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
        <!-- jvectormap -->
        <script src="{{ asset('bower_components/assets_backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('bower_components/assets_backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <!-- jQuery Knob Chart -->
        {{-- <script src="{{ asset('bower_components/assets_backend/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script> --}}
        <!-- daterangepicker -->
        <script src="{{ asset('bower_components/assets_backend/moment/min/moment.min.js') }}"></script>
        <script src="{{ asset('bower_components/assets_backend/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <!-- datepicker -->
        <script src="{{ asset('bower_components/assets_backend/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('bower_components/assets_backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <!-- Slimscroll -->
        <script src="{{ asset('bower_components/assets_backend/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script src="{{ asset('bower_components/assets_backend/fastclick/lib/fastclick.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('bower_components/assets_backend/dist/js/adminlte.min.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        {{-- <script src="{{ asset('bower_components/assets_backend/dist/js/pages/dashboard.js') }}"></script> --}}
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('bower_components/assets_backend/dist/js/demo.js') }}"></script>
        <script src="{{ asset('bower_components/assets_backend/ckeditor/ckeditor.js') }}"></script>
        <script> CKEDITOR.replace('editor1'); </script>
        {{-- <script type="text/javascript" src="{{ asset('bower_components/js/search.js') }}"></script> --}}
        <script type="text/javascript" src="{{ asset('bower_components/js/toastr.js') }}"></script>
        <script>
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
        @yield('scripts')
    </body>
</html>
