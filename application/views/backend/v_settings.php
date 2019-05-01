<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    // $this->load->view('backend/inc/v_header.php');
    // $this->load->view('backend/inc/v_menu.php');
    $this->load->view('backend/inc/v_sidebar.php');
?>

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Info Masjid</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pengaturan</a></li>
                <li class="breadcrumb-item active">Info Masjid</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-two">
                            <header>
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/backend/images/mosque.svg" alt="user" class="profile-pic" />
                                </div>
                            </header>
                            <h3>Masjid Ar-Fachrudien</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#info" role="tab">Profile</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="info" role="tabpanel">
                            <div class="card-body">
                            <?php foreach($mosque as $m){ ?>
                                <form class="form-horizontal form-material" action="<?php echo base_url(). 'admin/settings/exec_edit/'; ?>" method="post">
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Masjid</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="id-mosque" value="<?php echo $m->id_mosque ?>">
                                            <input type="text" name="mosque-name" class="form-control form-control-line" value="<?php echo $m->name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Motto Masjid</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-motto" class="form-control form-control-line" value="<?php echo $m->motto ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Gambar Slider</label>
                                        <div class="col-md-12">
                                            <input name="mosque-slider" type="file" value="<?php echo $m->slider_pic ?>" multiple />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Luas Masjid</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-width" class="form-control form-control-line" value="<?php echo $m->width ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kapasitas Jama'ah</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-people" class="form-control form-control-line" value="<?php echo $m->volume ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tentang Masjid (Pendek)</label>
                                        <div class="col-md-12">
                                            <textarea name="mosque-about-small" class="form-control" rows="15" style="height:250px"><?php echo $m->about_short ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tentang Masjid (Panjang)</label>
                                        <div class="col-md-12">
                                            <textarea name="mosque-about-long" class="form-control" rows="15" style="height:450px"><?php echo $m->about_long ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Sambutan Takmir</label>
                                        <div class="col-md-12">
                                            <textarea name="mosque-greeting" class="form-control" rows="15" style="height:250px"><?php echo $m->greeting ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Gambar Sambutan Takmir</label>
                                        <div class="col-md-12">
                                            <input name="mosque-greeting-pic" type="file" value="<?php echo $m->greeting_pic ?>" multiple />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Logo Masjid</label>
                                        <div class="col-md-12">
                                            <input name="mosque-logo" type="file" value="<?php echo $m->logo ?>" multiple />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Perbarui Info</button>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                            <?php foreach($mosque as $m){ ?>
                                <form class="form-horizontal form-material" action="<?php echo base_url(). 'admin/settings/exec_edit/'; ?>" method="post">
                                    <hr>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                        <input type="hidden" name="id-mosque" value="<?php echo $m->id_mosque ?>">
                                            <input type="email" name="mosque-email" class="form-control form-control-line" value="<?php echo $m->email ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-phone" class="form-control form-control-line" value="<?php echo $m->phone ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-address" class="form-control form-control-line" value="<?php echo $m->address ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kota</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-city" class="form-control form-control-line" value="<?php echo $m->city ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Provinsi</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-province" class="form-control form-control-line" value="<?php echo $m->province ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Negara</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-country" class="form-control form-control-line" value="<?php echo $m->country ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kode Pos</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-postcode" class="form-control form-control-line" value="<?php echo $m->postcode ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div style="height:400px; width:auto; margin:0px 16px;" id="map"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Latitude</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-latitude" class="form-control form-control-line" id="latitude" readonly value="<?php echo $m->lat ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Longitude</label>
                                        <div class="col-md-12">
                                            <input type="text" name="mosque-longitude" class="form-control form-control-line" id="longitude" readonly value="<?php echo $m->lon ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Perbarui Info</button>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($mosque as $m){ ?>
    <script type="text/javascript">
        var map;
        function initMap() {                            
            var latitude = <?php echo $m->lat ?>;
            var longitude = <?php echo $m->lon ?>;
            
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
    <?php } ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfZYlnSEcZ7cOU8FET-72EFRfx_UgAtOw&callback=initMap" async defer></script>