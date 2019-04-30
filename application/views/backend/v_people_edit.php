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
                    <h3 class="text-primary">Ubah Data Jama'ah</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Jama'ah</a></li>
                        <li class="breadcrumb-item active">Ubah Data Jama'ah</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php foreach($people as $p){ ?>
                                <form action="<?php echo base_url(). 'admin/people/exec_edit/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input type="hidden" name="id-people" value="<?php echo $p->id_jamaah ?>">
                                            <input type="text" name="people-name" class="form-control form-control-line" value="<?php echo $p->name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="people-email" class="form-control form-control-line" value="<?php echo $p->email ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-phone" class="form-control form-control-line" value="<?php echo $p->telephone ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Jenis Kelamin</label>
                                        <div class="col-sm-12">
                                            <select name="people-gender" class="form-control">
                                                <option><?php echo $p->gender ?></option>
                                                <?php 
                                                    if($p->gender != "Laki-Laki") {
                                                ?>
                                                <option>Laki-Laki</option>
                                                <?php } ?>
                                                <?php 
                                                    if($t->position != "Perempuan") {
                                                ?>
                                                <option>Perempuan</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-address" class="form-control form-control-line" value="<?php echo $p->address ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kota</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-city" class="form-control form-control-line" value="<?php echo $p->city ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Provinsi</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-province" class="form-control form-control-line" value="<?php echo $p->province ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Negara</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-country" class="form-control form-control-line" value="<?php echo $p->country ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kode Pos</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-postcode" class="form-control form-control-line" value="<?php echo $p->postcode ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Keterangan</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-text" class="form-control form-control-line" value="<?php echo $p->information ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div id="us3" style="width: 550px; height: 400px;"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Latitude</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-latitude" class="form-control form-control-line" id="us3-lat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Longitude</label>
                                        <div class="col-md-12">
                                            <input type="text" name="people-longitude" class="form-control form-control-line" id="us3-lon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Ubah Data Jama'ah</button>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>