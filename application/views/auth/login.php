<!DOCTYPE html>
<html lang="en">
  <head>
  	<title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/login/css/style.css">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="<?=base_url()?>assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================<?=base_url()?>==================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--=============================================<?=base_url()?>==================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--=============================================<?=base_url()?>==================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/vendor/animate/animate.css">
<!--=============================================<?=base_url()?>==================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--=============================================<?=base_url()?>==================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/vendor/animsition/css/animsition.min.css">
<!--=============================================<?=base_url()?>==================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/vendor/select2/select2.min.css">
<!--=============================================<?=base_url()?>==================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/vendor/daterangepicker/daterangepicker.css">
<!--=============================================<?=base_url()?>==================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/login/css/main.css">
<!--===============================================================================================-->
	</head>
	<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(assets/login/images/bg-01.jpg);">
					<span class="login100-form-title-1">
					Welcome To kafe Laine
					</span>
				</div>
<div style="text-align: center;">
				<?= form_open(''); ?>
			        <?php if ($this->session->flashdata('auth_msg')) {
			            echo $this->session->flashdata('auth_msg');
			        }
			        $this->session->unset_userdata('auth_msg');
			        ?>
					</div>
			<div class="login100-form validate-form">
				
		      		
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100 <?= form_error('username') ? 'invalid' : '' ?>" type="text" name="username" placeholder="Enter username" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input id="password-field" name="password" type="password" class="input100 <?= form_error('password') ? 'invalid' : '' ?>" value="<?= set_value('password') ?>" placeholder="Enter Password" >
			              	<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					</div>
			        
			            <div class="container-login100-form-btn">
			            	<button href="<?=base_url('Dashboard')?>" class="login100-form-btn" type="submit" name="login" value="Login">Login</button>
			            </div>
			            <!-- <div class="form-group d-md-flex">
			            	<div class="w-50">
				            	<label class="checkbox-wrap checkbox-primary">Remember Me
									<input type="checkbox" checked>
										<span class="checkmark"></span> -->
								</label>
							</div>
							<!--<div class="text-center">
								<a href="#" class="btn btn-info" style="color: #fff">Lupa Password ?</a>
							</div>-->
			            </div>
		          	</form>
			      </div>
				</div>
			</div>
		</div>
	

  <script src="<?=base_url()?>assets/vendors/login/js/jquery.min.js"></script>
  <script src="<?=base_url()?>assets/vendors/login/js/popper.js"></script>
  <script src="<?=base_url()?>assets/vendors/login/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/vendors/login/js/main.js"></script>
</body>
</html>