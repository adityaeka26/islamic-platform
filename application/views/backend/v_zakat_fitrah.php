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
                    <h3 class="text-primary">Masukkan Data Zakat Fitrah</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Zakat</a></li>
                        <li class="breadcrumb-item active">Masukkan Data Zakat Fitrah</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url(). 'admin/zakat/exec_add/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="name-zakat" class="form-control" placeholder="Pak Khusnul">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Jumlah</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" name="category-zakat" value="Zakat Fitrah">
                                            <input type="number" name="number-zakat" class="form-control input-default " placeholder="2,5">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="text-zakat" class="form-control input-default " placeholder="-">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Masukkan Data Zakat Fitrah</button>
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