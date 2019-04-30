<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('backend/inc/v_sidebar.php');
?>

    <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Jama'ah Masjid</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Jama'ah</a></li>
                        <li class="breadcrumb-item active">Jama'ah Masjid</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Peta Sebaran Jama'ah</h4>
                                <div class="card-title-right-icon">
                                    <ul>

                                    </ul>
                                </div>
                            </div>
                            <div class="gmap_unix">
                                <div class="map" id="people-map"></div>
                            </div>
                            <?php foreach($mosque as $m){ 
                                $mosque_lat = $m->lat;
                                $mosque_lon = $m->lon;
                            }?>
                            <?php foreach($people_maps as $pm){?>
                            <script>
                                var mosque_lat = <?php echo $mosque_lat; ?>;
                                var mosque_lon = <?php echo $mosque_lon; ?>;
                                
                                function initMap() {
                                    var locations = [
                                        ['<?php echo $pm->name; ?>', <?php echo $pm->lat; ?>, <?php echo $pm->lon; ?>, 4],
                                    ];

                                    var map = new google.maps.Map(document.getElementById('people-map'), {
                                        zoom: 10,
                                        center: new google.maps.LatLng(mosque_lat, mosque_lon),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    });

                                    var infowindow = new google.maps.InfoWindow();

                                    var marker, i;

                                    for (i = 0; i < locations.length; i++) {  
                                        marker = new google.maps.Marker({
                                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                            map: map
                                        });

                                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                            return function() {
                                            infowindow.setContent(locations[i][0]);
                                            infowindow.open(map, marker);
                                            }
                                        })(marker, i));
                                    }
                                }
                            </script>
                            <?php } ?>

                            <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNIjkcJdReaXobtoPTq3TjHmHZLpquU_c&callback=initMap">
                            </script>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <a href="<?php echo base_url(); ?>admin/people/add/" class="btn btn-primary btn-rounded m-b-10 m-l-5">+ Tambah Jama'ah Masjid</a>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            foreach($people as $p){ 
                                        ?>

                                            <tr>
                                                <td><?php echo $no++;  ?></td>
                                                <td><?php echo $p->name; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(). 'admin/people/details/' .$p->id_jamaah; ?>"><button type="button" class="btn btn-success m-b-10 m-l-5">Detail</button></a>
                                                    <a href="<?php echo base_url(). 'admin/people/edit/' .$p->id_jamaah; ?>"><button type="button" class="btn btn-warning m-b-10 m-l-5">Ubah</button></a>
                                                    <a href="<?php echo base_url(). 'admin/people/delete/' .$p->id_jamaah; ?>"><button type="button" class="btn btn-danger m-b-10 m-l-5">Hapus</button></a>
                                                </td>
                                            </tr>

                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $this->load->view('backend/inc/v_footer.php');
?>