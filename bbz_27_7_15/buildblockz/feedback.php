<?php
	include 'header.php';
	?>
	br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			
						<form class="form-horizontal" action="feedbackAction.php" method="GET">
							<fieldset>

								<!-- Form Name -->
								<legend>
									Feedback
								</legend>

								

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="email">Email</label>
									<div class="col-md-9">
										<input id="email" name="email" type="text" placeholder="Email*" class="form-control input-md" required="">

									</div>
								</div>

								<!-- Text input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="phone">Phone</label>
									<div class="col-md-9">
										<input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" >

									</div>
								</div>

								<!-- Textarea -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Feedback</label>
									<div class="col-md-9">
										<textarea class="form-control" id="feedback" name="feedback" placeholder="Feedback*" />
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
	</div>
</div>

<?php
	include 'footer.php';
	?>