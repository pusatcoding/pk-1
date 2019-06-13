<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>

<!--================================
        START BREADCRUMB AREA
    =================================-->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Invoice</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Invoice</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!--================================
        END BREADCRUMB AREA
    =================================-->

<!--================================
            START DASHBOARD AREA
    =================================-->
<section class="dashboard-area">
    <div class="dashboard_menu_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="dashboard_menu">
                        <li>
                            <a href="dashboard.html">
                                <span class="lnr lnr-home"></span>Dashboard</a>
                        </li>
                        <li>
                            <a href="dashboard-setting.html">
                                <span class="lnr lnr-cog"></span>Setting</a>
                        </li>
                        <li>
                            <a href="dashboard-purchase.html">
                                <span class="lnr lnr-cart"></span>Purchase</a>
                        </li>
                        <li>
                            <a href="dashboard-add-credit.html">
                                <span class="lnr lnr-dice"></span>Add Credits</a>
                        </li>
                        <li>
                            <a href="dashboard-statement.html">
                                <span class="lnr lnr-chart-bars"></span>Statements</a>
                        </li>
                        <li>
                            <a href="dashboard-upload.html">
                                <span class="lnr lnr-upload"></span>Upload Items</a>
                        </li>
                        <li>
                            <a href="dashboard-manage-item.html">
                                <span class="lnr lnr-briefcase"></span>Manage Items</a>
                        </li>
                        <li>
                            <a href="dashboard-withdrawal.html">
                                <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                        </li>
                    </ul>
                    <!-- end /.dashboard_menu -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->

    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="pull-left">
                            <div class="dashboard__title">
                                <h3>Invoice <p>PK#<?php echo $customer_data->id_trans ?></p>
                                </h3>
                            </div>
                        </div>

                        <div class="pull-right">
                            <?php echo form_open('cart/download_invoice/'.$customer_data->id_trans) ?>
                            <button type="submit" name="download_invoice" class="btn btn--round btn--sm">Download
                                Invoice</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="invoice">
                        <div class="invoice__meta">
                            <div class="address">
                                <img src="<?php echo base_url().'assets/images/company/'.$company_data->foto.$company_data->foto_type;?>"
                                    alt="logo image" width="230px">
                            </div>
                            <div class="date_info">
                                <h5 class="bold"><?php echo $customer_data->name ?></h5>
                                <p><?php echo $customer_data->phone ?></p>
                                <p><?php echo $customer_data->address ?></p>
                                <p><?php echo $customer_data->nama_kota ?></p>
                                <p><?php echo $customer_data->nama_provinsi ?></p>
                            </div>
                        </div>
                        <div class="invoice__detail">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Produk </th>
                                            <th>Harga</th>
                                            <th>Berat</th>
                                            <th>Total Berat</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cart_finished as $cart){ ?>
                                        <tr>
                                            <td><?php echo $cart->total_qty ?> Pcs</td>
                                            <td class="detail">
                                                <?php echo $cart->judul_produk ?>
                                            </td>
                                            <td><?php echo number_format($cart->harga_diskon) ?></td>
                                            <td><?php echo $cart->berat ?> (Gram)</td>
                                            <td><?php echo $cart->total_berat ?> (Gram)</td>
                                            <td><?php echo number_format($cart->subtotal) ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="pricing_info">
                                <p>Total Berat: <?php echo $total_berat_dan_subtotal->total_berat ?>
                                    (gram) / <?php echo berat($total_berat_dan_subtotal->total_berat) ?> (kg)</p>
                                <p>Sub - Total: <?php echo number_format($total_berat_dan_subtotal->subtotal) ?></p>
                                <p>Kurir Pengiriman: ( <b><?php echo strtoupper($customer_data->kurir) ?></b> ) |
                                    <?php echo strtoupper($customer_data->service) ?></p>
                                <p>Total Ongkir: <?php echo number_format($customer_data->ongkir) ?></p>
                                <p class="bold">Grand Total + Total Ongkir :
                                    <?php echo number_format($customer_data->ongkir + $total_berat_dan_subtotal->subtotal) ?>
                                </p>
                                <a href="#" class="btn btn--round print_btn" data-target="#bayar" data-toggle="modal">
                                    <span class="lnr lnr-printer"></span>Bayar</a>
                            </div>
                        </div>
                        <!-- end /.invoice_detail -->
                    </div>
                    <!-- end /.invoice -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>
<!-- Modals -->
<?php $this->load->view('front/page/konfirmasi_pembayaran'); ?>

<!--================================
            END DASHBOARD AREA
    =================================-->
<?php $this->load->view('front/footer'); ?>