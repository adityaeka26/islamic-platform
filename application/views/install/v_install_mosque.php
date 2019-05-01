<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Islamic Platform for Mosque Management">
    <meta name="author" content="Islamic Platform">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/backend/images/favicon.png">
    <title>Mosque Profile - Islamic Platform - Install</title>

    <link href="<?php echo base_url(); ?>assets/backend/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/backend/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/backend/css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Setup</h4>
                                <form action="<?php echo base_url(); ?>install/exec_mosque" method="post">
                                    <?php if ($this->session->flashdata('errors')) { ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Warning !</strong> <?=$this->session->flashdata('errors'); ?>.
                                        </div>
                                    <?php } ?>
                                    <div class="form-group">
                                        <label>Nama Masjid</label>
                                        <input type="text" name="mosque-name" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Motto Masjid</label>
                                        <input type="text" name="mosque-motto" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Luas Masjid</label>
                                        <input type="text" name="mosque-width" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kapasitas Jama'ah</label>
                                        <input type="text" name="mosque-people" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tentang Masjid (Pendek)</label>
                                        <textarea type="text" name="mosque-about-small" required class="form-control" rows="15" placeholder="Sambutan ..." style="height:250px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Tentang Masjid (Panjang)</label>
                                        <textarea type="text" name="mosque-about-long" required class="form-control" rows="15" placeholder="Sambutan ..." style="height:250px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Sambutan Takmir</label>
                                        <input type="text" name="mosque-greeting" required class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Next</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/sidebarmenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/js/custom.min.js"></script>
</body>
</html>