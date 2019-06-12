<!-- 
/* PK ECOMMERCE
 *
 * WEB Ecommerce Berbasis PHP Dengan Menggunakan  Framework CI
 *
 * Developed by pusatkoding.com
 * Copyright (c) 2019, Nawumi Technology
 *
 * @author	Azmi ( Arena PHP )
 * @Development	Nazrul 
 * @Frontend By ©2018 MartPlace. All rights reserved. Created by AazzTech
 * @Backend By Template 
*/ -->

<!--===================== STARTER CONTENT ===============================-->
<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<!--===================== STARTER CONTENT ===============================-->

<!--===================== BREADCUM ======================================-->
<section class="search-wrapper">
    <div class="search-area2 bgimage">
        <div class="bg_image_holder" style="background-image: url(&quot;images/search.jpg&quot;); opacity: 1;">
            <img src="images/search.jpg" alt="images/search.jpg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <h3><span>39</span> Project Yang Selalu Menunggumu</h3>
                        </div>
                        <div class="search__field">
                            <?php echo form_open('produk/cari_produk') ?>
                            <div class="field-wrapper">
                                <input class="relative-field rounded" name="cari" type="text"
                                    placeholder="Search your products">
                                <button class="btn btn--round" type="submit">Search</button>
                            </div>
                            <?php echo form_close() ?>
                        </div>
                        <div class="breadcrumb">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">Katalog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.search-area2 -->
</section>
<!--===================== END BREADCUM ==================================-->

<!--===================== ALL  ==========================================-->
<section class="products section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="row">
                <?php foreach($katalog_data as $katalog){ ?>
                <?php if(isset($_SESSION['identity']) && $_SESSION['usertype'] == '5'){ ?>
                 
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <?php
                            if(empty($katalog->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                            else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$katalog->foto.'_thumb'.$katalog->foto_type."'> ";}
                            ?>
                            <div class="prod_btn">
                                <a href="<?php echo base_url('produk/').$katalog->slug_produk ?>" class="transparent btn--sm btn--round">Info Produk</a>
                                <a href="<?php echo ("$katalog->demo") ?>" target="_blank" class="transparent btn--sm btn--round">Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                                <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                <h4 class="text-center"><?php echo character_limiter($katalog->judul_produk,'50') ?></h4></a>
                                <article class="text-center"><?php echo character_limiter($katalog->deskripsi,'100') ?></article>
                                <p class="text-center"><?php echo ($company_data->company_name) ?></p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                            <span>&#82;&#112;<?php echo number_format($katalog->harga_diskon) ?></span>
                            </div>
                            <div class="rating product--rating float-right">
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
                    <!-- end /.single-product -->
                </div>
                <?php } else { ?>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <?php
                                if(empty($katalog->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                                else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$katalog->foto.'_thumb'.$katalog->foto_type."'> ";}
                            ?>
                            <div class="prod_btn">
                                <a href="<?php echo base_url('auth/login')  ?>" class="transparent btn--sm btn--round"><del>INFO</del> |  Harap Login </a>
                           </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                                <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                <h4 class="text-center"><?php echo character_limiter($katalog->judul_produk,'50') ?></h4></a>
                                <article class="text-center"><?php echo character_limiter($katalog->deskripsi,'100') ?></article>
                                <p class="text-center"><?php echo ($company_data->company_name) ?></p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                            <span>&#82;&#112; Harap Login</span>
                            </div>
                            <div class="rating product--rating float-right">
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
                    <!-- end /.single-product -->
                </div>
                <?php }?>
                <?php }?>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-area categorised_item_pagination">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--===================== END ALL  =====================================-->

<!--===================== FOOTER========================================-->
<?php $this->load->view('front/footer'); ?>
<!--===================== END FOOTER ===================================-->