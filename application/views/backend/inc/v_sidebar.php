<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Menu Utama</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Manajemen </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>admin/dashboard/">Laporan </a></li>
                        <li><a href="<?php echo base_url(); ?>admin/people/">Jama'ah </a></li>
                        <li><a href="<?php echo base_url(); ?>admin/zakat/">Zakat </a></li>
                        <li><a href="<?php echo base_url(); ?>admin/infaq/">Infaq </a></li>
                    </ul>
                </li>
                <li class="nav-label">Berita</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Berita </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>admin/news/">List Berita</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/newscategory/">Kategori Berita</a></li>
                    </ul>
                </li>
                <li class="nav-label">Kegiatan</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-gear"></i><span class="hide-menu">Kegiatan </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>admin/event/">List Kegiatan</a></li>
                    </ul>
                </li>
                <li class="nav-label">Pengaturan</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-gear"></i><span class="hide-menu">Pengaturan </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>admin/settings/">Pengaturan Web</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/team/">Pengurus Masjid</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/settings/gallery/">Gallery Masjid</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>