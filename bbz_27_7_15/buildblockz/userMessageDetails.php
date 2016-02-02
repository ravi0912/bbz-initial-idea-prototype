<?php

    session_start();
  if(!isset($_SESSION['BBZUID'])){
    echo "n\n\n\n\n <br /><br /><br /><br /><br />Please, Login21";
  /*$page = "index.php";
  echo '<script type="text/javascript">';
  echo 'window.location.href="'.$page.'";';
  echo '</script>';*/
  $urlpage = "userCompose.php";
  $_SESSION['redirect_url']=$url;
      header("Location:index.php");
  //echo "chutioyaaaap";
  }else{
    include 'header.php';
    $BBZUID=$_SESSION['BBZUID'];
	
    $id=$_GET['id'];
    error_reporting(E_ERROR | E_PARSE);
     if(!isset($_GET['id'])){
	echo "done";
      $page = "userMessage.php";
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$page.'";';
      echo '</script>';
    }else{
        $sql = "SELECT * FROM db_user_info WHERE BBZUID = '$BBZUID'";
        $sql1 = "SELECT message, dateOfMessage, sendby FROM db_user_messages_$BBZUID WHERE BBZBID = $id";
         $pwd = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
        $pwd1 = mysqli_query($link, $sql1);
        
        ?>
        <br/><br/><br/><br/><br/><br/>
        
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			  <a href="userCompose.php?id=<?php echo $id; ?>&name=<?php echo $row['fname']; ?>"><button class="btn btn-primary">Send Message</button></a>

        		</div>
        	</div>
      <div class="col-md-6">
        	
            <?php 
              	while($row2 = mysqli_fetch_array($pwd1)) {
              		if($row2['sendby']=="me"){					
					?>
					
						<div class="message_me">
							
							<?php echo $row2['message']; ?>
							<br />
							<span class="message_time"><?php echo $row2['dateOfMessage']; ?></span>
						</div>
					
             	<?php
				}else{
					?>
					
						<div class="message_from text-right">
							
							<?php echo $row2['message']; ?><br />
							<span class="message_time"><?php echo $row2['dateOfMessage']; ?><span>
							
						</div>
					
					<?php
					}
					?>	
					
          <?php } ?>
				
				<?php mysqli_close();
					}
          ?>
        
  </div>
</div>
  <?php
include 'footer.php';
}
  ?>