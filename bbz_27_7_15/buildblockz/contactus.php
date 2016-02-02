<?php
include 'header.php';
?>
<br />
<br />
<br />
<br />
<div class="container">
	<div class="row">
		<div class="col-md-12 ">

			<section id="contact" class="container content-section text-center">
				<h2>Contact Us</h2>
				<br />
				<br />
				<div class="row">

					<div class="col-lg-7">

						<br />
						<br />
						<br />
						<br />
						<div class="row">
							<div class="col-md-4">
								Call us at
								<br />
								<p>
									+91-8011240690
								</p>

							</div>
							<div class="col-md-2">
								<p>
									OR
								</p>
							</div>
							<div class="col-md-6">
								Write to us at
								<br />
								<p>
									<a href="mailto:helpme@buildblockz.com">helpme@buildblockz.com</a>
							</div>
						</div>

						<br />
						<br />
						<br />
						<br />
						<br />

						<ul class="list-inline banner-social-buttons">
							<li>
								<a href="https://twitter.com/buildblockz" class="btn btn-primary btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
							</li>
							<li>
								<a href="https://facebook.com/buildblockz" class="btn btn-primary btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
							</li>
							<li>
								<a href="https://plus.google.com/buildblockz" class="btn btn-primary btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
							</li>
						</ul>
					</div>
					<div class="col-md-5">
						<form class="form-horizontal" action="contactUsaction.php" method="GET">
							<fieldset>

								<!-- Form Name -->
								<legend>
									Contact Form
								</legend>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									<div class="col-md-9">
										<input id="name" name="name" type="text" placeholder="Full Name" class="form-control input-md" required="">

									</div>
								</div>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Email</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">

									</div>
								</div>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="phone">Phone</label>
									<div class="col-md-9">
										<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required="">

									</div>
								</div>

								<!-- Textarea -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Message</label>
									<div class="col-md-9">
										<textarea class="form-control" id="message" name="message" placeholder="Message" />
</textarea>
									</div>
								</div>
								<div class="col-md-9 col-md-offset-3">
									<input type="submit" class="btn btn-primary btn-block" />

								</div>

							</fieldset>
						</form>

					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>