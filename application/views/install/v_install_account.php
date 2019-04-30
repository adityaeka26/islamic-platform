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
                                <form action="<?php echo base_url(); ?>install/exec_account" method="post">
                                    <?php if ($this->session->flashdata()) { ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Warning !</strong> <?=$this->session->flashdata('errors'); ?>.
                                        </div>
                                    <?php } ?>
                                    <input type="hidden" name="role" value="admin">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Province</label>
                                        <input type="text" name="province" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Postcode</label>
                                        <input type="text" name="postcode" required class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Setup</button>
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