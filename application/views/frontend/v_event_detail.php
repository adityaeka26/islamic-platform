<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('frontend/inc/v_header.php');
    $this->load->view('frontend/inc/v_menu.php');
?>

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Event Name</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Event Details Area =================-->
		<section class="event_details_area p_120">
			<div class="container">
				<div class="event_d_inner">
					<img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-event-details.jpg" alt="">
					<div class="row event_text_inner">
						<div class="col-lg-4">
							<div class="left_text">
								<ul class="list">
									<li><i class="lnr lnr-calendar-full"></i>Sabtu 5 Mei 2018</li>
									<li><i class="lnr lnr-apartment"></i>Ust. Novendra Setyawan, ST. MT.</li>
									<li><i class="lnr lnr-location"></i> Masjid Ar-Fachrudin</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="right_text">
								<h4>Lorem Ipsum</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!--================End Event Details Area =================-->
