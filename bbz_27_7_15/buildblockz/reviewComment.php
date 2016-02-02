<?php
	
?>
<div id="addReview">
	<form method="POST">
		<?php
			include 'rating_input.php';
			?>
		<input type="text" id="review" name="review" class="form-control" placeholder="Your Review"  />
		<br />
		<input type="submit" value="Submit" class="btn btn-primary pull-right" name = "submit" />
	</form> 
</div>
	<?php 
		$rating = $_POST['rating'];
		$review = $_POST['review'];
		$BBZUID = $_SESSION['BBZUID'];
		if(isset($BBZBID)){
			if($rating > 0){
			  $query1 = "SELECT fname FROM db_user_info WHERE BBZUID='$BBZUID'";
			  $query1 = mysqli_query($link,$query1); 
			  $row = mysqli_fetch_assoc($query1);
			  $name = $row['fname'];
	          $query = "INSERT INTO db_builder_reviews (BBZBID, id, BBZUID, name, verified, rating, review, dateOfReview) VALUES ('$BBZBID', NULL, '$BBZBID', '$name', 'unverified', '$rating', '$review', CURRENT_TIMESTAMP)";
			  $query = mysqli_query($link,$query);
			}
		}elseif(isset($id)){
			if($rating > 0){
			  $query1 = "SELECT fname FROM db_user_info WHERE BBZUID='$BBZUID'";
			  $query1 = mysqli_query($link,$query1); 
			  $row = mysqli_fetch_assoc($query1);
			  $name =  $row['fname'];
	          $query = "INSERT INTO db_builder_reviews (BBZBID, id, BBZUID, name, verified, rating, review, dateOfReview) VALUES (NULL, $id, '$BBZBID', '$name', 'unverified', '$rating', '$review', CURRENT_TIMESTAMP)";
			  $query = mysqli_query($link,$query);
			}
		}
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			//echo $actual_link;
			//header("Location: $actual_link");
	?>