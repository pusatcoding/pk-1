<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<!--===================== BREADCUM ===============================-->
<?php if(isset($_SESSION['identity']) && $_SESSION['usertype'] == '5'){ ?>
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
                                    <a href="#">All Products</a>
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
<?php   if($hasil_pencarian == NULL){echo '<section class="four_o_four_area section--padding2">
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
                    <?php foreach($hasil_pencarian as $hasil_pencarian){ ?>
                    <div class="col-lg-4 col-md-6">
                        <!-- start .single-product -->
                        <div class="product product--card product--card-small">

                            <div class="product__thumbnail">
                                <?php
									if(empty($hasil_pencarian->foto)) {echo "<img src='".base_url()."assets/images/no_image_thumb.png'>";}
									else { echo " <img src='".base_url()."assets/images/produk/".$hasil_pencarian->foto.'_thumb'.$hasil_pencarian->foto_type."'> ";}
								?>
                                <div class="prod_btn">
                                    <a href="<?php echo base_url("produk/$hasil_pencarian->slug_produk ") ?>"
                                        class="transparent btn--sm btn--round">INFO</a>
                                    <a href="#" class="transparent btn--sm btn--round">Live Demo</a>
                                </div>
                                <!-- end /.prod_btn -->
                            </div>
                            <!-- end /.product__thumbnail -->

                            <div class="product-desc">
                                <a href="#" class="product_title">
                                    <h4><?php echo character_limiter($hasil_pencarian->judul_produk,25) ?></h4>
                                </a>
                                <ul class="titlebtm">
                                    <!-- <li>
                                        <img class="auth-img" src="images/auth3.jpg" alt="author image">
                                        <p>
                                            <a href="#">AazzTech</a>
                                        </p>
                                    </li> -->
                                    <li class="out_of_class_name">
                                        <!-- <div class="sell">
                                            <p>
                                                <span class="lnr lnr-cart"></span>
                                                <span>27</span>
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
                                                    <span class="fa fa-star-half-o"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <!-- end /.product-desc -->

                            <div class="product-purchase">
                                <div class="price_love">
                                    <span>&#82;&#112;<?php echo number_format($hasil_pencarian->harga_diskon) ?></span>
                                </div>
                            </div>
                            <!-- end /.product-purchase -->
                        </div>
                        <!-- end /.single-product -->
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
	</div>
</section>
<?php $this->load->view('front/footer'); ?>
<?php } else { ?>
    <?php redirect('auth/login'); ?> 
<?php } ?>


