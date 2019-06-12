

<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>


        <!--================================
            START LANDING BRED
        =================================-->
            <section class="hero-area bgimage">
                <div class="bg_image_holder">
                    <img src="images/hero_area_bg1.jpg" alt="background-image">
                </div>
                <!-- start hero-content -->
                <div class="hero-content content_above">
                    <!-- start .contact_wrapper -->
                    <div class="content-wrapper">
                        <!-- start .container -->
                        <div class="container">
                            <!-- start row -->
                            <div class="row">
                                <!-- start col-md-12 -->
                                <div class="col-md-12">
                                    <div class="hero__content__title">
                                        <h1>
                                            <span class="light">pusat<b>{koding}</b>.com</span>
                                            <span class="bold count"><?php echo $total_produk ?></span><span class="bold"> Total Project Menunggumu </span>
                                        </h1>
                                       <p class="tagline"> "Sama rasa Beda Tampilan . Sama Bahan Beda Racikan" - pusatkoding.com</p>
                                    </div>

                                    <!-- start .hero__btn-area-->
                                    <div class="hero__btn-area">
                                        <a href="all-products.html" class="btn btn--round btn--lg">View All Products</a>
                                        <a href="all-products.html" class="btn btn--round btn--lg">Popular Products</a>
                                    </div>
                                    <!-- end .hero__btn-area-->
                                </div>
                                <!-- end /.col-md-12 -->
                            </div>
                            <!-- end /.row -->
                        </div>
                        <!-- end /.container -->
                    </div>
                    <!-- end .contact_wrapper -->
                </div>
                <!-- end hero-content -->

                <!--start search-area -->
                <div class="search-area">
                    <!-- start .container -->
                    <div class="container">
                        <!-- start .container -->
                        <div class="row">
                            <!-- start .col-sm-12 -->
                            <div class="col-sm-12">
                                <!-- start .search_box -->
                                <div class="search_box">
                                <?php echo form_open('produk/cari_produk') ?>
                                        <input type="text" name="cari"  class="text_field" placeholder="Search your products...">                                
                                        <button type="submit" class="search-btn btn--lg">Search Now</button>
                                <?php echo form_close()?>
                                </div>
                                <!-- end ./search_box -->
                            </div>
                            <!-- end /.col-sm-12 -->
                        </div>
                        <!-- end /.row -->
                    </div>
                    <!-- end /.container -->
                </div>
                <!--start /.search-area -->
            </section>
        <!--================================
            END LANDING BRED
        =================================-->

        <!--================================
            START FEATURE AREA
        =================================-->
            <?php $this->load->view('front/home/banner'); ?>
        <!--================================
            END FEATURE AREA
        =================================-->

        <!--================================
            PRODUK REKOMENDASI
        =================================-->
            <?php $this->load->view('front/modul/mod_rekomen'); ?>
        <!--================================
            END PRODUK REKOMENDASI
        =================================-->
        
        <!--================================
            START PRODUK TERBARU
        =================================-->
            <?php $this->load->view('front/home/produk_new'); ?>   
            <!--================================
            END PRODUK TERBARU
        =================================-->

        <!--================================
            START BLOG TERBARU
        =================================-->
            <?php $this->load->view('front/home/blog_new'); ?>
        <!--================================
            END BLOG TERBARU
        =================================-->


<?php $this->load->view('front/footer'); ?>
<div class="row"><?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?></div>


