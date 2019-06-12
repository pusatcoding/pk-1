<?php $this->load->view('front/header'); ?>
<?php $this->load->view('front/navbar'); ?>
<?php echo $script_captcha; // javascript recaptcha ?>
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
                            <a href="index.html">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Login</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Login</h1>
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
            START LOGIN AREA
    =================================-->
<section class="login_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?php echo form_open("auth/login");?>
                <div class="cardify login">
                    <div class="login--header">
                        <h3>Selamat datang kembali</h3>
                        <p>Anda dapat masuk dengan nama pengguna Anda</p>
                    </div>
                    <!-- end .login_header -->
                    <?php echo $message;?>
                    <div class="login--form">
                        <div class="form-group">
                            <label for="user_name">Username</label>
                            <?php echo form_input($identity) ?>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <?php echo form_password($password); ?>
                        </div>


                        <p><?php echo $captcha ?></p>


                        <div class="form-group">
                            <div class="custom_checkbox">
                                <input type="checkbox" id="remember">
                                <label for="cremember">
                                    <?php echo lang('login_remember_label', 'remember');?>
                                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                                    <span class="shadow_checkbox"></span>
                                    
                                </label>
                            </div>
                        </div>

                        <button class="btn btn--md btn--round" type="submit">Login Now</button>

                        <div class="login_assist">
                            <p class="recover">Lupa akun
                                <a href="" data-toggle="modal" data-target="#pswreset">Anda</a>
                                ?</p>
                            <p class="signup">Tidak punya
                                <a href="<?php echo base_url('auth/register') ?>">akun</a>?</p>
                        </div>
                    </div>
                    <!-- end .login--form -->
                </div>
                <!-- end .cardify -->
                <?php echo form_close();?>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
<!--================================
            END LOGIN AREA
    =================================-->
<div class="modal fade" id="pswreset" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open("auth/forgot_password");?>
            <div class="modal-body">
                <div class="form-group"><label>Silahkan Masukkan Username Anda</label>
                    <input class="form-control" name="identity" type="text" id="identity" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
<?php $this->load->view('front/footer'); ?>