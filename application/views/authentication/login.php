<!-- Loader starts-->
<div class="loader-wrapper">
	<div class="theme-loader">
		<div class="loader-p"></div>
	</div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo base_url('public');?>/assets/images/login/2.jpg" alt="looginpage"></div>
			<div class="col-xl-5 p-0">
				<div class="login-card">
					<form class="theme-form login-form" method="post" action="<?php echo base_url('auth/login'); ?>" role="login">
						<h4>Login</h4>
						<h6>Welcome back! Log in to your account.</h6>
						<div class="form-group">
							<label>Email Address</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
								<input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
								<input class="form-control" type="password" name="password" required="" placeholder="*********">
								<div class="show-hide"><span class="show">                         </span></div>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<?php echo form_checkbox('remember_code', '1', false, 'id="remember_code"');?>
								<label class="text-muted" for="remember_code">Remember Me</label>
							</div><a class="link" href="<?php echo base_url('auth/forgot_password');?>">Lupa Password?</a>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-block" type="submit" name="submit" value="login">Sign in</button>
						</div>
						<p>Tidak memiliki akun?<a class="ms-2" href="<?php echo base_url('auth/register');?>">Daftar Akun</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	$(function() {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' // optional
		});
	});
</script>
