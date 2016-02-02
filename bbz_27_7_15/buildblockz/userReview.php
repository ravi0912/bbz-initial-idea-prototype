<?php
	session_start();
	if (!isset($_SESSION['BBZUID'])) {
		echo "Please, Login";
		header("Location:index.php");
	}
	include 'header.php';
	include 'database.php';
	$BBZUID = $_SESSION['BBZUID'];
	//error_reporting(E_ERROR | E_PARSE);
	//$sql = "SELECT * FROM db_builder_reviews WHERE index = '1'";
	$sql = "SELECT * FROM db_builder_reviews WHERE BBZUID = '$BBZUID'";
	$pwd = mysqli_query($link, $sql);
	//echo $BBZUID;
	 //$row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
	 //echo "done";
	 //echo $row['index'];
	//$numSearch = mysqli_num_rows($pwd);
	$sql1 = "SELECT * FROM db_project_reviews WHERE BBZUID = '$BBZUID'";
	$pwd1 = mysqli_query($link, $sql1);
	//$numSearch1 = mysqli_num_rows($pwd1);
?>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="container">
		<div class="row">
			
			<div class="col-md-6">
				<div class="round_box">
				<h4>Builder Review</h4>
				<hr />
					<table class="table">
						<tbody>
							
								
								
					<?php
						while ($row = mysqli_fetch_assoc($pwd)){
							$review = $row['review'];
							$BBZBID = $row['BBZBID'];
							//echo "done";
					
							$sql2 = "SELECT cmp_name FROM db_builder_details WHERE BBZBID = '$BBZBID'";
							$pwd2 = mysqli_query($link, $sql2);
							$row2 = mysqli_fetch_array($pwd2,MYSQL_ASSOC);
					
					?>
							<tr>
								<td>
									<a href="userReviewEdit.php?builderReview=<?php echo $review;?>"><?php echo $row2['cmp_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['review'];?> </a>
								</td>
							</tr>
					<?php
						}
								
						
?>							
						</tbody>
					</table>
		
			</div>
			</div>
			<div class="col-md-6">
				<div class="round_box">
					<h4>Project Reviews</h4>
						<hr />
						<table class="table">
						<tbody>
<?php
	while ($row3 = mysqli_fetch_assoc($pwd1)){
		$review = $row3['review'];
		$BBZPID = $row3['BBZPID'];
		$sql4 = "SELECT project_name FROM db_builder_projects WHERE BBZPID = '$BBZPID'";
		$pwd4 = mysqli_query($link, $sql4);
		$row4 = mysqli_fetch_array($pwd4,MYSQL_ASSOC);

?>
							<tr>
								<td>
		<a href="userReviewEdit.php?projectReview=<?php echo $review;?>"><?php echo $row4['project_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row3['review'];?> </a>
								</td>
							</tr>
<?php
	}
?> 							
							</tbody>
					</table>
		</div>
	</div>
</div>
<?php
	include 'footer.php';
?>