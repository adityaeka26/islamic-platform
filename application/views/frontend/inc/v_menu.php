<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <body>
        <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<ul class="list header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="float-right">
						<a class="dn_btn" href="#">Hijriyah : 17 Syawal 1439 | Masehi : 01 Juli 2018</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?=base_url()?>"><img src="<?php echo base_url(); ?>assets/frontend/img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a></li> 
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>about/">Tentang Masjid</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>event/">Kegiatan</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>news/">Berita</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>report/">Laporan</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->