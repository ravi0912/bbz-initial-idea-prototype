<?php

	  session_start();
  if(!isset($_SESSION['BBZUID'])){
    echo "n\n\n\n\n <br /><br /><br /><br /><br />Please, Login21";
	/*$page = "index.php";
	echo '<script type="text/javascript">';
	echo 'window.location.href="'.$page.'";';
	echo '</script>';*/
	$urlpage = "userCompose.php";
	$_SESSION['user_name'] = $_GET['name'];
	$_SESSION['builder_id'] = $_GET['id'];
	$_SESSION['redirect_url']=$urlpage;
    	header("Location:siteLogin.php");
	//echo "chutioyaaaap";
  }else{
  	$_SESSION['builder_id']=null;
	$_SESSION['user_name']=null;
	$_SESSION['redirect_url']=null;
  	include 'header.php';
	
  	$BBZUID=$_SESSION['BBZUID'];
    $BBZBID=mysqli_real_escape_string($link,$_GET['id']);
    $name=mysqli_real_escape_string($link,$_GET['name']);
    //error_reporting(E_ERROR | E_PARSE);
    if(!isset($_GET['id'])){
      $page = "userMessage.php";
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$page.'";';
      echo '</script>';
    }else{
            $query5 = "SELECT cmp_name FROM db_builder_details WHERE BBZBID = '$BBZBID'";
            $result5 = mysqli_query($link, $query5);
            $row5 = mysqli_fetch_array($result5,MYSQL_ASSOC);
            $query6 = "SELECT fname FROM db_user_info WHERE BBZUID = '$BBZUID'";
            $result6 = mysqli_query($link, $query6);
            $row6 = mysqli_fetch_array($result6,MYSQL_ASSOC);
            $fnameuser = $row6['fname'];
           $query = "SELECT id FROM db_user_messages_$BBZUID";
            $result = mysqli_query($link, $query);
        if(empty($result)) {
           $query1 = "CREATE TABLE IF NOT EXISTS db_user_messages_$BBZUID ( id INT NOT NULL AUTO_INCREMENT , BBZBID INT(11) NOT NULL , sendby VARCHAR(255) NOT NULL , message MEDIUMTEXT NOT NULL , file LONGBLOB NULL , dateOfMessage TIMESTAMP NOT NULL , PRIMARY KEY (id) )";
          echo $query1;
           $result1 = mysqli_query($link, $query1);
                       
        }
        if(isset($_POST['submit'])){
          $message=mysqli_real_escape_string($link,$_POST['message']);
          $query2 = "SELECT id FROM db_builder_messages_$BBZBID";
          echo "done";
           $result2 = mysqli_query($link, $query2);
        if(empty($result2)) {
           $query3 = "CREATE TABLE IF NOT EXISTS db_builder_messages_$BBZBID ( id INT NOT NULL AUTO_INCREMENT , BBZUID INT(11) NOT NULL , sendby VARCHAR(255) NOT NULL , message MEDIUMTEXT NOT NULL , file LONGBLOB NULL , dateOfMessage TIMESTAMP NOT NULL , PRIMARY KEY (id) )";
          $result1 = mysqli_query($link, $query3);
          }
          $sql = "INSERT INTO db_builder_messages_$BBZBID (BBZUID, sendby, message, file, dateOfMessage) VALUES ('$BBZUID', '$fnameuser', '$message', '$file', CURRENT_TIMESTAMP)";
          $sql1 = "INSERT INTO db_user_messages_$BBZUID (BBZBID, sendby, message, file, dateOfMessage) VALUES ('$BBZBID', 'me', '$message', '$file', CURRENT_TIMESTAMP)";
          mysqli_query($link, $sql1);
          mysqli_query($link, $sql);
          //header("Location:userMessageDetails.php?id=$BBZBID");
         $page = "userMessageDetails.php?id=$BBZBID";
         echo '<script type="text/javascript">';
         echo 'window.location.href="'.$page.'";';
         echo '</script>';
      }
}
  ?>
  <br /><br /><br /><br /><br />
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
	    		<form method="POST">
		      
		      		<div class="sender_id">To : <?php echo $row5['cmp_name']; ?></div>
		      		<div class="message_content">Message : <textarea class="form-control" min-height="200px" required="true" name="message" size="300" style=" padding-left:10px;border-radius:5px;"></textarea> </div>
		      		<br />
		      		<input type="submit" class="btn btn-primary btn-block" value="Send" name="submit"></input>
		    	</form>
	    	</div>
	    </div>
	</div>
	
    </div>
  <?php
  include 'footer.php';
  }
  
    
  
  ?>