<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('backend/inc/v_sidebar.php');
?>

    <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">List Data Zakat</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Zakat</a></li>
                        <li class="breadcrumb-item active">List Data Zakat</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <a href="<?php echo base_url(); ?>admin/zakat/fitrah/" class="btn btn-primary btn-rounded m-b-10 m-l-5">+ Tambah Data Zakat Fitrah</a>
                            <a href="<?php echo base_url(); ?>admin/zakat/mal/" class="btn btn-primary btn-rounded m-b-10 m-l-5">+ Tambah Data Zakat Mal</a>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Zakat</th>
                                                <th>Jumlah (Rupiah / Kg)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Zakat</th>
                                                <th>Jumlah (Rupiah / Kg)</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            foreach($zakat as $z){ 
                                        ?>

                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $z->name ?></td>
                                                <td><?php echo $z->category ?></td>
                                                <td><?php echo $z->total ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(). 'admin/zakat/delete/' .$z->id_zakat; ?>"><button type="button" class="btn btn-danger m-b-10 m-l-5">Hapus</button></a>
                                                </td>
                                            </tr>
                                        
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
    $this->load->view('backend/inc/v_footer.php');
?>