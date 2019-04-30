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
                    <h3 class="text-primary">Ubah Data Infaq</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Infaq</a></li>
                        <li class="breadcrumb-item active">Ubah Data Infaq</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php foreach($infaq as $i){ ?>
                                <form action="<?php echo base_url(). 'admin/infaq/exec_edit/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" name="id-infaq" value="<?php echo $i->id_infaq ?>">
                                            <input type="date" name="date-infaq" class="form-control" value="<?php echo $i->date ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Jenis Infaq</label>
                                        <div class="col-sm-8">
                                            <select name="category-infaq" class="form-control">
                                                <option><?php echo $i->category ?></option>
                                                <?php 
                                                    if($i->category == "Infaq Mingguan") {
                                                ?>
                                                <option>Infaq Jum'at</option>
                                                <?php 
                                                    } else {
                                                ?>
                                                <option>Infaq Mingguan</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Jumlah</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="number-infaq" class="form-control input-default " value="<?php echo $i->total ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="text-infaq" class="form-control input-default " value="<?php echo $i->info ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Ubah Data Infaq</button>
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