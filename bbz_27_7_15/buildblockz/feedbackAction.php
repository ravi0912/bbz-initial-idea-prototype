<?php
include 'header.php';


$email = mysqli_real_escape_string($link,$_GET['email']);


$phone = mysqli_real_escape_string($link,$_GET['phone']);

if(isset($_GET['feedback']) && $_GET['feedback']!= NULL){
	$feedback = $_GET['feedback'];
		$query = "INSERT INTO db_feedback (email, phone, feedback, dateOfFeedback) VALUES ('$email', '$phone', '$feedback', CURRENT_TIMESTAMP)";
		$query = mysqli_query($link, $query);
		$message= "Thank You for your valuable feedback.";
	}
else {
	$message= "Please enter feedback before submitting";
}

?>
<br/><br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="well">
				<p>
					<?php echo $message ; ?>

				</p>
			</div>
		</div>
	</div>
</div>

<?php

include 'footer.php';
?>