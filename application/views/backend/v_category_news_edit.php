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
                    <h3 class="text-primary">Ubah Kategori Berita</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
                        <li class="breadcrumb-item active">Ubah Kategori Berita</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <?php foreach($news_category as $n){ ?>
                                <form action="<?php echo base_url(). 'admin/newscategory/exec_edit/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Nama Kategori</label>
                                        <div class="col-sm-8">
                                            <input type="hidden" name="id-category" value="<?php echo $n->id_category ?>">
                                            <input type="text" name="title-category-news" class="form-control input-default " value="<?php echo $n->name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Ubah Kategori</button>
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