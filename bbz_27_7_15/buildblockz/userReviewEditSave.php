<?php
	session_start();
	if (!isset($_SESSION['BBZUID'])) {
		echo "Please, Login";
		header("Location:index.php");
	}
	include 'database.php';
	$BBZUID = $_SESSION['BBZUID'];
	$builderReview = $_SESSION['builderReview'];
	$projectReview = $_SESSION['projectReview'];
	if(isset($projectReview)){
		$projectReview1 = $_GET['projectReview1'];
		if(isset($projectReview1)){
			echo "project";
			$review = $_GET['projectReview1'];
			$query = "UPDATE db_project_reviews SET review = '$review' WHERE review = '$projectReview'";
			mysqli_query($link, $query);
			$_SESSION['projectReview'] = NULL;
	
		}
	}else{
		$builderReview1 = $_GET['builderReview1'];
		if(isset($builderReview1)){
			echo "builder";
			$review = $_GET['builderReview1'];
			$query = "UPDATE db_builder_reviews SET review = '$review' WHERE review = '$builderReview'";
			mysqli_query($link, $query);
			$_SESSION['builderReview'] = NULL;
		}
	}
		header("Location:userReview.php");

?>