<?php
      include 'database.php';
        session_start();
  if(!isset($_SESSION['BBZBID'])){
    echo "Please, Login";
    header("Location:index.php");
  }
  include 'header.php';
    $BBZBID=$_SESSION['BBZBID'];
    //error_reporting(E_ERROR | E_PARSE);
    echo "<br /><br /><br /><br /><br /><br />";
   
    if(isset($_POST['cmp_name'])){
        $cmp_name=mysqli_real_escape_string($link,$_POST['cmp_name']);
        $hoal1=mysqli_real_escape_string($link,$_POST['hoal1']);
        $hoal2=mysqli_real_escape_string($link,$_POST['hoal2']);
        $hoac=mysqli_real_escape_string($link,$_POST['hoac']);
        $hoas=mysqli_real_escape_string($link,$_POST['hoas']);
        $hoap=mysqli_real_escape_string($link,$_POST['hoap']);
        $hocm=mysqli_real_escape_string($link,$_POST['hocm']);
        $hocp=mysqli_real_escape_string($link,$_POST['hocp']);
        $hoce=mysqli_real_escape_string($link,$_POST['hoce']);
        $numOfBranch=mysqli_real_escape_string($link,$_POST['numOfBranch']);
        $branch=mysqli_real_escape_string($link,$_POST['branch']);
        $numProjectCity=mysqli_real_escape_string($link,$_POST['numProjectCity']);
        $about=mysqli_real_escape_string($link,$_POST['about']);
        $aim=mysqli_real_escape_string($link,$_POST['aim']);
        $website=mysqli_real_escape_string($link,$_POST['website']);
        $since=mysqli_real_escape_string($link,$_POST['since']);
        $typeOfConstruction=mysqli_real_escape_string($link,$_POST['typeOfConstruction']);
		//SElect BBZBID from db_builder_update where BBZBID='$BBZBID';
		//if(num_rows()==0){
			//        $sql1 = "INSERT INTO db_builder_update (BBZBID, cmp_name, hoal1, hoal2, hoac, hoas, hoap, hoce, hocm, hocp, numOfBranch, branch, numProjectCity, about, aim, website, since, typeOfConstruction, dateOfEntry) VALUES ('$BBZBID', '$cmp_name', '$hoal1', '$hoal2', '$hoac', '$hoas', '$hoap', '$hoce', '$hocm', '$hocp', '$numOfBranch', '$branch', '$numProjectCity', '$about', '$aim', '$website ', '$since', '$typeOfConstruction', CURRENT_TIMESTAMP)";
			
		//}else{
			
		//}
		
        $sql1 = "INSERT INTO db_builder_update (BBZBID, cmp_name, hoal1, hoal2, hoac, hoas, hoap, hoce, hocm, hocp, numOfBranch, branch, numProjectCity, about, aim, website, since, typeOfConstruction, dateOfEntry) VALUES ('$BBZBID', '$cmp_name', '$hoal1', '$hoal2', '$hoac', '$hoas', '$hoap', '$hoce', '$hocm', '$hocp', '$numOfBranch', '$branch', '$numProjectCity', '$about', '$aim', '$website ', '$since', '$typeOfConstruction', CURRENT_TIMESTAMP)";
        mysqli_query($link, $sql1);
		echo $sql1;
		echo mysqli_error($link);
         $allow = array("jpg", "jpeg", "gif", "png");
        $curdir =getcwd();
        $todir = $curdir."/builder/".$BBZBID."/companyLogo";
        $info = explode('.', strtolower( $_FILES['logo']['name']));
        $newfilename = $BBZBID.'.'."jpg";
        echo $newfilename;
         if ( in_array( end($info), $allow) ){
            if(file_exists($todir."/".$newfilename)) unlink($todir."/".$newfilename); 
              move_uploaded_file($_FILES["logo"]["tmp_name"], "$todir/" . $newfilename);
          }else{
            echo "Sorry ,this type of image is not supported.";
          }
      }

        if(mysqli_error($link) && $_POST['submit']){
    echo " Please, Enter the Details in correct format. ";

  }else {
    if(isset($_POST['email']) && isset($_POST['submit'])){
        $to  = 'rkumar@buildblockz.com' . ', '; // note the comma
        $to .= 'karan@buildblockz.com';    
        // subject
        $subject = 'Builder Update Request';
        // message
       $msg = '
        <html>
        <head>
          <title>Request|Builder</title>
        </head>
        <body>
          <p>Builder Update Request from '.$BBZBID.'<br></br>
            Company Name : '.$cmp_name.'<br></br> has a new request for updating company info.<br></br>Please check the Database.
        </body>
        </html>
        ';
         // To send HTML mail, the Content-type header must be set
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // Additional headers
        $headers .= "From: BuildBlockz Builder Update Request".$email;
        // Mail it
        mail($to, $subject, $msg, $headers);
       
    header("Location:builderUpdate.php");
  }
  }
 $sql = "SELECT * FROM db_builder_details WHERE BBZBID = '$BBZBID'";//recent timstamp
     $pwd = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
    $path = "builder/".$BBZBID."/companyLogo/".$BBZBID.".jpg";
   
	
    mysqli_close();
  ?>
    <!--<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span>
            <span class="icon-bar"></span><span class="icon-bar"></span></button><a href="builderIndex.php" class="navbar-brand">BuildBlockz &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php 	echo $row['cmp_name'] ?>, Update your Info.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="builderUpdate.php">Update Company</a></li>
            <li><a href="builderNotification.php">Notification</a></li>
            <li><a href="builderMessage.php">Message</a></li>
            <li><a href="builderProfile.php">Profile Update</a></li>
            <li><a href="builderPassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>-->
    
    <div class="container">
    	<br /><br /><br /><br />
    	<div class="row">
    		<div class="col-md-10">
    			<form class="form-horizontal" method="POST" action="builderUpdate.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<div class="col-md-4">
<legend>Company Update</legend>
<h3> Give us 24 hours to confirm your update.</h3>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="cmp_name">Company Logo</label>  
  <div class="col-md-6">
	<img src="<?php echo $path;?>" alt="No Logo" width="100px" min-height="100px" />
    <input type="file" name="logo">
      
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmp_name">Company Name</label>  
  <div class="col-md-6">
	  <input id="cmp_name" name="cmp_name" type="text" placeholder="Company Name*" class="form-control input-md" value= "<?php echo $row['cmp_name']?>" required="">
    
  </div>
</div>

<!-- Text input-->
<label class="col-md-6 control-label ">Head Office Address</label> 
<label class="col-md-6 control-label ">&nbsp;</label> 

<div class="form-group">
  <label class="col-md-4 control-label" for="hoal1">Line 1</label>  
  <div class="col-md-6">
  <input id="hoal1" name="hoal1" type="text" value= "<?php echo $row['hoal1']?>" placeholder="Line 1*" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoal2">Line 2</label>  
  <div class="col-md-6">
  <input id="hoal2" name="hoal2" type="text" value= "<?php echo $row['hoal2']?>" placeholder="Line 2" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-6">
  <input id="city" name="hoac" type="text" value="<?php echo $row['hoac']?>" placeholder="City*" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoas">State</label>  
  <div class="col-md-6">
  <input id="hoas" name="hoas" type="text" value= "<?php echo $row['hoas']?>" placeholder="State" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoap">Pincode</label>  
  <div class="col-md-6">
  <input id="hoap" name="hoap" type="number" value= "<?php echo $row['hoap']?>" placeholder="Pincode" class="form-control input-md" required="">
  <span class="help-block">6 digit zip postal code</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hocm">Mobile No.</label>  
  <div class="col-md-6">
  <input id="hocm" name="hocm" type="number" value= "<?php echo $row['hocm']?>" placeholder="Mobile No*" class="form-control input-md" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="hocp">Phone No.</label>  
  <div class="col-md-6">
  <input id="hocm" name="hocp" type="number" value= "<?php echo $row['hocp']?>" placeholder="Phone No*" class="form-control input-md" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoce">Email</label>  
  <div class="col-md-6">
  <input id="hoce" name="hoce" type="email" value= "<?php echo $row['hoce']?>" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numOfBranch">Number of Branches</label>  
  <div class="col-md-6">
  <input id="numOfBranch" name="numOfBranch" value= "<?php echo $row['numOfBranch']?>" type="number" placeholder="Number of Branches" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch ( City )</label>  
  <div class="col-md-6">
  <input id="branch" name="branch" type="text" value= "<?php echo $row['branch']?>" placeholder="Branch" class="form-control input-md" required="">Eg : Jaipur, Delhi, Kolkata (City seperated by commas.)
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numProjectCity">Number of Projects in Each City</label>  
  <div class="col-md-6">
  <input id="numProjectCity" name="numProjectCity" value= "<?php echo $row['numProjectCity']?>" type="text" placeholder="Number of Projects in Each City" class="form-control input-md" required="">Eg : 27_Jaipur,30_Delhi [(number of project)_(City Name) seperated by commas.]
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="about">About</label>  
  <div class="col-md-6">
  <input id="about" name="about"  value= "<?php echo $row['about']?>" type="text" placeholder="About" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="aim">Aim</label>  
  <div class="col-md-6">
  <input id="aim" name="aim"  value= "<?php echo $row['aim']?>" type="text" placeholder="Aim" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="website">Website</label>  
  <div class="col-md-6">
  <input id="website" name="website" value= "<?php echo $row['website']?>" type="text" placeholder="Website" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="since">Since</label>  
  <div class="col-md-6">
  <input id="since" name="since" value= "<?php echo $row['since']?>" type="number" placeholder="Since" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="typeOfConstruction">Types of Construction</label>  
  <div class="col-md-6">
  <input id="typeOfConstruction" name="typeOfConstruction" value= "<?php echo $row['typeOfConstruction']?>" type="text" placeholder="Types of Construction" class="form-control input-md" required="">Eg : Interior, Exterior, Parking(Types of Contruction seperated by Commas.)
    
  </div>
</div>
<div class="col-md-6 col-md-offset-4">
<input type="submit" class="btn btn-primary btn-block" value="sumbit"/>
</div>
</fieldset>
</form>

    		<!--	<form method="POST" action="builderUpdate.php" enctype="multipart/form-data">
    <br/><br/>
    Logo : <img src="<?php echo $path;?>" alt="No Logo" width="100" height="200">
    <input type="file" name="logo"><br></br>
    <li>Company Name : <input type="text" required="true" value= "<?php echo $row['cmp_name']?>" name="cmp_name" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Head Office Address :</li>
    <li>Line 1 : <input type="text" required="true" value= "<?php echo $row['hoal1']?>" name="hoal1" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Line 2 : <input type="text"  value= "<?php echo $row['hoal2']?>" name="hoal2" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>City : <input type="text" required="true" value= "<?php echo $row['hoac']?>" name="hoac" size="30" style="height:25px; padding-left:10px;border-radius:5px;">
    </input> State : <input type="text" required="true" value= "<?php echo $row['hoas']?>" name="hoas" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Pincode : <input type="number" required="true" value= "<?php echo $row['hoap']?>" name="hoap" size="6" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Mobile : <input type="number" value= "<?php echo $row['hocm']?>" name="hocm" size="10" style="height:25px; padding-left:10px;border-radius:5px;"></input> Phone : <input type="number" value= "<?php echo $row['hocp']?>" name="hocp" size="10" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Email : <input type="email" value= "<?php echo $row['hoce']?>" name="hoce" size="50" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Number of Branch : <input type="number" value= "<?php echo $row['numOfBranch']?>" name="numOfBranch" size="4" style="height:25px; padding-left:10px;border-radius:5px;"></input></li><br></br>
    <li>Branch (City) : <input type="text" required="true" value= "<?php echo $row['branch']?>" name="branch" size="500" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li> Eg : Jaipur, Delhi, Kolkata (City seperated by commas.)<br></br>
    <li>Number of Project in Each City : <input type="text" value= "<?php echo $row['numProjectCity']?>" name="numProjectCity" size="100" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li>Eg : 27_Jaipur,30_Delhi [(number of project)_(City Name) seperated by commas.]<br></br>
    <li>About : <input type="text" value= "<?php echo $row['about']?>" name="about" size="500" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Aim : <input type="text"  value= "<?php echo $row['aim']?>" name="aim" size="200" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Website : <input type="text" value= "<?php echo $row['website']?>" name="website" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Since : <input type="number"  value= "<?php echo $row['since']?>" name="since" size="4" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li><br></br>
    <li>Types of Construction : <input type="text" required="true" value= "<?php echo $row['typeOfConstruction']?>" name="typeOfConstruction" size="200" style="height:25px; padding-left:10px;border-radius:5px;"></input> </li>Eg : Interior, Exterior, Parking(Types of Contruction seperated by Commas.)<br></br>
    <input type="submit" style=" background:black;border:none; color:white; font-family:geor…order-radius:5px; position:relative;" value="Submit" name="submit"></input>
  </form>
  -->
    		</div>
    	</div>
    </div>
    <br /><br />
  <?php
  	include "footer.php"; 
	?>