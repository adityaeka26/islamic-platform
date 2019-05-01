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
                                <form action="<?php echo base_url(); ?>install/exec_place" method="post">
                                    <?php if ($this->session->flashdata('errors')) { ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong>Warning !</strong> <?=$this->session->flashdata('errors'); ?>.
                                        </div>
                                    <?php } ?>
                                    <?php foreach($mosque as $m){ ?>
                                        <input type="hidden" name="mosque-id" value="<?php echo $m->id_mosque ?>">
                                    <?php } ?>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="mosque-email" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Telepon</label>
                                        <input type="text" name="mosque-phone" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="mosque-address" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <input type="text" name="mosque-city" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <input type="text" name="mosque-province" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Negara</label>
                                        <input type="text" name="mosque-country" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Pos</label>
                                        <input type="text" name="mosque-postcode" required class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div style="height:400px; width:auto;" id="map"></div>
                                    </div>
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input type="text" name="mosque-latitude" required class="form-control" id="latitude" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input type="text" name="mosque-longitude" required class="form-control" id="longitude" readonly>
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
    <script type="text/javascript">
        var map;
        function initMap() {                            
            var latitude = -6.975716257877649;
            var longitude = 107.63212608980177;

            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;
            
            var myLatLng = {
                lat: latitude, 
                lng: longitude
            };
            
            map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 11,
                disableDoubleClickZoom: true,
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: latitude + ', ' + longitude 
            });
            
            google.maps.event.addListener(map, 'click', function(event) {                
                document.getElementById('latitude').value = event.latLng.lat();
                document.getElementById('longitude').value = event.latLng.lng();
                marker.setPosition(event.latLng);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfZYlnSEcZ7cOU8FET-72EFRfx_UgAtOw&callback=initMap" async defer></script>
</body>
</html>