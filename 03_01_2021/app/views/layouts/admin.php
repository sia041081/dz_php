<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="/public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/public/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/public/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/public/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/public/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="/admin/" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/admin/" class="nav-link">Главная</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/admin/category" class="nav-link">Категории</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Поиск" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/admin/" class="brand-link">
            <img src="/public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="/admin/" class="nav-link ">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                               Главная
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/category" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Категории
                            </p>
                        </a>
                    </li>


<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-book"></i>-->
<!--                            <p>-->
<!--                                Pages-->
<!--                                <i class="fas fa-angle-left right"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/invoice.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Invoice</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/profile.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Profile</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/e-commerce.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>E-commerce</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/projects.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Projects</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/project-add.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Project Add</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/project-edit.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Project Edit</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/project-detail.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Project Detail</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/contacts.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Contacts</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon far fa-plus-square"></i>-->
<!--                            <p>-->
<!--                                Extras-->
<!--                                <i class="fas fa-angle-left right"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/login.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Login</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/register.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Register</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/forgot-password.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Forgot Password</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/recover-password.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Recover Password</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/lockscreen.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Lockscreen</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/legacy-user-menu.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Legacy User Menu</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/language-menu.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Language Menu</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/404.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Error 404</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/500.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Error 500</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/pace.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Pace</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="pages/examples/blank.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Blank Page</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="starter.html" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Starter Page</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-header">MISCELLANEOUS</li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="https://adminlte.io/docs/3.0" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-file"></i>-->
<!--                            <p>Documentation</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="fas fa-circle nav-icon"></i>-->
<!--                            <p>Level 1</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item has-treeview">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon fas fa-circle"></i>-->
<!--                            <p>-->
<!--                                Level 1-->
<!--                                <i class="right fas fa-angle-left"></i>-->
<!--                            </p>-->
<!--                        </a>-->
<!--                        <ul class="nav nav-treeview">-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Level 2</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="nav-item has-treeview">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>-->
<!--                                        Level 2-->
<!--                                        <i class="right fas fa-angle-left"></i>-->
<!--                                    </p>-->
<!--                                </a>-->
<!--                                <ul class="nav nav-treeview">-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="far fa-dot-circle nav-icon"></i>-->
<!--                                            <p>Level 3</p>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="far fa-dot-circle nav-icon"></i>-->
<!--                                            <p>Level 3</p>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="nav-item">-->
<!--                                        <a href="#" class="nav-link">-->
<!--                                            <i class="far fa-dot-circle nav-icon"></i>-->
<!--                                            <p>Level 3</p>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <a href="#" class="nav-link">-->
<!--                                    <i class="far fa-circle nav-icon"></i>-->
<!--                                    <p>Level 2</p>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="fas fa-circle nav-icon"></i>-->
<!--                            <p>Level 1</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-header">LABELS</li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon far fa-circle text-danger"></i>-->
<!--                            <p class="text">Important</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon far fa-circle text-warning"></i>-->
<!--                            <p>Warning</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a href="#" class="nav-link">-->
<!--                            <i class="nav-icon far fa-circle text-info"></i>-->
<!--                            <p>Informational</p>-->
<!--                        </a>-->
<!--                    </li>-->
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Категории</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                            <li class="breadcrumb-item active">Категории</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    <?=$content?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="/admin/">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">

        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/public/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/public/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/public/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/public/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/public/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/public/admin/plugins/moment/moment.min.js"></script>
<script src="/public/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/public/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/public/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/public/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/public/admin/dist/js/demo.js"></script>
</body>
</html>
