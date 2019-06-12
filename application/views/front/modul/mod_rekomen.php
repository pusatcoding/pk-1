
 <!--================================
    START FEATURED PRODUCT AREA
=================================-->
<section class="featured-products bgcolor  section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area ">
                        <div class="product__title">
                            <h2>Rekomendasi Untuk Anda</h2>
                        </div>

                        <div class="product__slider-nav rounded">
                            <span class="lnr lnr-chevron-left nav_left"></span>
                            <span class="lnr lnr-chevron-right nav_right"></span>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>

        <!-- start .featured-product-slider -->



        <div class="container">
            <div class="row">
                <div class="col-md-12 no0-padding">
                    <div class="featured-product-slider prod-slider1">
                    <?php foreach($featured_data as $featured){ ?>
                        <div class="featured__single-slider">
                            <div class="featured__preview-img">
                                <img style="height:450px" src="<?php echo base_url('assets/images/produk/').$featured->foto.$featured->foto_type ?>" alt="Featured products">
                                <div class="prod_btn ">
                                    <a href="<?php echo base_url('produk/').$featured->slug_produk ?>" class="transparent btn--sm btn--round">More Info</a>
                                    <a href="<?php echo base_url() ?>" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                            </div>
                            <!-- end /.featured__preview-img -->

                            <div class="featured__product-description">
                                <div class="product-desc desc--featured">
                                    <a href="single-product.html" class="product_title">
                                        <h4><?php echo character_limiter($featured->judul_produk,'100') ?></h4>
                                    </a>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="<?php echo base_url().'assets/images/company/'.$company_data->foto.$company_data->foto_type;?>" alt="author image">
                                            <p>                                           
                                                <a href="#"><?php echo ($company_data->company_name) ?></a>                                        
                                            </p>
                                        </li>
                                        
                                    </ul>
                                    <!-- end /.titlebtm -->

                                    <p><?php echo character_limiter($featured->deskripsi,'60') ?>
                                    </p>
                                </div>
                                <!-- end /.product-desc -->

                                <div class="product_data">
                                    <div class="tags tags--round">
                                        <ul>
                                            <li>
                                                <a href="#">website</a>
                                            </li>
                                            <li>
                                                <a href="#">plugin</a>
                                            </li>
                                            <li>
                                                <a href="#">landing page</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.tags -->
                                    <div class="product-purchase featured--product-purchase">
                                        <div class="price_love">
                                            <span><del>&#82;&#112;<?php echo number_format($featured->harga_normal) ?></del> - &#82;&#112;<?php echo number_format($featured->harga_diskon) ?></span>
                                            
                                            <span class="notification_count bg-danger">DISC <?php echo $featured->diskon ?> <i class="fa fa-percent"></i></span>
                                        </div>
                                        <!-- <div class="sell">
                                            <p>
                                                <span class="lnr lnr-cart"></span>
                                                <span><?php echo $total_cart_navbar ?></span>
                                            </p>
                                        </div> -->

                                        <div class="rating product--rating">
                                            <ul>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end /.product-purchase -->
                                </div>
                            </div>
                            <!-- end /.featured__product-description -->
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <!-- end /.featured__preview-img -->
        </div>
        <!-- end /.featured-product-slider -->
    </section>
    <!--================================
    END FEATURED PRODUCT AREA
=================================-->
