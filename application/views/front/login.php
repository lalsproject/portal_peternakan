<div class="col-md-12">
	<div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url() ?>ltr/assets/images/big/auth-bg.jpg) no-repeat center center;">
		<div class="auth-box">
			<div id="loginform">
				<div class="logo">
					<h5 class="font-medium mb-3">Sign In to Admin</h5>
				</div>
				<!-- Form -->
				<form action="<?php echo site_url('logged_process') ?>" method="post" accept-charset="utf-8">
					<div class="row">
						<div class="col-12">
							<form class="form-horizontal mt-3" id="loginform" action="index.html">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
									</div>
									<input type="text" name="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
									</div>
									<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
								</div>
								<div class="form-group text-center">
									<div class="col-xs-12 pb-3">
										<button class="btn btn-block btn-lg btn-info" type="submit">Log In</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>			