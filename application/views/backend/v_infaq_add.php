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
                    <h3 class="text-primary">Masukkan Infaq Baru</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Infaq</a></li>
                        <li class="breadcrumb-item active">Masukkan Infaq Baru</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url(). 'admin/infaq/exec_add/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="date-infaq" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Jenis Infaq</label>
                                        <div class="col-sm-8">
                                            <select name="category-infaq" class="form-control">
                                                <option>Infaq Mingguan</option>
                                                <option>Infaq Jum'at</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Jumlah</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="number-infaq" class="form-control input-default " placeholder="500000">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="text-infaq" class="form-control input-default " placeholder="-">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Masukkan Data Infaq</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $this->load->view('backend/inc/v_footer.php');
?>