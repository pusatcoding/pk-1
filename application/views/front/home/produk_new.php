
    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title ">
                        <h1>Project
                            <span><b>Terbaru</b></span>
                        </h1>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div class="row">
                <?php foreach($produk_new_data as $produk){ ?>
                <?php if(isset($_SESSION['identity']) && $_SESSION['usertype'] == '5'){ ?>
                 
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card">

                        <div class="product__thumbnail">
                            <?php
                            if(empty($produk->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                            else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$produk->foto.'_thumb'.$produk->foto_type."'> ";}
                            ?>
                            <div class="prod_btn">
                                <a href="<?php echo base_url('produk/').$produk->slug_produk ?>" class="transparent btn--sm btn--round">Info Produk</a>
                                <a href="<?php echo ("$produk->demo") ?>" target="_blank" class="transparent btn--sm btn--round">Demo</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                                <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                <h4 class="text-center"><?php echo character_limiter($produk->judul_produk,'50') ?></h4></a>
                                <article class="text-center"><?php echo character_limiter($produk->deskripsi,'100') ?></article>
                                <p class="text-center"><?php echo ($company_data->company_name) ?></p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                            <span>&#82;&#112;<?php echo number_format($produk->harga_diskon) ?></span>
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
                                if(empty($produk->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                                else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$produk->foto.'_thumb'.$produk->foto_type."'> ";}
                            ?>
                            <div class="prod_btn">
                                <a href="<?php echo base_url('auth/login')  ?>" class="transparent btn--sm btn--round"><del>INFO</del> |  Harap Login </a>
                           </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                                <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                <h4 class="text-center"><?php echo character_limiter($produk->judul_produk,'50') ?></h4></a>
                                <article class="text-center"><?php echo character_limiter($produk->deskripsi,'100') ?></article>
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
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a href="<?php echo base_url('auth/login')  ?>" class="btn btn--lg btn--round"> Harap Login</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>