<?php
      include 'database.php';
        session_start();
  if(!isset($_SESSION['BBZBID'])){
    echo "Please, Login";
    header("Location:index.php");
  }
  //echo "<br /><br /><br /><br /><br /><br />";
  include 'header.php';
    $BBZBID=$_SESSION['BBZBID'];
    error_reporting(E_ERROR | E_PARSE);
    
    if(isset($_POST['fname'])){
    	//echo "sdkmmas";
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname']; 	
        $mobile=$_POST['mobile'];
        $phone=$_POST['phone'];
        $line1=$_POST['line1'];
        $line2=$_POST['line2'];
        $place=$_POST['place'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pincode=$_POST['pincode'];
		echo "<br /><br /><br /><br /><br /><br />";
		//echo $pincode;
        $sql1 = "UPDATE db_builder_info SET fname = '$fname', mname = '$mname',lname = '$lname' ,mobile = '$mobile', phone = '$phone' ,line1 = '$line1' ,line2 = '$line2', place = '$place', city = '$city', state = '$state' ,pincode = '$pincode' WHERE BBZBID = '$BBZBID'";
        mysqli_query($link, $sql1);
        $allow = array("jpg", "jpeg", "gif", "png");
        $curdir =getcwd();
        $todir = $curdir."/builder/".$BBZBID."/profileImage";
        $info = explode('.', strtolower( $_FILES['profileImage']['name']));
        $newfilename = $BBZBID.'.'."jpg";
        //echo $newfilename;
		//echo $todir;
         if ( in_array( end($info), $allow) ){
            if(file_exists($todir."/".$newfilename)) unlink($todir."/".$newfilename); 
              move_uploaded_file($_FILES["profileImage"]["tmp_name"], "$todir/" . $newfilename);
          }else{
            echo "Sorry ,this type of image is not supported.";
          }
        
    header("Location:builderProfile.php");
    echo "Profile Updated";
    }
	$sql = "SELECT * FROM db_builder_info WHERE BBZBID = '$BBZBID'";
     $pwd = mysqli_query($link, $sql);
     echo mysqli_error($pwd);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
    $path = "builder/".$BBZBID."/profileImage/".$BBZBID.".jpg";
    mysqli_close();
  ?>
  
  <!--
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span>
            <span class="icon-bar"></span><span class="icon-bar"></span></button><a href="builderIndex.php" class="navbar-brand">BuildBlockz &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php 	echo $row['fname'] ?>, Update your profile.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="builderNotification.php">Notification</a></li>
            <li><a href="builderMessage.php">Message</a></li>
            <li><a href="builderProfile.php">Profile Update</a></li>
            <li><a href="builderPassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    -->
     <div class="container">
    	<br /><br /><br /><br /><br />
    	<div class="row">
    		<div class="col-md-10">
    			<form class="form-horizontal" method="POST" action="builderProfile.php" enctype="multipart/form-data">
					<fieldset>
					
					<!-- Form Name -->
					<legend>Profile Update</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cmp_name">Profile Image</label>  
					  <div class="col-md-6">
						<img src="<?php echo $path ?>" alt="No Logo" width="100px" min-height="100px" />
					    <input type="file" name="profileImage">
					      
					  </div>
					</div>
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fname">First Name</label>  
					  <div class="col-md-6">
					  <input id="fname" name="fname" type="text" value= "<?php echo $row['fname']?>" placeholder="First Name" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="mname">Middle Name</label>  
					  <div class="col-md-6">
					  <input id="mname" name="mname"  value= "<?php echo $row['mname']?>" type="text" placeholder="Middle Name" class="form-control input-md" >
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="lname">Last Name</label>  
					  <div class="col-md-6">
					  <input id="lname" name="lname" type="text" value= "<?php echo $row['lname']?>" placeholder="Last Name" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<label class="col-md-5 control-label ">Address</label> 
					<label class="col-md-6 control-label ">&nbsp;</label> 
					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="line1">Line 1</label>  
					  <div class="col-md-6">
					  <input id="line1" name="line1" type="text" value= "<?php echo $row['line1']?>" placeholder="Line 1*" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="hoal2">Line 2</label>  
					  <div class="col-md-6">
					  <input id="line2" name="line2" type="text" value= "<?php echo $row['line2']?>" placeholder="Line 2" class="form-control input-md">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="city">City</label>  
					  <div class="col-md-6">
					  <input id="city" name="city" type="text" value="<?php echo $row['city']?>" placeholder="City*" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="hoas">Place</label>  
					  <div class="col-md-6">
					  <input id="state" name="state" type="text" value= "<?php echo $row['state']?>" placeholder="State*" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="pincodep">Pincode</label>  
					  <div class="col-md-6">
					  <input id="pincode" name="pincode" type="number" value= "<?php echo $row['pincode']?>" placeholder="Pincode" class="form-control input-md" required="">
					  <span class="help-block">6 digit zip postal code</span>  
					  </div>
					</div>
					
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="mobile">Mobile No.</label>  
					  <div class="col-md-6">
					  <input id="mobile" name="mobile" type="number" value= "<?php echo $row['mobile']?>" placeholder="Mobile No*" class="form-control input-md" >
					    
					  </div>
					</div>
					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="phone">Phone No.</label>  
					  <div class="col-md-6">
					  <input id="phone" name="phone" type="number" value= "<?php echo $row['phone']?>" placeholder="Phone No*" class="form-control input-md" >
					    
					  </div>
					</div>
					
					<div class="col-md-6 col-md-offset-4">
					<input type="submit" class="btn btn-primary btn-block" value="sumbit"/>
					</div>
					</fieldset>
				</form>
<!--
    <form method="POST" action="builderProfile.php" enctype="multipart/form-data">
    <br/><br/><br/><br/>
     Profile Image : <img src="<?php echo $path ?>" alt="No Profile Image" width="100" height="125"><input type="file" name="profileImage" ><br>
    <li>First Name : <input type="text" required="true" value= "<?php echo $row['fname']?>" name="fname" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Middle Name : <input type="text" value= "<?php echo $row['mname']?>" name="mname" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Last Name : <input type="text" required="true" value= "<?php echo $row['lname']?>" name="lname" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Mobile : <input type="number" required="true" value= "<?php echo $row['mobile']?>" name="mobile" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> 
    	Phone : <input type="number" value= "<?php echo $row['phone']?>" name="phone" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Line 1 : <input type="text" required="true" value= "<?php echo $row['line1']?>" name="line1" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Line 2 : <input type="text" value= "<?php echo $row['line2']?>" name="line2" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Place : <input type="text" required="true" value= "<?php echo $row['place']?>" name="place" size="30" style="height:25px; padding-left:10px;border-radius:5px;">    </input> 
    	Pincode : <input type="number" required="true" value= "<?php echo $row['pincode']?>" name="pincode" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>City : <input type="text" required="true" value= "<?php echo $row['city']?>" name="city" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    	State : <input type="text" required="true" value= "<?php echo $row['state']?>" name="state" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <input type="submit" style=" background:black;border:none; color:white; font-family:geor…order-radius:5px; position:relative;" value="Submit" name="submit"></input>
  </form>
  -->
  			</div>
    	</div>
    </div>
    <br /><br />
  <?php
  include 'footer.php';
  ?>