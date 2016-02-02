
      <?php
      include 'database.php';
        session_start();
  if(!isset($_SESSION['BBZUID'])){
    echo "Please, Login";
    header("Location:index.php");
  }
  
  include 'header.php';
    $BBZUID=$_SESSION['BBZUID'];
    error_reporting(E_ERROR | E_PARSE);
    $sql = "SELECT fname,password FROM db_user_info WHERE BBZUID = '$BBZUID'";
    $pwd = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
	echo "<br /><br /><br /><br /><br /><br />";
	
    if(isset($_POST['password'])){
        $password=sha1(md5(mysqli_real_escape_string($link,$_POST['password'])));
        $newPassword=sha1(md5(mysqli_real_escape_string($link,$_POST['newPassword'])));
        $confirmPassword=sha1(md5(mysqli_real_escape_string($link,$_POST['confirmPassword'])));
		/*echo $password;
		echo '<br />';
		echo $row['password'];
		echo '<br />';
		echo $newPassword;
		echo '<br />';
		echo $confirmPassword;
		 * 
		 */
		if($newPassword==$confirmPassword){
			if($password == $row['password']){
            if($newPassword == $confirmPassword){
              $sql1 = "UPDATE db_user_info SET password = '$newPassword' WHERE BBZUID = '$BBZUID'";
              mysqli_query($link, $sql1);
              //header("Location:userIndex.php");
              echo "\n\n\n\n\n\n\nProfile Updated";
            }else{
              echo "\n\n\n\n\n\n\n\nPlease, Confirm new Password correctly ";
            }
         } else{
          echo "\n\n\n\n\n\n\n\nPlease, Enter the right password.";
          }
		}else{
          echo "\n\n\n\n\n\n\n\nEnter new password in both fields.";
          }
          
   }
    mysqli_close();
  ?>
    <!--<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span>
            <span class="icon-bar"></span><span class="icon-bar"></span></button><a href="userIndex.php" class="navbar-brand">BuildBlockz &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php 	echo $row['fname'] ?>, Update your Password.</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="userNotification.php">Notification</a></li>
            <li><a href="userMessage.php">Message</a></li>
            <li><a href="userProfile.php">Profile Update</a></li>
            <li><a href="userPassword.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>-->
     <div class="container">
    	<br /><br /><br /><br /><br />
    	<div class="row">
    		<div class="col-md-10">
			    <form id="changePassword" name="changePassword" method="POST" class="form-horizontal">
					<fieldset>
					
					<!-- Form Name -->
					<legend><center>Change Password</center></legend>
					
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="password">Old Password</label>
					  <div class="col-md-4">
					    <input id="password" name="password" type="password" placeholder="Old Password" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="newPassword">New Password</label>
					  <div class="col-md-4">
					    <input id="newPassword" name="newPassword" type="password" placeholder="New Password" class="form-control input-md" required="">
					    
					  </div>
					</div>
					
					<!-- Password input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="confirmPassword">Confirm Password</label>
					  <div class="col-md-4">
					    <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm Password" class="form-control input-md" required="">
					    
					  </div>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<input type="submit" class="btn btn-primary btn-block" value="Change Password"/>
					</div>
					</fieldset>
				</form>
			</div>
    	</div>
    </div>

    <!--<form method="POST">
    <input type="text" required="true" name="password" placeholder="Old Password" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input><br></br>
    <input type="password" required="true" placeholder="New Password" name="newPassword" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" required="true" placeholder="Confirm Password" name="confirmPassword" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input><br></br>
    <input type="submit" style=" background:black;border:none; color:white; font-family:geor…order-radius:5px; position:relative;" value="Submit" name="submit"></input>
  </form>-->
<?php
include 'footer.php';
?>
