<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="">
	<meta name="description" content="">

	<title><?= $judul; ?></title>

    <link rel="shortcut icon" href="<?= base_url();?>asset/img/lambang_kota_bandung.png">
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>asset/css/bootstrap.css">
	<!--Custom-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>asset/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>asset/css/carousel.css">
	<!--font awesome-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>asset/css/fontawesome.min.css">
	<!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url();?>asset/css/jquery.mCustomScrollbar.min.css">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&display=swap" rel="stylesheet">

</head>
<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">

            <div class="row sidebar-header">
                <div class="col-sm">
                    <img src="<?= base_url();?>asset/img/lambang_kota_bandung.png">
                </div>
                <div class="col-sm mt-3"><strong>pemerintah kota bandung<strong></div>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="<?php echo base_url(); ?>">
                        <i class="fas fa-home fa-2x"></i>
                        <label>Beranda</label>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#homeSubmenu" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-file fa-2x"></i>
                        <label>Buat Surat</label>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a data-toggle="collapse" href="#sktmSubMenu" aria-expanded="false" class="dropdown-toggle">SKTM</a>
                            <ul class="collapse list-unstyled" id="sktmSubMenu">
                                <li><a style="text-align: right;" href="<?php echo base_url(); ?>pbb">PBB</a></li>
                                <li><a style="text-align: right;" href="<?php echo base_url(); ?>sekolah">Sekolah</a></li>
                                <li><a style="text-align: right;" href="<?php echo base_url(); ?>rs">Rumah Sakit</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>kelahiran">Kelahiran</a></li>
                        <li>
                            <a data-toggle="collapse" href="#kmSubMenu" aria-expanded="false" class="dropdown-toggle">Kematian</a>
                            <ul class="collapse list-unstyled" id="kmSubMenu">
                                <li><a style="text-align: right;" href="<?php echo base_url(); ?>kematian">Surat Kematian</a></li>
                                <li><a style="text-align: right;" href="<?php echo base_url(); ?>kremasi">Kremasi</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>serbaguna">Keterangan Serba Guna</a></li>
                        <li><a href="<?php echo base_url(); ?>sku">Keterangan Usaha</a></li>
                        <li><a href="<?php echo base_url(); ?>skck">Pengantar SKCK</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url(); ?>SKCK/Rekap">
                        <i class="fas fa-table fa-2x"></i>
                        <label>Rekapitulasi</label>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg" style="margin-top: -80px; padding-left: 25px;">
                <button id="sidebarCollapse" class="btn btn-primary" type="button">
                    <i class="fas fa-bars fa-lg" style="color: #ff9933;"></i>
                </button>
                <div class="collapse navbar-collapse" style="float: right;">
            <!--    <ul class="navbar navbar-nav">
                        <li class="navbar-item"> 
                            <form class="form-inline">
                                <input class="form-control" style=" background-color: transparent; border: none; border-bottom: solid #a9a9a9;" type="text" placeholder="Cari..." name="cari">
                                <button class="btn btn-muted btn-ml-0" type="submit">
                                    <i class="fas fa-search" style="color: #ff383f"></i>
                                </button>
                            </form>
                        </li>
                    </ul>  -->
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb" style="background-color: transparent; margin-top: 15px; margin-left: 30px; height: 40px; padding: 5px; padding-left: 10px; widht: 100%; min-width: 200px;">
                        <li class="breadcrumb-item"><?= $judul; ?></li>
                        <li class="breadcrumb-item"><?= $sub_judul; ?></li>
                        <li class="breadcrumb-item active"><?= $sub_judul2; ?></li>
                    </ol>
                </div>
            </nav>