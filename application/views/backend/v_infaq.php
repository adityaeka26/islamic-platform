<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('backend/inc/v_sidebar.php');
?>

    <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">List Infaq</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen</a></li>
                        <li class="breadcrumb-item active">List Infaq</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <a href="<?php echo base_url(); ?>admin/infaq/add/" class="btn btn-primary btn-rounded m-b-10 m-l-5">+ Tambah Catatan Infaq</a>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Jenis Infaq</th>
                                                <th>Jumlah</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Jenis Infaq</th>
                                                <th>Jumlah</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                        <?php 
                                            $no = 1;
                                            foreach($infaq as $i){ 
                                        ?>

                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $i->date ?></td>
                                                <td><?php echo $i->category ?></td>
                                                <td>Rp. <?php echo $i->total ?></td>
                                                <td><?php echo $i->info ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(). 'admin/infaq/edit/' .$i->id_infaq; ?>"><button type="button" class="btn btn-warning m-b-10 m-l-5">Ubah</button></a>
                                                    <a href="<?php echo base_url(). 'admin/infaq/delete/' .$i->id_infaq; ?>"><button type="button" class="btn btn-danger m-b-10 m-l-5">Hapus</button></a>
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