<!DOCTYPE html>
<html lang="en">
<head>

<head>
  <style>
    .float{
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 120px;
      right:10px;
      background: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow:2px 2px 30px
      #999;
      z-index: 100;
    }

    .my-float{
      margin-top: 16px;
    }
    </style>
    </head>

    <body>
      <link rel="stylesheet" href
      ="https://
      maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <a href="https://api.whatsapp.com/send?
      phone=51900000000&text"
      class="float" target="_blank">
      <i class="fa fa-whatsapp
      my-float"></i>
</a>
</body>
</html>
  <meta charset="utf-8">
  <title>Greenland Kemang Bogor</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php base_url(); ?>assets/img/logo-greenland-kemang-bogor.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php base_url(); ?>assets/plugins/animate/animate.min.css" rel="stylesheet">
  <link href="<?php base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php base_url(); ?>assets/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php base_url(); ?>assets/frontend/css/style2.css" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">
  <link href="<?php base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <img src="<?php base_url();?>assets/img/logo-greenland-kemang-bogor.png" alt="Logo Greenland Kemang">
      <!-- <a class="navbar-brand text-brand" href="index.html">Greenland<span class="color-b">Kemang</span></a> -->
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= (current_url() === site_url('home') || current_url() === site_url('/')) ? 'active' : '' ?>" href="<?php base_url();?>/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (current_url() === site_url('profil')) ? 'active' : '' ?>" href="<?php base_url();?>/profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (current_url() === site_url('denah')) ? 'active' : '' ?>" href="<?php base_url();?>/denah">Denah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (current_url() === site_url('video')) ? 'active' : '' ?>" href="<?php base_url();?>/video">Video</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= (current_url() === site_url('kontak')) ? 'active' : '' ?>" href="<?php base_url();?>/kontak">Kontak</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->