<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('frontend/inc/v_header.php');
    $this->load->view('frontend/inc/v_menu.php');
?> 
		<?php foreach($mosque as $m){ ?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Profil <?php echo $m->name ?></h2>
						<div class="page_link">
							Berikut merupakan profil <?php echo $m->name ?>
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
        					<h4>Tentang Masjid</h4>
        					<p><?php echo $m->about_long ?></p>
        				</div>
        			</div>
        			<div class="col-lg-6">
                        <div class="welcome_text">
                            <h4>Info Masjid</h4>
                            <div class="row">
        						<div class="col-sm-6">
        							<div class="wel_item">
        								<i class="lnr lnr-apartment"></i>
        								<h4><?php echo $m->width ?></h4>
        								<p>Luas Masjid (Meter Persegi)</p>
        							</div>
        						</div>
        						<div class="col-sm-6">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4><?php echo $m->volume ?></h4>
        								<p>Kapasitas Masjid (Jama'ah)</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="row testimonials_inner">
        			<div class="col-lg-4">
        				<div class="testi_left_text">
        					<h4>Takmir Masjid</h4>
        					<p>Berikut merupakan anggota takmir masjid yang mengurus masjid kami.</p>
        				</div>
        			</div>
        			<div class="col-lg-8">
        				<div class="testi_slider owl-carousel">
							<?php foreach($team as $t){ ?>
							<div class="item">
								<div class="testi_item">
									<img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-people-about.png" alt="">
									<h4><?php echo $t->name ?></h4>
									<h6><?php echo $t->position ?></h6>
								</div>
							</div>
							<?php } ?>
						</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->

        <!--================Gallery Area =================-->
        <section class="gallery_area p_120">
            <div class="container">
                <div class="welcome_text">
                    <h4>Galeri Masjid</h4>
                </div>
                <div class="row gallery_inner imageGallery1">
                    <div class="col-md-4 col-sm-6 gallery_item">
                        <div class="gallery_img">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-1.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gallery_item">
                        <div class="gallery_img">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-2.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-2.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gallery_item">
                        <div class="gallery_img">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-1.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gallery_item">
                        <div class="gallery_img">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-2.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-2.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gallery_item">
                        <div class="gallery_img">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-2.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-2.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 gallery_item">
                        <div class="gallery_img">
                            <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-1.jpg" alt="">
                            <div class="hover">
                            	<a class="light" href="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-gallery-1.jpg"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Gallery Area =================-->
		<?php } ?>