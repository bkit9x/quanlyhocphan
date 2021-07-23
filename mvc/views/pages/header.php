<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= isset($breadcrumb['title']) ? $breadcrumb['title'] : "Quản lý học phần";?></title>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- custom style -->
    <link rel="stylesheet" href="<?php echo DOMAIN;?>public/dist/css/style.css">

    <!-- jQuery 3 -->
    <script src="<?php echo DOMAIN;?>public/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo DOMAIN;?>public/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- DataTables -->
    <script src="<?php echo DOMAIN;?>public/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo DOMAIN;?>public/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
</head>
<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
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
                            <img src="<?php echo DOMAIN;?>public/dist/img/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?= $_SESSION['hoten'] ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo DOMAIN;?>public/dist/img/avatar5.png" class="img-circle" alt="User Image">

                                <p>
                                   <?= $_SESSION['hoten'] ?>
                                    <small><?= $_SESSION['loaitaikhoan'] ?></small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Đổi mật khẩu</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=DOMAIN;?>index.php?url=taikhoan/dangxuat" class="btn btn-default btn-flat">Đăng xuất</a>
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
                    <img src="<?php echo DOMAIN;?>public/dist/img/avatar5.png" class="img-circle" alt="User Image">
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
                    <a href="<?= DOMAIN?>">
                        <i class="fa fa-home"></i> <span>Trang chủ</span>
                    </a>
                </li>
                <li>
                    <a href="<?= DOMAIN?>index.php?url=hocphan/index">
                        <i class="glyphicon glyphicon-list-alt"></i>
                        <span>QL học phần</span>
                    </a>
                </li>
                <li>
                    <a href="<?= DOMAIN?>index.php?url=caytientrinh/index">
                        <i class="fa fa-code-fork"></i>
                        <span>QL cây tiến trình</span>
                    </a>
                </li>
                <li>
                    <a href="<?= DOMAIN?>index.php?url=sinhvien/index">
                        <i class="fa fa-user-md"></i> <span>QL sinh viên</span>
                    </a>
                </li>
                <li>
                    <a href="<?= DOMAIN?>index.php?url=diem/index">
                        <i class="fa fa-book"></i> <span>QL điểm</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="<?= DOMAIN?>index.php?url=hocphan/index">
                        <i class="fa fa-pie-chart"></i> <span>Thống kê</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Tổng quát</a></li>
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Học phần chưa học</a></li>
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Học phần đã học</a></li>
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Học phần cần học lại</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>QL tài khoản</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Chỉnh sửa thông tin</a></li>
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Đổi mật khẩu</a></li>
                        <li><a href="<?= DOMAIN?>index.php?url=hocphan/index"><i class="fa fa-circle-o"></i> Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?= isset($breadcrumb['title']) ? $breadcrumb['title'] : "Quản lý học phần";?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?= DOMAIN;?>"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li class="active"><a href="<?= isset($breadcrumb[0]['link']) ? $breadcrumb[0]['link'] : "#";?>"><?= isset($breadcrumb[0]['title']) ? $breadcrumb[0]['title'] : "Quản lý học phần";?></a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
