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
            <h3 class="text-primary">Penanggung Jawab Website</h3> </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                <li class="breadcrumb-item active">Penanggung Jawab</li>
            </ol>
        </div>
    </div>
    <?php foreach($account as $a){ ?>
    <div class="container-fluid">
    <input type="hidden" name="id-users" value="<?php echo $a->id_users ?>">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-two">
                            <header>
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/backend/images/users.svg" alt="user" class="profile-pic" />
                                </div>
                            </header>
                            <h3><?php echo $a->first_name ?> <?php echo $a->last_name ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">View</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" role="tabpanel">
                            <div class="card-body">
                                <hr>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a->email ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Telpon</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a->phone ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Kota</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a->city ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Provinsi</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a->province ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Negara</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a->country ?></p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Kode Pos</strong>
                                        <br>
                                        <p class="text-muted"><?php echo $a->postcode ?></p>
                                    </div>
                                </div>
                                <hr>
                                <strong>Alamat</strong>
                                <br>
                                <p class="m-t-30"><?php echo $a->address ?></p>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <div class="card-body">
                            <?php foreach($account as $a){ ?>
                                <form class="form-horizontal form-material" action="<?php echo base_url(). 'admin/account/exec_edit/'; ?>" method="post">
                                    <hr>
                                    <input type="hidden" name="id-account" value="<?php echo $a->id_users ?>">
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Awal</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-name-first" class="form-control form-control-line" value="<?php echo $a->first_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Akhir</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-name-last" class="form-control form-control-line" value="<?php echo $a->last_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="account-email" class="form-control form-control-line" value="<?php echo $a->email ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telepon</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-phone" class="form-control form-control-line" value="<?php echo $a->phone ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-address" class="form-control form-control-line" value="<?php echo $a->address ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kota</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-city" class="form-control form-control-line" value="<?php echo $a->city ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Provinsi</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-province" class="form-control form-control-line" value="<?php echo $a->province ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Negara</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-country" class="form-control form-control-line" value="<?php echo $a->country ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kode Pos</label>
                                        <div class="col-md-12">
                                            <input type="text" name="account-postcode" class="form-control form-control-line" value="<?php echo $a->postcode ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success">Update Info</button>
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

<?php
    $this->load->view('backend/inc/v_footer.php');
?>