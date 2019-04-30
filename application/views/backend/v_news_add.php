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
                    <h3 class="text-primary">Buat Berita Baru</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
                        <li class="breadcrumb-item active">Buat Berita Baru</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url(). 'admin/news/exec_add/'; ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Judul Berita</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="title-news" class="form-control input-default " placeholder="Judul Berita">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Kategori</label>
                                        <div class="col-sm-8">
                                            <select name="category-news" class="form-control">
                                                <?php 
                                                    foreach($news_category as $c){ 
                                                ?>
                                                <option><?php echo $c->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-8 control-label">Isi Berita</label>
                                        <textarea name="text-news" class="textarea_editor form-control" rows="15" placeholder="Isi berita disini ..." style="height:450px"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Buat Berita</button>
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