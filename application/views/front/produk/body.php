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
            <img src="<?php echo base_url() ?>assets/fronted1/images/search.jpg" alt="images/search.jpg">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="search">
                        <div class="search__title">
                            <h3>pusat<b>{koding}</b>.com</h3>
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
                                    <a href="<?php echo base_url() ?>">Home</a>
                                </li>
                                <li>
                                    <a href="#">Produk</a>
                                </li>
                                <li class="active">
                                    <a href="#"><?php echo $produk->judul_produk ?></a>
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
<section class="single-product-desc">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="item-preview">
                    <div class="item__preview-slider">
                        <div class="prev-slide">
                            <?php
							if(empty($produk->foto)) {echo "<img class='img-thumbnail' src='".base_url()."assets/images/no_image_thumb.png' width='100%' height='400'>";}
							else{
							echo "
							<img src='".base_url()."assets/images/produk/".$produk->foto.'_thumb'.$produk->foto_type."' title='$produk->judul_produk' alt='$produk->judul_produk'  width='100%' height='400'>";}
							?>
                        </div>
                    </div>
                    <!-- end /.item--preview-slider -->

                    <div class="item__preview-thumb">
                        <div class="prev-thumb">
                            <div class="thumb-slider">
                                <div class="item-thumb">
                                    <?php
                                    if(empty($produk->foto)) {echo "<img class='img-thumbnail' src='".base_url()."assets/images/no_image_thumb.png'>";}
                                    else{
									echo "
									<img src='".base_url()."assets/images/produk/".$produk->foto.'_thumb'.$produk->foto_type."' title='$produk->judul_produk' alt='$produk->judul_produk' width='90' height='80'>";}
									?>
                                </div>
                            </div>
                            <!-- end /.thumb-slider -->

                            <div class="prev-nav thumb-nav">
                                <span class="lnr nav-left lnr-arrow-left"></span>
                                <span class="lnr nav-right lnr-arrow-right"></span>
                            </div>
                            <!-- end /.prev-nav -->
                        </div>

                        <div class="item-action">
                            <div class="action-btns">
                                <a href="#" class="btn btn--round btn--lg btn--icon">
                                    <span class="lnr lnr-eye"></span>Demo langsung</a>
                            </div>
                        </div>
                        <!-- end /.item__action -->
                    </div>
                    <!-- end /.item__preview-thumb-->


                </div>
                <!-- end /.item-preview-->

                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#product-details" class="active" aria-controls="product-details" role="tab"
                                    data-toggle="tab">Deskripsi</a>
                            </li>
                            <li>
                                <a href="#product-comment" aria-controls="product-comment" role="tab"
                                    data-toggle="tab">Komentar </a>
                            </li>
                            <li>
                                <a aria-controls="product-review" role="tab" data-toggle="tab">Review (BETA)
                                    <span></span>
                                </a>
                            </li>
                            <li>
                                <a aria-controls="product-support" role="tab" data-toggle="tab">Support (BETA)</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div class="tab-content">
                        <div class="fade show tab-pane product-tab active" id="product-details">
                            <div class="tab-content-wrapper">
                                <h1>Deskripsi Barang </h1>
                                <p><?php echo $produk->deskripsi ?></p>
                            </div>
                        </div>
                        <!-- end /.tab-content -->

                        <div class="fade tab-pane product-tab" id="product-comment">
                            <div class="thread">
                                <ul class="media-list thread-list">
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m1.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <span class="comment-tag buyer">Purchased</span>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- nested comment markup -->
                                        <ul class="children">
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/m2.png"
                                                                alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>AazzTech</h4>
                                                            <span>6 Hours Ago</span>
                                                        </div>
                                                        <span class="comment-tag author">Author</span>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                            justo ut sceleris que the mattis, leo quam aliquet congue
                                                            placerat mi id nisi interdum mollis. </p>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" src="images/m1.png"
                                                                alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4>Themexylum</h4>
                                                            <span>9 Hours Ago</span>
                                                        </div>
                                                        <span class="comment-tag buyer">Purchased</span>
                                                        <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                                            justo ut sceleris que the mattis, leo quam aliquet congue
                                                            placerat mi id nisi interdum mollis. </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea class="bla" name="reply-comment"
                                                        placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--md btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m3.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment"
                                                        placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m4.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment"
                                                        placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->

                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m5.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>Themexylum</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="images/m2.png"
                                                        alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment"
                                                        placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn--round">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </li>
                                    <!-- end single comment thread /.comment-->
                                </ul>
                                <!-- end /.media-list -->

                                <div class="pagination-area pagination-area2">
                                    <nav class="navigation pagination" role="navigation">
                                        <div class="nav-links">
                                            <a class="page-numbers current" href="#">1</a>
                                            <a class="page-numbers" href="#">2</a>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="next page-numbers" href="#">
                                                <span class="lnr lnr-arrow-right"></span>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                                <!-- end /.comment pagination area -->

                                <div class="comment-form-area">
                                    <h4>Leave a comment</h4>
                                    <!-- comment reply -->
                                    <div class="media comment-form">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="images/m7.png" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form action="#" class="comment-reply-form">
                                                <textarea name="reply-comment"
                                                    placeholder="Write your comment..."></textarea>
                                                <button class="btn btn--sm btn--round">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- comment reply -->
                                </div>
                                <!-- end /.comment-form-area -->
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing">
                        <div class="price">
                            <h1>

                                <sup>&#82;&#112;</sup><?php echo number_format($produk->harga_diskon) ?></h1>
                        </div>
                        <div class="purchase-button">
                            <a href="<?php echo base_url('cart/buy/').$produk->id_produk ?>"
                                class="btn btn--lg btn--round cart-btn bg-success">
                                <span class="lnr lnr-cart"></span> Beli</a>
                        </div>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->

                    <div class="sidebar-card card--metadata">
                        <ul class="data">
                            <li>
                                <p>
                                    <span class="lnr lnr-bookmark"></span>Diskon</p>
                                <span><?php echo $produk->diskon ?>%</span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-layers"></span>Berat</p>
                                <span><?php echo $produk->berat ?> /Gram</span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-tag"></span>Stok Produk</p>
                                <span><?php if($produk->stok > 0){echo "Tersedia";}else{echo "Kosong";} ?></span>
                            </li>
                        </ul>


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
                                    <span class="fa fa-star-half-o"></span>
                                </li>
                            </ul>
                            <span class="rating__count">( 26 Ratings )</span>
                        </div>
                        <!-- end /.rating -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Informasi Produk</h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label">Rilis</p>
                                <p class="info"><?php echo date("j F Y", strtotime($produk->modified));?></p>
                            </li>
                            <li>
                                <p class="data-label">Updated</p>
                                <p class="info"><?php echo date("j F Y", strtotime($produk->created));?> </p>
                            </li>
                            <li>
                                <p class="data-label">Kategori</p>
                                <p class="info"><?php echo $produk->judul_supersubkategori ?></p>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Development</h4>
                        </div>

                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="<?php echo base_url().'assets/images/company/'.$company_data->foto.$company_data->foto_type;?>"
                                    alt="logo image">
                            </div>

                            <div class="author">
                                <h4><?php echo $produk->updater ?></h4>

                            </div>
                            <!-- end /.author -->

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="fa fa-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <div class="author-btn">
                                <a href="<?php echo base_url('profil')?>" class="btn btn--sm btn--round">Lihat Profil</a>
                                <a href="#" class="btn btn--sm btn--round">Kirim Pesan</a>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                    </div>
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->
    
<!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <section class="products section--padding2">
        <div class="container">
        <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1> <b>Projek </b> 
                            <span class="highlighted"><b>Lainnya</b> </span>
                        </h1>
                        <p>"Sama rasa Beda Tampilan . Sama Bahan Beda Racikan" - pusatkoding.com</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                <div class="row">
                <?php foreach($produk_lainnya as $lainnya){ ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <?php
                                if(empty($lainnya->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                                else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$lainnya->foto.'_thumb'.$lainnya->foto_type."'> ";}
                                ?>
                                <div class="prod_btn">
                                    <a href="<?php echo base_url('produk/').$lainnya->slug_produk ?>" class="transparent btn--sm btn--round">Info Produk</a>
                                    <a href="<?php echo ("$lainnya->demo") ?>" target="_blank" class="transparent btn--sm btn--round">Demo</a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                    <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                    <h4 class="text-center"><?php echo character_limiter($lainnya->judul_produk,'50') ?></h4></a>
                                    <article class="text-center"><?php echo character_limiter($lainnya->deskripsi,'100') ?></article>
                                    <p class="text-center"><?php echo ($company_data->company_name) ?></p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                <span>&#82;&#112;<?php echo number_format($lainnya->harga_diskon) ?></span>
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
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>
</section>
<script type="text/javascript"
    src="//platform-api.sharethis.com/js/sharethis.js#property=5a979c495d0b9500130f346b&product=sticky-share-buttons">
</script>
<?php $this->load->view('front/footer'); ?>
<!--===================== END FOOTER ===================================-->