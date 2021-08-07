<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= isset($breadcrumb['title']) ? $breadcrumb['title'] : "Quản lý học phần"; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="https://ems.vlute.edu.vn/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ems.vlute.edu.vn/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ems.vlute.edu.vn/favicon-16x16.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= DOMAIN ?>public/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= DOMAIN ?>public/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= DOMAIN ?>public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= DOMAIN ?>public/dist/css/skins/_all-skins.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= DOMAIN ?>public/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- custom style -->
    <link rel="stylesheet" href="<?= DOMAIN ?>public/dist/css/style.css">

    <!-- jQuery 3 -->
    <script src="<?= DOMAIN ?>public/jquery/dist/jquery.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- DataTables -->
    <script src="<?= DOMAIN ?>public/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= DOMAIN ?>public/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= DOMAIN ?>public/chart.js/Chart.js"></script>
    <!-- sweetalert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= DOMAIN ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>QL</b>HP</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>QL</b> HỌC PHẦN</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= DOMAIN ?>public/dist/img/avatar5.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $_SESSION['hoten'] ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?= DOMAIN ?>public/dist/img/avatar5.png" class="img-circle" alt="User Image">

                                    <p>
                                        <?= $_SESSION['hoten'] ?>
                                        <small><?= $_SESSION['loaitaikhoan'] ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?= DOMAIN; ?>taikhoan/capnhat" class="btn btn-default btn-flat">Đổi mật khẩu</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= DOMAIN; ?>taikhoan/dangxuat" class="btn btn-default btn-flat">Đăng xuất</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a></a>
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
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= DOMAIN ?>public/dist/img/avatar5.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= $_SESSION['hoten'] ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> <?= $_SESSION['loaitaikhoan'] ?></a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu</li>
                    <li class="active">
                        <a href="<?= DOMAIN ?>">
                            <i class="fa fa-home"></i> <span>Trang chủ</span>
                        </a>
                    </li>
                    <?php #Quản trị viên# 
                    ?>
                    <?php if ($_SESSION['idloaitaikhoan'] == '1') : ?>
                        <li>
                            <a href="<?= DOMAIN ?>hocphan/index">
                                <i class="glyphicon glyphicon-list-alt"></i><span>QL học phần</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= DOMAIN ?>caytientrinh/index">
                                <i class="fa fa-code-fork"></i><span>QL cây tiến trình</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= DOMAIN ?>chunhiem/index">
                                <i class="fa fa-user-md"></i><span>QL chủ nhiệm</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-user"></i><span>QL tài khoản</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= DOMAIN ?>taikhoan/index"><i class="fa fa-list"></i> Danh sách tài khoản</a></li>
                                <li><a href="<?= DOMAIN ?>taikhoan/capnhat"><i class="fa fa-circle-o"></i> Chỉnh sửa thông tin</a></li>
                                <li><a href="<?= DOMAIN ?>taikhoan/dangxuat"><i class="fa fa-circle-o"></i> Đăng xuất</a></li>
                            </ul>
                        </li>

                        <?php #Giáo viên# 
                        ?>
                    <?php elseif ($_SESSION['idloaitaikhoan'] == '2') : ?>
                        <li>
                            <a href="<?= DOMAIN ?>sinhvien/index">
                                <i class="fa fa-group"></i><span>QL sinh viên</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= DOMAIN ?>thongke/index">
                                <i class="fa fa-pie-chart"></i><span>Thống kê</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= DOMAIN ?>spreadsheet/index">
                                <i class="fa fa-file-excel-o"></i><span>Nhập điểm</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-user"></i><span>QL tài khoản</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= DOMAIN ?>taikhoan/capnhat"><i class="fa fa-circle-o"></i> Chỉnh sửa thông tin</a></li>
                                <li><a href="<?= DOMAIN ?>taikhoan/dangxuat"><i class="fa fa-circle-o"></i> Đăng xuất</a></li>
                            </ul>
                        </li>

                        <?php #Sinh viên# 
                        ?>
                    <?php else : ?>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i><span>Thống kê</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?= DOMAIN ?>thongke/tongquat"><i class="fa fa-circle-o"></i> Tổng quát</a></li>
                                <li><a href="<?= DOMAIN ?>thongke/chuahoc"><i class="fa fa-circle-o"></i> Học phần chưa học</a></li>
                                <li><a href="<?= DOMAIN ?>thongke/dahoc"><i class="fa fa-circle-o"></i> Học phần đã học</a></li>
                                <li><a href="<?= DOMAIN ?>thongke/chuadat"><i class="fa fa-circle-o"></i> Học phần chưa đạt</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-user"></i><span>QL tài khoản</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu menu-open">
                                <li><a href="<?= DOMAIN ?>taikhoan/capnhat"><i class="fa fa-circle-o"></i> Chỉnh sửa thông tin</a></li>
                                <li><a href="<?= DOMAIN ?>taikhoan/dangxuat"><i class="fa fa-circle-o"></i> Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= isset($breadcrumb['title']) ? $breadcrumb['title'] : "Quản lý học phần"; ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?= DOMAIN; ?>"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="active"><a href="<?= isset($breadcrumb[0]['link']) ? $breadcrumb[0]['link'] : "#"; ?>"><?= isset($breadcrumb[0]['title']) ? $breadcrumb[0]['title'] : "Quản lý học phần"; ?></a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">