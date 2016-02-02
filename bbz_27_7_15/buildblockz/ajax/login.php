<?php
include '../database.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
//error_reporting(all);
//echo 0;
$x=0;
if(isset($_POST['inputEmail'])){
    $email=mysqli_real_escape_string($link,$_POST['inputEmail']);
	//echo $email;
	//$emailslash = explode("@",$email);
	$password=sha1(md5(mysqli_real_escape_string($link,$_POST['inputPassword']))); 
	$priv=mysqli_real_escape_string($link,$_POST['priv']); 
	//echo $emailslash[0];
	//die();
	if($priv==1){
		$sql = "SELECT BBZBID, password FROM db_builder_info WHERE email ='$email'";
		$x=1;
		$pwd = mysqli_query($link, $sql);
	    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
		if($password == $row['password']){
		    $_SESSION['BBZBID']=$row['BBZBID'];
			$_SESSION['email']=$email;
			//header("Location:../buildblockzindex.php");
			//echo "Correct";
			if(isset($_SESSION['rediect_url'])){
				$page = $_SESSION['redirect_url'];
				echo '<script type="text/javascript">';
				echo 'window.location.href="'.$page.'";';
				echo '</script>';
			}else{
				//header("Location:../builderIndex.php");
				echo 1;
			}
		}else{
			echo "Wrong Username or Password.";
		}
	}else{
		$sql = "SELECT BBZUID,password,verified FROM db_user_info WHERE email = '$email'";
		$x=2;
		$pwd = mysqli_query($link, $sql);
	    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
		//echo $row['password'];
		if($row['verified']==0){
			
			echo "Please verify your email.";
			
		}else if($password == $row['password']){
		    $_SESSION['BBZUID']=$row['BBZUID'];
			$_SESSION['email']=$email;
			//header("Location:../buildblockzindex.php");
			//echo "Correct";
			if(isset($_SESSION['rediect_url'])){
				$page = $_SESSION['redirect_url'];
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$page.'";';
	echo '</script>';
			}else{
			echo $x;
			}
		}else{
			echo "Wrong Username or Password.";
		}
	}
    
	
	//echo $sql;
    
}
//echo $_POST['inputEmail'];
    	mysqli_close();
?>