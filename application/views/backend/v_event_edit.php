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
                    <h3 class="text-primary">Ubah Kegiatan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Kegiatan</a></li>
                        <li class="breadcrumb-item active">Ubah Kegiatan</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php foreach($event as $e){ ?>
                                <form action="<?php echo base_url(). 'admin/event/exec_edit/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Judul Kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" name="id-event" value="<?php echo $e->id_task ?>">
                                            <input type="text" name="title-event" class="form-control input-default " value="<?php echo $e->title ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Tanggal Kegiatan</label>
                                        <div class="col-sm-8">
                                            <input type="date" name="date-event" class="form-control" value="<?php echo $e->date ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Pemateri/Penanggungjawab</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="people-event" class="form-control input-default " value="<?php echo $e->people ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Keterangan</label>
                                        <textarea name="text-event" class="textarea_editor form-control" rows="15" style="height:450px"><?php echo $e->information ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Ubah Kegiatan</button>
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