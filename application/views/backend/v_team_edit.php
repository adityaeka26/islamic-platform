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
                    <h3 class="text-primary">Ubah Pengurus</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pengaturan</a></li>
                        <li class="breadcrumb-item active">Ubah Pengurus</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php foreach($team as $t){ ?>
                                <form action="<?php echo base_url(). 'admin/team/exec_edit/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Nama Pengurus</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" name="id-team" value="<?php echo $t->id_takmir ?>">
                                            <input type="text" name="team-name" class="form-control input-default " value="<?php echo $t->name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Jabatan</label>
                                        <div class="col-sm-8">
                                            <select name="team-position" class="form-control">
                                                <option><?php echo $t->position ?></option>
                                                <?php 
                                                    if($t->position != "Ketua") {
                                                ?>
                                                <option>Ketua</option>
                                                <?php } ?>
                                                <?php 
                                                    if($t->position != "Sekertaris") {
                                                ?>
                                                <option>Sekertaris</option>
                                                <?php } ?>
                                                <?php 
                                                    if($t->position != "Bendahara") {
                                                ?>
                                                <option>Bendahara</option>
                                                <?php } ?>
                                                <?php 
                                                    if($t->position != "Anggota") {
                                                ?>
                                                <option>Anggota</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Ubah Pengurus</button>
                                    </div>
                                </form>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $this->load->view('backend/inc/v_footer.php');
?>