<?php
	if(isset($BBZBID)){
		$query = "SELECT * FROM db_builder_reviews WHERE BBZBID='$BBZBID' ORDER BY dateOfReview DESC";
		$query = mysqli_query($link,$query);
	}elseif(isset($id)){
		$query = "SELECT * FROM db_builder_reviews WHERE id='$id' ORDER BY dateOfReview DESC";
		$query = mysqli_query($link,$query);
	}
	$numSearch = mysqli_num_rows($query);

	if($numSearch > 0){
		//echo $BBZBID."done";
		while ($row = mysqli_fetch_assoc($query)){

			
?>
			<div id="showReview">
				<div class="row">
					<div class="col-md-12">
						<span id="reviewerName"><?php echo $row['name'];?></span><?php $rating = $row['rating'];
								include 'rating.php';
							?><br/><?php echo $row['review'];?>
					</div>
				</div>
			</div>
<?php
	
		}
	}else{
	  	echo "No reviews. Be the first to give review.";
	}
	
?>