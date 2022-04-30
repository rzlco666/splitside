<!-- Loader starts-->
<div class="loader-wrapper">
	<div class="theme-loader">
		<div class="loader-p"></div>
	</div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<section>
	<div class="container-fluid p-0">
		<div class="row m-0">
			<div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?php echo base_url('public');?>/assets/images/login/3.jpg" alt="looginpage"></div>
			<div class="col-xl-7 p-0">
				<div class="login-card">
					<?php echo form_open('auth/check_register', ''); ?>
					<div class="theme-form login-form">
						<h4>Buat akun</h4>
						<h6>Masukkan data untuk membuat akun</h6>
						<div class="form-group">
							<label>Your Name</label>
							<div class="small-group">
								<div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
									<input class="form-control" type="text" required="" name="first_name" placeholder="First Name">
									<?php echo form_error('first_name', '<div class="text-danger"><small>', '</small></div>'); ?>
								</div>
								<div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
									<input class="form-control" type="text" required="" name="last_name" placeholder="Last Name">
									<?php echo form_error('last_name', '<div class="text-danger"><small>', '</small></div>'); ?>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Username</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
								<input class="form-control" type="text" required="" name="username" placeholder="Username">
								<?php echo form_error('username', '<div class="text-danger"><small>', '</small></div>'); ?>
							</div>
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
								<input class="form-control" type="email" required="" name="email" placeholder="Test@gmail.com">
								<?php echo form_error('email', '<div class="text-danger"><small>', '</small></div>'); ?>
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
								<input class="form-control" type="password" name="password" required="" placeholder="*********">
								<div class="show-hide"><span class="show">                         </span></div>
								<?php echo form_error('password', '<div class="text-danger"><small>', '</small></div>'); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<input id="checkbox1" type="checkbox">
								<label class="text-muted" for="checkbox1">Agree with <span>Privacy Policy                   </span></label>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-block" type="submit">Buat Akun</button>
						</div>
						<p>Sudah memiliki akun?<a class="ms-2" href="<?php echo base_url('auth/login'); ?>">Sign in</a></p>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
