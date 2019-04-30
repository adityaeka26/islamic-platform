<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <?php foreach($mosque as $m){ ?>
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Tentang Masjid</h6>
                            <p><?php echo $m->about_short ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Alamat Masjid</h6>
                            <p>Alamat: <?php echo $m->address ?></p>	
                            <p>Kota: <?php echo $m->city ?></p>
                            <p>Provinsi: <?php echo $m->province ?></p>		
                            <p>Kode Pos: <?php echo $m->postcode ?></p>			
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Kontak Masjid</h6>
                            <p>Telpon: <?php echo $m->phone ?></p>	
                            <p>Email: <?php echo $m->email ?></p>						
                        </div>
                    </div>						
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> by Masjid Ar-Fachrudin | This platform is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://islamic-platform.cf" target="_blank">Islamic Platform Team</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        <?php } ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/popper.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/stellar.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/mail-script.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/theme.js"></script>
    </body>
</html>