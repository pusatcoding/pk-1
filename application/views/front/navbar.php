<body class="preload home1 mutlti-vendor">
    <!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo base_url().'assets/images/company/'.$company_data->foto.$company_data->foto_type;?>" alt="logo image">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">
                            

                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-cart"></span>
                                            <span class="notification_count purch"><?php echo $total_cart_navbar ?></span>
                                        </div>

                                        <div class="dropdowns dropdown--cart">
                                            <div class="cart_area">
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                            <img src="<?php echo base_url()?>assets/template/fronted1/images/capro1.jpg" alt="cart product thumbnail">
                                                        </div>

                                                        <div class="info">
                                                            <a class="title" href="single-product.html">Finance and
                                                                Consulting Business Theme</a>
                                                            <div class="cat">
                                                                <a href="#">
                                                                    <img src="<?php echo base_url()?>assets/template/fronted1/images/catword.png" alt="">Wordpress</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product__action">
                                                        <a href="#">
                                                            <span class="lnr lnr-trash"></span>
                                                        </a>
                                                        <p>$60</p>
                                                    </div>
                                                </div>
                                                <div class="cart_product">
                                                    <div class="product__info">
                                                        <div class="thumbn">
                                                            <img src="<?php echo base_url()?>assets/template/fronted1/images/capro2.jpg" alt="cart product thumbnail">
                                                        </div>

                                                        <div class="info">
                                                            <a class="title" href="single-product.html">Flounce -
                                                                Multipurpose OpenCart Theme</a>
                                                            <div class="cat">
                                                                <a href="#">
                                                                    <img src="<?php echo base_url()?>assets/template/fronted1/images/catword.png" alt="">Wordpress</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product__action">
                                                        <a href="#">
                                                            <span class="lnr lnr-trash"></span>
                                                        </a>
                                                        <p>$60</p>
                                                    </div>
                                                </div>
                                                <div class="total">
                                                    <p>
                                                        <span>Total :</span>$80</p>
                                                </div>
                                                <div class="cart_action">
                                                    <a class="go_cart" href="cart.html">View Cart</a>
                                                    <a class="go_checkout" href="checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php if(isset($_SESSION['identity']) && $_SESSION['usertype'] == '5'){ ?>   
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                            
                            <div class="author-author__info inline has_dropdown">
                                <!-- <div class="author__avatar">
                                    <img src="<?php echo base_url()?>assets/template/fronted1/images/usr_avatar.png" alt="user avatar">

                                </div> -->
                                <div class="autor__info">
                                <span class="author-area__seller-btn inline"> Hii! <?php echo $this->session->userdata('username') ?></span>
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('cart/history/')?>">
                                            <span class="lnr lnr-user"></span>Riwayat Order </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('auth/profil') ?>">
                                            <span class="lnr lnr-user"></span> Profil Saya</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('auth/edit_profil/').$this->session->userdata('user_id') ?>">
                                            <span class="lnr lnr-cog"></span> Edit Profil</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url('auth/logout')  ?>">
                                            <span class="lnr lnr-cart"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php } else { ?>
                                <a href="<?php echo base_url('auth/login')  ?>" class="author-area__seller-btn inline">Login | Register</a>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--end /.author-author__info-->
                        </div>

                        
                        <!-- end .author-area -->

                        <!-- NAVBAR MOBILE -->
                        
                        <!-- NAVBAR MOBILE  -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->
                            <div class="mainmenu__search">
                                <?php echo form_open('produk/cari_produk') ?>   
                                    <div class="searc-wrap">
                                        <input type="text" name="cari" placeholder="Search product">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="lnr lnr-magnifier"></span>
                                        </button>
                                    </div>
                                <?php echo form_close() ?>
                            </div>
                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li>
                                        <a href="<?php echo base_url() ?>">HOME</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('produk/katalog') ?>">ALL</a>
                                    </li>
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
                                    echo'  
                                    <li class="has_dropdown">
                                        <a href="'.base_url('kategori/read/').$row->slug_kat.'/'.$row2->slug_subkat.'">'.$row2->judul_subkategori.'</a>
                                          <div class="dropdowns dropdown--menu">';
                                        $sql3 =  $this->db->query("SELECT * FROM supersubkategori WHERE id_subkat = '$id_sub' ORDER BY judul_supersubkategori "); // Memanggil subkategori/ middle kategori
                                        $data3 = $sql3->result();
                                        if($sql3->row() == TRUE)
                                          {

                                            echo'
                                            <ul>';
                                                foreach($data3 as $row3){$id_supersub = $row3->id_supersubkategori;
                                                echo'   
                                                <li><a href="'.base_url('kategori/read/').$row->slug_kat.'/'.$row2->slug_subkat.'/'.$row3->slug_supersubkat.'">'.$row3->judul_supersubkategori.'</a></li>';
                                          }
                                            echo' 
                                            </ul>
                                        </div>
                                    </li>';
                                        }
                                        else {
                                          echo 'BETA';
                                             }
                                        }

                                      }
                                    ?>

                                    <li>
                                        <a href="contact.html">contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
