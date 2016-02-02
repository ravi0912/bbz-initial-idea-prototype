<?php
include '../database.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
//error_reporting(all);
//echo 0;

    $email=mysqli_real_escape_string($link,$_POST['email']);
    $fullname=mysqli_real_escape_string($link,$_POST['fullname']);
    $mobile=mysqli_real_escape_string($link,$_POST['mobileNumber']);
    $BBZBID=mysqli_real_escape_string($link,$_POST['builder_id']);
		$sql = "SELECT cmp_name FROM db_builder_details WHERE BBZBID = '$BBZBID'";
		$pwd = mysqli_query($link, $sql);
	    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
	    $cmp_name = $row['cmp_name'];
		//include '../function/mailer.php';
		$to = $email . ', ';
       $to .= 'ravi.buildblockz@gmail.com' . ', '; // note the comma
        $to .= 'karan@buildblockz.com';
	//echo $to;
		$subject = 'BuildBlockz Meetup Request';
		$message = "Your meetup request with $cmp_name is in process. <br/>Thank You, for choosing BuildBlockz.com. Our executive will get back to you within 2 hours. With the Details of the Meeting. <br/>We hope you had a nice time browsing through BuildBlockz.com<br/>
					For futher query write us at helpme@buildblockz.com or Feel free to Call us : +91-8011240690 or +91-9864320757(for technical issue).";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: BuildBlockz Meetup";
         //$x = mail($to, $subject, $message, $headers);
		//Email send
		if(mail($to, $subject, $message, $headers)){
			$sql1 = "INSERT INTO db_user_meetup (email, name, contact, cmp_name, dateOfRequest) VALUES ('$email', '$fullname', '$mobile', '$cmp_name', CURRENT_TIMESTAMP)";
		   echo "We are processing your request. Please check your mail for further details.";
		}else{
			echo "We are processing your request. Please check your mail for further details.";
			//echo $to;
		}
	
    
	
	//echo $sql;
    

//echo $_POST['inputEmail'];
    	mysqli_close();
?>