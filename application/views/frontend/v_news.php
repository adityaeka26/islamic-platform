<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
    $this->load->view('frontend/inc/v_header.php');
    $this->load->view('frontend/inc/v_menu.php');
?>        
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                        <?php foreach($news as $n){ ?>
                            <article class="row blog_item">
                               <div class="col-md-3">
                                   <div class="blog_info text-right">
                                        <ul class="blog_meta list">
                                            <li><a href="#">Admin<i class="lnr lnr-user"></i></a></li>
                                            <li><a href="#"><?php echo $n->date_insert ?><i class="lnr lnr-calendar-full"></i></a></li>
                                        </ul>
                                    </div>
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?php echo base_url(); ?>assets/frontend/img/dummy/no-image-blog-main.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2><?php echo $n->title ?></h2></a>
                                            <p><?php echo $n->content ?></p>
                                            <a href="<?php echo base_url(); ?>news/detail/<?php echo $n->id_news ?>" class="white_bg_btn">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Kategori Berita</h4>
                                <?php foreach($category as $c){ ?>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p><?php echo $c->name ?></p>
                                            <p><?php $controller->count_news_data($c->name); ?></p>
                                        </a>
                                    </li>														
                                </ul>
                                <?php } ?>
                                <div class="br"></div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
