<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<section class="faq_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cardify faq_module ">
                    <div class="faq-title">
                        <span class="lnr lnr-cart"></span>
                        <h4>Total Keranjang (<?php echo $total_cart_navbar ?>)</h4>
                    </div>
                    <div class="card table-responsive padding">
                        <div class="card-body m-1">
                            <table class="table table-striped border-left">
                                <thead>
                                    <tr>
                                        <th class="">No.</th>
                                        <th class="">Barang</th>
                                        <th class="">Harga/Total</th>
                                        <th class="text-center" width="20%">Qty</th>
                                        <th class="text-center" width="20%">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($cart_data as $cart){ ?>
                                    <tr>
                                        <td class=""><?php echo $no++ ?></td>
                                        <td><?php echo character_limiter($cart->judul_produk,40) ?></td>
                                        <td class="">
                                            <?php echo number_format($cart->harga_diskon) ?>/
                                            <b><?php echo number_format($cart->subtotal) ?></b>
                                        </td>
                                        <form action="<?php echo base_url('cart/update/').$cart->produk_id ?>"
                                            method="post">
                                            <td class="">
                                                <input type="hidden" name="produk_id"
                                                    value="<?php echo $cart->produk_id ?>">
                                                <input type="number" name="qty" value="<?php echo $cart->total_qty ?>">
                                            </td>
                                            <td class="">
                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1"
                                                        class="btn btn-sm btn-success dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"> Option </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <button type="submit" name="update" class="dropdown-item"><i
                                                                class="fa fa-refresh"></i> Simpan Perubahan</button>
                                                        <button type="submit" name="delete" class=" dropdown-item"><i
                                                                class="fa fa-remove"></i> Hapus </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </form>
                                        <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="faqs">
                        <div class="panel-group accordion" role="tablist" id="accordion">
                            <div class="panel accordion__single" id="panel">
                                <div class="single_acco_title">
                                    <h4>
                                        <a data-toggle="collapse" href="#collapse3" class="collapsed"
                                            aria-expanded="false" data-target="#collapse3" aria-controls="collapse3">
                                            <span>Data Penerima</span>
                                            <i class="lnr lnr-chevron-down indicator"></i>
                                        </a>
                                    </h4>
                                </div>
                                <?php echo form_open('cart/checkout') ?>
                                <?php if(!empty($customer_data->id_trans)){ ?>
                                <input type="hidden" name="id_trans" value="<?php echo $customer_data->id_trans ?>">
                                <input type="hidden" name="total" id="total"
                                    value="<?php echo $total_berat_dan_subtotal->subtotal ?>" />
                                <input type="hidden" name="ongkir" id="ongkir" value="0" />
                                <?php } ?>
                                <div id="collapse3" class="panel-collapse collapse" aria-labelledby="panel"
                                    data-parent="#accordion">
                                    <div class="panel-body">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_tile">
                                                <span class="tiles__icon lnr lnr-user"></span>
                                                <h4 class="tiles__title">
                                                    <?php if($customer_data){echo $customer_data->name;} ?></h4>
                                                <div class="tiles__content">
                                                    <p> <b>Telepon :</b>
                                                        <?php if($customer_data){echo $customer_data->phone;} ?></p>
                                                    <address> <b>Alamat : </b>
                                                        <?php if($customer_data){echo $customer_data->address.', '.$customer_data->nama_kota.', '.$customer_data->nama_provinsi;}?>
                                                    </address>
                                                </div>
                                            </div>
                                            <!-- end /.contact_tile -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end /.accordion__single -->
                        </div>
                        <!-- end /.accordion -->
                    </div>
                </div>
                <!-- end /.cardify -->
            </div>
            <!-- end /.col-md-8 -->
            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="information_module payment_options">
                        <div class="toggle_title">
                            <h4>Pilih Kurir Pengiriman</h4>
                        </div>
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
                                <span><?php echo $total_berat_dan_subtotal->subtotal ?></span>
                            </li>
                            <li>
                                <p>
                                    <span class="lnr lnr-tag"></span>Grand Total</p>
                                <span>
                                    <h3><sup>Rp</sup><b id="grandtotal"></b></h3>
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