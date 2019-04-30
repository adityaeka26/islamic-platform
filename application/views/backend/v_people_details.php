<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('backend/inc/v_header.php');
    $this->load->view('backend/inc/v_menu.php');
    $this->load->view('backend/inc/v_sidebar.php');
?>

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Detail Data Jama'ah</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Jama'ah</a></li>
                        <li class="breadcrumb-item active">Detail Data Jama'ah</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php foreach($people as $p){ ?>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-name" class="form-control form-control-line" value="<?php echo $p->name ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="people-email" class="form-control form-control-line" value="<?php echo $p->email ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-phone" class="form-control form-control-line" value="<?php echo $p->telephone ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Kelamin</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-gender" class="form-control form-control-line" value="<?php echo $p->gender ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-address" class="form-control form-control-line" value="<?php echo $p->address ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kota</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-city" class="form-control form-control-line" value="<?php echo $p->city ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Provinsi</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-province" class="form-control form-control-line" value="<?php echo $p->province ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Negara</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-country" class="form-control form-control-line" value="<?php echo $p->country ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kode Pos</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-postcode" class="form-control form-control-line" value="<?php echo $p->postcode ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-text" class="form-control form-control-line" value="<?php echo $p->information ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="gmap_unix">
                                                <div class="map" id="map-people-details"></div>
                                            </div>
                                            <script>
                                                var usr_lat = <?php echo $p->lat ?>;
                                                var usr_lon = <?php echo $p->lon ?>;

                                                function initMap() {
                                                    var myLatLng = {lat: usr_lat, lng: usr_lon};

                                                    var map = new google.maps.Map(document.getElementById('map-people-details'), {
                                                        zoom: 11,
                                                        center: myLatLng
                                                    });

                                                    var marker = new google.maps.Marker({
                                                        position: myLatLng,
                                                        map: map
                                                    });
                                                }
                                            </script>
                                            <script async defer
                                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNIjkcJdReaXobtoPTq3TjHmHZLpquU_c&callback=initMap">
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="<?php echo base_url(); ?>admin/people/"><button type="button" class="btn btn-success m-b-10 m-l-5">Kembali ke List</button></a>
                                        <a href="<?php echo base_url(). 'admin/people/edit/' .$p->id_jamaah; ?>"><button type="button" class="btn btn-warning m-b-10 m-l-5">Ubah</button></a>
                                        <a href="<?php echo base_url(). 'admin/people/delete/' .$p->id_jamaah; ?>"><button type="button" class="btn btn-danger m-b-10 m-l-5">Hapus</button></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $this->load->view('backend/inc/v_footer.php');
?>