<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('frontend/inc/v_header.php');
    $this->load->view('frontend/inc/v_menu.php');
?> 

        <!--================Event Main Area =================-->
        <section class="event_main_area p_120">
        	<div class="container">
        		<div class="row event_main_inner">
				<?php foreach($event as $e){ ?>
        			<div class="col-lg-6">
        				<div class="event_item">
                            <div class="media">
        						<div class="d-flex">
        							<img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-event-main.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<a href="#"><?php echo $e->date ?></a>
        							<a href="<?php echo base_url(); ?>event/detail/"><h4><?php echo $e->title ?></h4></a>
        							<p><?php echo $e->information ?></p>
        						</div>
        					</div>
        				</div>
        			</div>
				<?php } ?>
        		</div>
        	</div>
        </section>
        <!--================End Event Main Area =================-->
