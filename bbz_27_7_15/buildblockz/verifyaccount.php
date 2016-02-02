<?php
include 'database.php';
session_start();
//error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL);
//echo 0;
$x=0;
if(isset($_GET['email'])){
    $email=mysqli_real_escape_string($link,$_GET['email']);
	//echo $email;
	
	$password=mysqli_real_escape_string($link,$_GET['verifycode']); 
	
	//echo $password;
	
		$sql1 = "SELECT BBZUID,password,verified FROM db_user_info WHERE email='$email'";
		$x=2;
		$pwd1 = mysqli_query($link, $sql1);
	    	$row1 = mysqli_fetch_array($pwd1);
		//echo $row['password'];
		if($password == $row1['password']){
			$sql = "UPDATE db_user_info SET verified=1 WHERE BBZUID = '".$row1['BBZUID']."'";
			//$x=2;
			$pwd = mysqli_query($link, $sql);
		
		    	$_SESSION['BBZUID']=$row1['BBZUID'];
			$_SESSION['email']=$email;
			$curdir = getcwd();
                        //echo $curdir."/client/".$row1['BBZUID']."/profileImage";
                        if (!file_exists($curdir."/client/".$row1['BBZUID'])) {
    		         mkdir($curdir."/client/".$row1['BBZUID']."/profileImage", 0777, true);
                         mkdir($curdir."/client/".$row1['BBZUID']."/property", 0777, true);
			}
			header("Location:index.php");
			//echo "Correct";
			
		}else{
			echo "Invalid Verification Link.";
		}
	
    
	
	//echo $sql;
    
}else{
			echo "Invalid Link.";
}
//echo $_POST['inputEmail'];
    	mysqli_close($link);
?>