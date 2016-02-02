<?php
session_start();
if (!isset($_SESSION['BBZUID'])) {
	echo "Please, Login";
	header("Location:index.php");
}
include 'header.php';
include 'database.php';
$BBZUID = $_SESSION['BBZUID'];
$builderReview = mysqli_real_escape_string($link,$_GET['builderReview']);
$projectReview = mysqli_real_escape_string($link,$_GET['projectReview']);
$_SESSION['builderReview'] = mysqli_real_escape_string($link,$_GET['builderReview']);
$_SESSION['projectReview'] = mysqli_real_escape_string($link,$_GET['projectReview']);
/*	if(isset($projectReview1)){

 $review = mysqli_real_escape_string($link,$_POST['projectReview1']);
 $query = "UPDATE db_project_reviews SET review = '$review' WHERE review = '$projectReview'";
 mysqli_query($link, $query);

 }
 if(isset($builderReview1)){
 echo "builder";
 $review = mysqli_real_escape_string($link,$_POST['builderReview1']);
 $query = "UPDATE db_builder_reviews SET review = '$review' WHERE review = '$builderReview'";
 mysqli_query($link, $query);
 }*/
?>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="round_box">
				
				<br/>
				<form method="GET" action="userReviewEditSave.php">
					<?php
if(isset($projectReview)){
//echo "prject";

$sql1 = "SELECT * FROM db_project_reviews WHERE review = '$projectReview'";
$pwd1 = mysqli_query($link, $sql1);
$row = mysqli_fetch_array($pwd1, MYSQL_ASSOC);

					?>
						<h4 class="text-center">Project Review</h4>
					Edit Your Review
					<br />
					<textarea id="projectReview1" name="projectReview1"  placeholder="Review" class="form-control input-md" required="" ><?php echo $row['review']; ?></textarea>
					<br />
					<br />
					<?php
					}
					if(isset($builderReview)){
					//echo "bld";
					$sql = "SELECT * FROM db_builder_reviews WHERE review = '$builderReview'";
					$pwd = mysqli_query($link, $sql);
					$row = mysqli_fetch_array($pwd, MYSQL_ASSOC);
					//echo $row;
					?>
					<h4 class="text-center">Builder Review</h4>
					Edit Your Review
					<textarea id="builderReview1" name="builderReview1" placeholder="Review" class="form-control input-md" required=""><?php echo $row['review']; ?></textarea>
					<br />
					<br />

					<?php
					}
					?>
					<input type="submit" class="btn btn-primary btn-block" value="sumbit"/>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>