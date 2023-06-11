<?php $this->view("header", $data); ?>

<section id="form" style="margin-top: 5px;"><!--form-->
	<div class="container">
		<div class="row" style="text-align: center">
			<div class="col-sm-4 col-sm-offset-1" style="float: none; display: inline-block">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form action="#">
						<input type="text" name="email" placeholder="Email" />
						<input type="password" name="password" placeholder="Password" />
						<span style="text-align: center;">
							<input type="checkbox" class="checkbox">
							Keep me signed in
						</span>

						<button type="submit" class="btn btn-default">Login</button>
					</form>
					<br>
					<a href="<?php echo ROOT; ?>signup">Sign-up Here!</a>
				</div><!--/login form-->
			</div>


		</div>
	</div>

</section><!--/form-->

<?php $this->view("footer", $data); ?>