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
			<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                <?php echo form_open("auth/register");?>
                <div class="cardify login">
                    <div class="login--header">
                        <h3>Daftar Akun</h3>
                        <p>Silakan isi bidang berikut dengan informasi yang sesuai untuk mendaftarkan akun barumu.</p>
                    </div>
                    <!-- end .login_header -->
                    <?php echo $message;?>
                    <div class="login--form">
                        <div class="form-group">
                            <label for="user_name">Nama</label>
                            <?php echo form_input($name);?>
						</div>
						<div class="form-group">
                            <label for="user_name">Username</label>
                            <?php echo form_input($username);?>
						</div>
						<div class="form-group">
                            <label for="pass">Email</label>
							<?php echo form_input($email);?>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
							<?php echo form_password($password);?>
						</div>
						<div class="form-group">
                            <label for="pass">Konfirmasi Password</label>
							<?php echo form_password($password_confirm);?>
						</div>
						<div class="form-group">
                            <label for="pass">Telepon</label>
							<?php echo form_input($phone);?>
						</div>
						
                        <button class="btn btn--md btn--round" type="submit">Daftar</button>

                        <div class="login_assist">
                            <p class="signup">Sudah punya
								<a href="<?php echo base_url('auth/login') ?>">akun</a>?
							</p>
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
<?php $this->load->view('front/footer'); ?>


    

	              
	           
								
							
								
						
								
							
								
							
			
							
						
			
     
  
