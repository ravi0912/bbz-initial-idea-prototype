<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/usersignup.js"></script>

<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<form id="login" method="POST" class="form-signin">
			<h5 class="form-signin-heading">
			<center>
				USER/BUILDER Log In
			</center></h5>

			<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<br />
			<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
			<br />
			
			<div style="margin-bottom: 7px;margin-top: 7px;">
				<label class="radio-inline" for="priv-0">
				<input type="radio" name="priv" id="priv-0" value="1" checked="checked">
				Builder </label>
			<label class="radio-inline" for="priv-1">
				<input type="radio" name="priv" id="priv-1" value="2">
				User </label>
			</div>
			
			<br />

			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Sign in
			</button>
		</form>
	</div>
	<div class="col-md-4 col-md-offset-1">

		<form class="form-signup"  id="usersignup">
			<h5 class="form-signup-heading">
			<center>
				USER Sign Up
			</center></h5>

			<input type="email" id="signupEmail" name="signupEmail" class="form-control" placeholder="Email address" required autofocus>
			
			<br />
			
			<input type="password" id="signupassword" name="signupPassword" class="form-control" placeholder="Password" required>
			<br />
			<input type="password" id="signupconfirmPassword" name="signupconfirmPassword" class="form-control" placeholder="Confirm Password" required>
			
			<div id="signupdiv"></div>
			<!--<div class="checkbox">
			<label>
			<input type="checkbox" value="remember-me"> Remember me
			</label>
			</div>-->
			<br />
			<button class="btn btn-lg btn-primary btn-block" type="submit">
				Sign Up
			</button>
		</form>

	</div>

</div>