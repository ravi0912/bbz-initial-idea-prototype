<?php

    session_start();
  if(!isset($_SESSION['BBZBID'])){
    echo "n\n\n\n\n <br /><br /><br /><br /><br />Please, Login21";
	/*$page = "index.php";
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$page.'";';
	echo '</script>';
	 * */
	//$urlpage = "userCompose.php";
  	//$_SESSION['redirect_url']=$url;
    header("Location:index.php");
  }
  
  	include 'header.php';  
    $BBZBID=$_SESSION['BBZBID'];
    $id=mysqli_real_escape_string($link,$_GET['id']);
    error_reporting(E_ERROR | E_PARSE);

      if(!isset($_GET['id'])){
      echo "done";
      $page = "builderMessage.php";
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$page.'";';
      echo '</script>';
    }else{
        $sql = "SELECT * FROM db_user_info WHERE BBZUID = '$BBZUID'";
        $sql1 = "SELECT message,sendby, dateOfMessage FROM db_builder_messages_$BBZBID WHERE BBZUID = '$id'";
         $pwd = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
        $pwd1 = mysqli_query($link, $sql1);
       
        ?>
        <br/><br /><br /><br /><br />
    <!--<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span>
            <span class="icon-bar"></span><span class="icon-bar"></span></button><a href="userIndex.php" class="navbar-brand">BuildBlockz &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php  echo $row['fname'] ?>, Check messages.</a>
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
    	<div class="row">
        		<div class="col-md-12">
        			  <a href="builderCompose.php?id=<?php echo$id;?>&name=<?php echo$row['fname'];?>">Send Message</a>

        		</div>
        </div>
        <div class="row">
      <div class="col-md-6">
        	
            <?php 
              	while($row2 = mysqli_fetch_array($pwd1)) {
              		//echo $row2['sendby']."dsa";
              		if($row2['sendby']=="me"){
              								
					?>
					
						<div class="message_me">
							<span class="message_time"><?php echo $row2['dateOfMessage'];?></span>
							<?php echo $row2['message'];?>
						</div>
					
             	<?php
					}else{
					?>
					
						<div class="message_from text-right">
							
							<?php echo $row2['message'];?>
							<span class="message_time"><?php echo $row2['dateOfMessage'];?><span>
							
						</div>
					
					<?php
					}
					?>	
					
          <?php }
				
				?>
				
				<?php mysqli_close();
            }
          ?>
        
  </div>
  </div>
</div>
 <?php
  include 'footer.php';
  ?>