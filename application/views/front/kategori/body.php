<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<!--===================== BREADCUM ===============================-->

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
                                <li>
                                    <a href="#">Produk</a>
                                </li>
                                <li class="active">
                                    <a href="#"><?php echo $title ?></a>
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

<!--===================== END BREADCUM ===============================-->
<?php   if($produk->result() == NULL){echo '<section class="four_o_four_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img src="https://www.averna.com/wp-content/themes/Divi/includes/builder/images/existing.gif" alt="404 page">
                    <div class="not_found">
                        <h3>Maaf! Data yang Anda Cari Tidak Ada</h3>                       
                    </div>
                </div>
            </div>
        </div>';} 
	    else{?>


<!--===================== END BREADCUM ===============================-->
<section class="products section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <aside class="sidebar product--sidebar">
                    <div class="sidebar-card card--category">
                        <a class="card-title" href="#collapse1" role="button" data-toggle="collapse"
                            aria-expanded="false" aria-controls="collapse1">
                            <h4>Kategori
                                <span class="lnr lnr-chevron-down"></span>
                            </h4>
                        </a>
                        <div class="collapse show collapsible-content" id="collapse1">
                            <ul class="card-content">
                                <?php
                                            $sql = $this->db->query("SELECT * FROM kategori ORDER BY judul_kategori"); // Memanggil kategori/ top kategori
                                            $data = $sql->result();
                                            foreach($data as $row)
                                            {
                                            $id_kat = $row->id_kategori;
                                            $sql2   =  $this->db->query("SELECT * FROM subkategori WHERE id_kat = '$id_kat' ORDER BY judul_subkategori "); // Memanggil subkategori/ middle kategori
                                            $data2  = $sql2->result();
                                            foreach($data2 as $row2)
                                            {
                                            $id_sub = $row2->id_subkategori;  
                                            $sql3 =  $this->db->query("SELECT * FROM supersubkategori WHERE id_subkat = '$id_sub' ORDER BY judul_supersubkategori "); // Memanggil subkategori/ middle kategori
                                            $data3 = $sql3->result();
                                            if($sql3->row() == TRUE)
                                            {
                                                foreach($data3 as $row3){$id_supersub = $row3->id_supersubkategori;
                                                    echo' 
                                                    <li>
                                                <a href=""'.base_url('kategori/read/').$row->slug_kat.'/'.$row2->slug_subkat.'/'.$row3->slug_supersubkat.'"">
                                                <span class="lnr lnr-chevron-right"></span>'.$row3->judul_supersubkategori.'
                                                
                                                </a>
                                                </li>  
                                                ';
                                            }
                                            }
                                            }
                                            }
                                        ?>
                            </ul>
                        </div>
                        <!-- end /.collapsible_content -->
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--filter">

                    </div>
                    <!-- end /.sidebar-card -->

                </aside>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="row">
                    <?php foreach($produk->result() as $kategori){ ?>
                    <?php if(isset($_SESSION['identity']) && $_SESSION['usertype'] == '5'){ ?>

                    <div class="col-lg-6 col-md-6">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <?php
                            if(empty($kategori->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                            else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$kategori->foto.'_thumb'.$kategori->foto_type."'> ";}
                            ?>
                                <div class="prod_btn">
                                    <a href="<?php echo base_url('produk/').$kategori->slug_produk ?>"
                                        class="transparent btn--sm btn--round">Info Produk</a>
                                    <a href="<?php echo ("$kategori->demo") ?>" target="_blank"
                                        class="transparent btn--sm btn--round">Demo</a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                    <h4 class="text-center">
                                        <?php echo character_limiter($kategori->judul_produk,'50') ?></h4>
                                </a>
                                <article class="text-center"><?php echo character_limiter($kategori->deskripsi,'100') ?>
                                </article>
                                <p class="text-center"><?php echo ($company_data->company_name) ?></p>
                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>&#82;&#112;<?php echo number_format($kategori->harga_diskon) ?></span>
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

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- start .single-product -->
                        <div class="product product--card">

                            <div class="product__thumbnail">
                                <?php
                                if(empty($kategori->foto)) {echo "<img style='height:222px'   src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                                else { echo "<img style='height:222px'  src='".base_url()."assets/images/produk/".$kategori->foto.'_thumb'.$kategori->foto_type."'> ";}
                            ?>
                                <div class="prod_btn">
                                    <a href="<?php echo base_url('auth/login')  ?>"
                                        class="transparent btn--sm btn--round"><del>INFO</del> | Harap Login </a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="<?php echo base_url('auth/login')  ?>" class="product_title">
                                    <h4 class="text-center">
                                        <?php echo character_limiter($kategori->judul_produk,'50') ?></h4>
                                </a>
                                <article class="text-center"><?php echo character_limiter($kategori->deskripsi,'100') ?>
                                </article>
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
                    <?php }}} ?>
                </div>
            </div>
        </div>
</section>

<?php $this->load->view('front/footer'); ?>