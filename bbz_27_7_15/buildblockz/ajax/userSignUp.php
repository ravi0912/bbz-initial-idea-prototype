<?php
	include '../database.php';
	session_start();
	error_reporting(E_ERROR | E_PARSE);
	
	if(isset($_POST['signupEmail'])){
	    $email			=mysqli_real_escape_string($link,$_POST['signupEmail']);
		$password		=sha1(md5(mysqli_real_escape_string($link,$_POST['signupPassword']))); 
		$confPassword	=sha1(md5(mysqli_real_escape_string($link,$_POST['signupconfirmPassword']))); 
		if($confPassword!=$password){
			echo "Enter same password in both fields.";
		}else{
			$sql = "INSERT INTO db_user_info (email, password) VALUES ('$email', '$password')";
			
			$pwd = mysqli_query($link, $sql);
		    if(mysqli_affected_rows($link)){
				include '../function/mailer.php';
				$to = $email;
								$message = "Please verify your account by clicking on the given link. <a target='_blank' href='http://buildblockz.com/verifyaccount.php?email=".$email."&verifycode=".$password."'>Verify</a>";

				mailer($to,$message);
				echo 1;
			}else{
				echo "Email already exist.";
			}
		}	
	}

	mysqli_close();
?>