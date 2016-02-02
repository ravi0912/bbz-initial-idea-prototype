<?php
include 'header.php';

$name = mysqli_real_escape_string($link,$_GET['name']);
$email = mysqli_real_escape_string($link,$_GET['email']);
$phone = mysqli_real_escape_string($link,$_GET['phone']);
$message = mysqli_real_escape_string($link,$_GET['message']);

if (isset($name)) {
	$query = "INSERT INTO db_contactUs (name, email, phone, message, dateOfContact) VALUES ('$name', '$email', '$phone', '$message', CURRENT_TIMESTAMP)";
	$query = mysqli_query($link, $query);
}
?><
br/><br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="well">
				<p>
					Thank You <?php echo $name; ?>
					for Contacting us we will come back to you within 2 hours.

				</p>
			</div>
		</div>
	</div>
</div>

<?php

include 'footer.php';
?>