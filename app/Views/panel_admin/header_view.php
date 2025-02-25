<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Greenland Kemang Bogor | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/backend/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php base_url(); ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>assets/img/logo-greenland-kemang-bogor.png" alt="Greenland Kemang Bogor Logo" height="40" width="120">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/img/logo-greenland-kemang-bogor.png" alt="Greenland Kemang Bogor Logo" height="20" width="60">
      <span class="brand-text font-weight-light" style="font-size: 16px; margin-left: 10px">Greenland Kemang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Website</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php base_url(); ?>/paneladmin/dashboard" class="nav-link <?= (current_url() === site_url('paneladmin/dashboard')) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>/paneladmin/profil" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>/paneladmin/denah" class="nav-link <?= (current_url() === site_url('paneladmin/denah')) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Denah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>/paneladmin/video" class="nav-link <?= (current_url() === site_url('paneladmin/video')) ? 'active' : '' ?>">
                <i class="nav-icon fas fa-caret-square-right"></i>
              <p>
                Video
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>/paneladmin/kontak" class="nav-link <?= (current_url() === site_url('paneladmin/kontak')) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>/paneladmin/user" class="nav-link <?= (current_url() === site_url('paneladmin/user')) ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php base_url(); ?>/login/logout" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>