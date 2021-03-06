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
                    <h3 class="text-primary">Buat Kegiatan Baru</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Kegiatan</a></li>
                        <li class="breadcrumb-item active">Buat Kegiatan Baru</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url(). 'admin/event/exec_add/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Judul Kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="title-event" class="form-control input-default " placeholder="Judul Kegiatan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Tanggal Kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="date-event" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Pemateri/Penanggungjawab</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="people-event" class="form-control input-default " placeholder="Pemateri/Penanggungjawab">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Keterangan</label>
                                        <textarea name="text-event" class="textarea_editor form-control" rows="15" placeholder="Enter text ..." style="height:450px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Buat Kegiatan</button>
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