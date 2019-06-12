
<!--================================
    START LATEST NEWS
=================================-->
<section class="latest-news section--padding">
        <!-- start /.container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1><b>Post</b>
                            <span class="highlighted"><b>Terbaru</b></span>
                        </h1>
                        <blockquote>Banyak orang berpikiran bahwa blog ‘hanya sekedar’ media untuk mengeluarkan opini maupun menyampaikan pendapat. Tentu tidak selalu demikian. Beragam tema blog yang ada di internet seperti blog perusahaan, blog makanan, blog fashion, hingga blog hiburan, misalnya, dapat memberikan manfaat lebih dari sekedar random posting atau ‘bicara suka-suka’.</blockquote>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
            <?php foreach($blog_new_data as $blog){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="news">
                        <div class="news__thumbnail">
                            <?php
                            if(empty($blog->foto)) {echo "<img style='height:222px'  src='".base_url()."assets/images/no_image_thumb.png'>";}
                            else { echo " <img style='height:222px'  src='".base_url()."assets/images/blog/".$blog->foto.'_thumb'.$blog->foto_type."'> ";}
                            ?>
                        </div>
                        <div class="news__content text-center">
                            <a href="<?php echo base_url("blog/read/$blog->slug_blog ") ?>" class="news-title">
                                <h4><?php echo character_limiter($blog->judul_blog,50) ?></h4>
                            </a>
                            <article><?php echo character_limiter($blog->isi_blog,100) ?>.</article>
                        </div>
                        <div class="news__meta">
                            <div class="date">
                                <span class="lnr lnr-clock"></span>
                                <p><?php echo date("F Y", strtotime($blog->created)); ?></p>
                            </div>

                            <div class="other text-right">
                                <ul>
                                    <li>
                                        <span class="lnr lnr-user"></span>
                                        <span><?php echo $blog->created_by ?></span>
                                    </li>
                                    <!-- <li>
                                        <span class="lnr lnr-eye"></span>
                                        <span>345</span>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
<!--================================
    END LATEST NEWS
=================================-->

