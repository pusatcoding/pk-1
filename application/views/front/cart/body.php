<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Checkout</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Checkout</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<section class="products section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($cart_data as $cart){ ?>
                <div class="product product--list product--list-small">
                    <div class="product__thumbnail">

                        <?php
                            if(empty($cart->foto)) {echo "<img  src='".base_url()."assets/template/fronted1/images/produk_kosong.png'>";}
                            else { echo "<img  src='".base_url()."assets/images/produk/".$cart->foto.'_thumb'.$cart->foto_type."'> ";}
                            ?>
                        <form action="<?php echo base_url('cart/update/').$cart->produk_id ?>" method="post">
                            <div class="prod_btn">
                                <a href="#" class="btn btn-sm btn--round btn-danger" data-target="#myModal2"
                                    data-toggle="modal">Hapus</a>

                            </div>
                    </div>
                    <div class="modal fade rating_modal item_remove_modal" id="myModal2" tabindex="-1" role="dialog"
                        aria-labelledby="myModal2">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Apakah Kamu yakin Menghapus</h3>
                                    <p> Projek <b><?php echo character_limiter($cart->judul_produk,40) ?></b> Ini Dari
                                        Keranjang Anda ?</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!-- end /.modal-header -->

                                <div class="modal-body">
                                    <button name="delete" type="submit"
                                        class="btn btn--icon btn-sm btn--round btn-danger">
                                        <span class="lnr lnr-trash"></span>Saya Yakin</button>
                                    <button class="btn btn--round modal_close" data-dismiss="modal">Batal</button>
                                </div>
                                <!-- end /.modal-body -->
                            </div>
                        </div>
                    </div>
                    <div class="product__details text-center">
                        <div class="product-desc">
                            <a href="#" class="product_title">
                                <h4><?php echo character_limiter($cart->judul_produk,40) ?></h4>
                            </a>
                            <p><?php echo character_limiter($cart->deskripsi,20) ?></p>
                            <ul class="titlebtm">
                                <li class="product_cat">
                                    <a href="#">
                                        <span class="lnr lnr-cart"></span> QTY : <?php echo $cart->total_qty ?>
                                    </a>
                                    <a href="#" id="drop2" class="dropdown-trigger" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="true">
                                        <span class="lnr lnr-pencil setting-icon"></span>
                                    </a>
                                    <div class="options dropdown-menu" aria-labelledby="drop2">
                                        <ul>
                                            <li>
                                                <input type="hidden" name="produk_id"
                                                    value="<?php echo $cart->produk_id ?>">
                                            </li>
                                            <li class="m-3">
                                                <input type="number" name="qty" value="<?php echo $cart->total_qty ?>">
                                            </li>
                                            <li class="text-center">
                                                <button name="update" type="submit"
                                                    class="btn btn--icon btn-sm btn--round btn-secondary">
                                                    <span class="lnr lnr-pencil"></span>Update</button>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="product-purchase ml-4">
                            <div class="price_love">
                                <span>Total : <?php echo number_format($cart->subtotal) ?>
                                </span>
                                <b><?php echo number_format($cart->harga_diskon) ?>/PCS</b>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php } ?>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="information_module payment_options">
                        <div class="toggle_title">
                            <h4>Pilih Kurir Pengiriman</h4>
                        </div>
                        <?php echo form_open('cart/checkout') ?>
                        <?php if(!empty($customer_data->id_trans)){ ?>
                        <input type="hidden" name="id_trans" value="<?php echo $customer_data->id_trans ?>">
                        <input type="hidden" name="total" id="total"
                            value="<?php echo $total_berat_dan_subtotal->subtotal ?>" />
                        <input type="hidden" name="ongkir" id="ongkir" value="0" />
                        <?php } ?>
                        <div class="select-wrap select-wrap2">
                            <select name="kurir" class="kurir">
                                <option value="">Pilih Jenis Kurir</option>
                                <?php
									$kurir=array('jne','pos','tiki');
									foreach($kurir as $data_kurir){
								?>
                                <option value="<?=$data_kurir;?>">
                                    <?=strtoupper($data_kurir);?></option>
                                <?php } ?>
                            </select>
                            <span class="lnr lnr-chevron-down"></span>
                        </div>
                        <ul id="kuririnfo">
                            <li id="kurirserviceinfo"></li>
                        </ul>
                    </div>
                    <div class="sidebar-card card--metadata">
                        <ul class="data">
                            <li>
                                <p>
                                    <span class="lnr lnr-layers"></span>Berat</p>
                                <span><?php echo $total_berat_dan_subtotal->total_berat ?> (Gram) /
                                    <?php echo berat($total_berat_dan_subtotal->total_berat) ?> (KG)</span>
                            </li>
                            <li>
                                <p>
                                    <span class="fa fa-truck"></span>Ongkir</p>
                                <span><b id="totalongkir"></b></span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-bookmark"></span>Subtotal</p>
                                <span><sup>Rp</sup>
                                    <?php echo number_format($total_berat_dan_subtotal->subtotal) ?></span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-tag"></span>Grand Total</p>
                                <span>
                                    <h3><sup>Rp</sup> <b id="grandtotal"></b></h3>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-card ">
                        <div class="author-btn text-center">
                            <a href="<?php echo base_url() ?>" name="hapus"
                                class="btn btn--sm btn--round bg-info">Lanjut
                                Belanja</a>

                            <button name="checkout" type="submit" class="btn btn--sm btn--round bg-success">
                                Checkout</button>
                        </div>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
        <?php echo form_close() ?>
    </div>
    <!-- end /.container -->
</section>
<!--================================
            END FAQ AREA
    =================================-->
<script type="text/javascript">
$(document).ready(function() {
    $(".kurir").each(function() {
        $(this).on("change", function() {
            var did = $(this).val();
            var berat = "<?php echo $total_berat_dan_subtotal->total_berat ?>";
            var kota = "<?php echo $customer_data->kota ?>";
            $.ajax({
                    method: "get",
                    dataType: "html",
                    url: "<?=base_url();?>cart/kurirdata",
                    data: "kurir=" + did + "&berat=" + berat + "&kota=" + kota,
                })
                .done(function(x) {
                    $("#kurirserviceinfo").html(x);
                    $("#kuririnfo").show();
                })
                .fail(function() {
                    $("#kurirserviceinfo").html("");
                    $("#kuririnfo").hide();
                });
        });
    });
    hitung();
});

function hitung() {
    var total = $('#total').val();
    var ongkir = $("#ongkir").val();
    var totalongkir = ongkir;
    var bayar = (parseFloat(total) + parseFloat(totalongkir));
    if (parseFloat(ongkir) > 0) {
        $("#oksimpan").show();
    } else {
        $("#oksimpan").hide();
    }
    $("#totalongkir").html(totalongkir);
    $("#grandtotal").html(bayar);
}
</script>
<?php $this->load->view('front/footer'); ?>