<?php 
     include 'header.php';
	include 'database.php';
	error_reporting(E_ERROR | E_PARSE);
    $cmp_name=mysqli_real_escape_string($link,$_POST['cmp_name']);
    $name=mysqli_real_escape_string($link,$_POST['name']);
    $email=mysqli_real_escape_string($link,$_POST['email']);
    $contact=mysqli_real_escape_string($link,$_POST['contact']);
    $city=mysqli_real_escape_string($link,$_POST['city']);
    $location=mysqli_real_escape_string($link,$_POST['location']);
$sql = "INSERT INTO db_builder_request (cmp_name, name, email, contact, city, location, dateOfEntry) VALUES ('$cmp_name', '$name', '$email', '$contact', '$city', '$location', CURRENT_TIMESTAMP)";
mysqli_query($link, $sql);
// multiple recipients

if(mysqli_error($link) && $_POST['submit']){
    echo " '$cmp_name' company already exist, Please contact to our helpline centre.<html><br></br></html>";
  }else {
    if(isset($_POST['email']) && isset($_POST['submit'])){
        $to = $email . ', ';
        $to .= 'ravi.buildblockz@gmail.com' . ', '; // note the comma
        $to .= 'karan.buildblockz@gmail.com';     
        // subject
        $subject = 'New Builder Request';
        // message
       $msg = "
        <html>
          <body>
          <p>Builder Request from $city<br></br></p>
            Company Name : $cmp_name<br></br>Builder Name : $name<br></br>Email : $email<br></br>Contact Number : $contact<br></br>Place : $location<br></br>City : $city
        </body>
        </html>
        ";
        // To send HTML mail, the Content-type header must be set
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // Additional headers
        $headers .= "From: BuildBlockz Builder Request".$email;
        // Mail it*/

       mail($to, $subject, $msg, $headers);
        
   // header("Location:index.php");
  }
  }
  //echo "lk";
  mysqli_close();
?>
	<br /><br /><br /><br /><br />
	<div class="container">
   		<div class="row">
   			<div class="col-md-8 col-md-offset-2">
				<form class="form-horizontal">
					<fieldset>
					
					  <legend><center>Builder Drop Your Detail's</center></legend>
					
					 
					  <div class="col-md-4">
					  <input id="cmp_name" name="cmp_name" type="text" placeholder="Company Name*" class="form-control input-md" required="">
					    
					  </div>
					
					  <div class="col-md-4">
					  <input id="name" name="name" type="text" placeholder="Your Name*" class="form-control input-md" required="">
					    
					  </div>
					
					  <div class="col-md-4">
					  <input id="email" name="email" type="text" placeholder="Email*" class="form-control input-md" required="">
					    
					  </div>
					
					  <div class="col-md-4">
					  <input id="contact" name="contact" type="text" placeholder="Contact No*" class="form-control input-md" required="">
					    
					  </div>
					  
					  <div class="col-md-4">
					  <input id="city" name="city" type="text" placeholder="City*" class="form-control input-md" required="">
					    
					  </div>
					
					
					<!-- Text inpu-->
					
					  <div class="col-md-4">
					  <input id="location" name="location" type="text" placeholder="Location" class="form-control input-md" required="">
					    
					  </div>
					
					<br />
					
					
					  <div class="col-md-12">
						<br />
					    <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-block">Send Request</button>
					  </div>
					</fieldset>
				</form>
			</div>
   		</div>
   		<div class="row">
   			<br /><br />
   			
   			
   			
   			<div class="col-md-12 text-center">
   				<div class="well">
   				<h4>For further queries contact email: karan.buildblockz@gmail.com , ravi.buildblockz@gmail.com.<br /> Please feel free to call at 9864320757. 
   					</h4>
   				</div>
   			</div>
   		</div>
   </div>
   <?php
   include 'footer.php';
   ?>