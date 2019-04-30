<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('frontend/inc/v_header.php');
    $this->load->view('frontend/inc/v_menu.php');
?>
		<?php foreach($mosque as $m){ ?>
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="1" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h5>Assalamu'alaikum, Selamat datang di website:</h5>
						<h3><?php echo $m->name ?></h3>
						<p><?php echo $m->motto ?></p>
						<a class="main_btn" href="<?php echo base_url(). 'about/'; ?>">Profil Masjid</a>
						<a class="white_btn" href="<?php echo base_url(). 'event/'; ?>">Kegiatan Kami</a>
					</div>
				</div>
            </div>
            <div class="donation_area">
				<div class="container">
					<div class="row donation_inner">
						<div class="col-lg-4">
							<div class="dontation_item yellow">
								<div class="media">
									<div class="media-body">
										<h4>Jama'ah Terdaftar</h4>
										<p>Jumlah jama'ah yang terdaftar secara resmi pada website.</p>
									</div>
									<div class="d-flex">
										<h3><?php echo $cnt_usr ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="dontation_item pink">
								<div class="media">
									<div class="media-body">
										<h4>Total Kegiatan Masjid</h4>
										<p>Jumlah kegiatan yang diumumkan melalui situs website.</p>
									</div>
									<div class="d-flex">
										<h3><?php echo $cnt_evt ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="dontation_item green">
								<div class="media">
									<div class="media-body">
										<h4>Pengurus Masjid</h4>
										<p>Jumlah pengurus masjid yang terdaftar pada website.</p>
									</div>
									<div class="d-flex">
										<h3><?php echo $cnt_tem ?></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4>Sambutan Takmir Masjid</h4>
        					<p><?php echo $m->greeting ?></p>
        					<div class="row">
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>Ketua</h4>
										<?php foreach($lead as $l){ ?>
        								<p><?php echo $l->name ?></p>
										<?php } ?>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>Sekertaris</h4>
										<?php foreach($secr as $s){ ?>
        								<p><?php echo $s->name ?></p>
										<?php } ?>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>Keuangan</h4>
										<?php foreach($bdrh as $b){ ?>
        								<p><?php echo $b->name ?></p>
										<?php } ?>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="welcome_img">
							<?php 
								if($m->greeting_pic == "") {
							?>
        					<img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-welcome-img.jpg" alt="">
							<?php
								} else {
							?>
							<img class="img-fluid" src="<?php echo $m->greeting_pic ?>" alt="">
							<?php }?>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
		<?php } ?>
        
        <!--================Causes Area =================-->
        <section class="causes_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Berita Terbaru</h2>
        			<p>Dapatkan berita terbaru tentang masjid kami untuk mengetahui aktivitas di masjid.</p>
        		</div>
        		<div class="causes_slider owl-carousel">
				<?php foreach($news as $n){ ?>
        			<div class="item">
        				<div class="causes_item">
        					<div class="causes_img">
        						<img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-blog-front.jpg" alt="">
        					</div>
        					<div class="causes_text">
        						<h4><?php echo $n->title ?></h4>
        						<p><?php echo $n->content ?></p>
        					</div>
        					<div class="causes_bottom">
								<a href="#">Read More</a>
							</div>
        				</div>
        			</div>
				<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Causes Area =================-->
        
        <!--================Event Area =================-->
        <section class="event_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Kegiatan Terbaru</h2>
        			<p>Ikutilah kegiatan terbaru dari masjid kami dengan info di bawah ini.</p>
        		</div>
        		<div class="event_slider owl-carousel">
				<?php foreach($event as $e){ ?>
        			<div class="item">
        				<div class="event_item">
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-event-front.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<a href="#"><?php echo $e->date ?></a>
        							<a href="event-details.html"><h4><?php echo $e->title ?></h4></a>
        							<p><?php echo $n->content ?></p>
        						</div>
        					</div>
        				</div>
        			</div>
				<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Event Area =================-->