<?php
        session_start();
  if(!isset($_SESSION['BBZBID'])){
    echo "\n\n\n\n\n\n\n\n\n\n\nPlease, Login";
	  die();
    header("Location:index.php");
  }
  include 'header.php';
    $BBZBID=$_SESSION['BBZBID'];
    $BBZUID=$_GET['id'];
    $name=$_GET['name'];
    error_reporting(E_ERROR | E_PARSE);

       if(!isset($_GET['id'])){
      $page = "builderMessage.php";
      echo '<script type="text/javascript">';
      echo 'window.location.href="'.$page.'";';
      echo '</script>';
    }else{ 
        $query5 = "SELECT fname FROM db_user_info WHERE BBZUID = '$BBZUID'";
            $result5 = mysqli_query($link, $query5);
            $row5 = mysqli_fetch_array($result5,MYSQL_ASSOC);  
            $query6 = "SELECT fname FROM db_builder_info WHERE BBZBID = '$BBZBID'";
            $result6 = mysqli_query($link, $query6);
            $row6 = mysqli_fetch_array($result6,MYSQL_ASSOC);
            $fnameuser = $row6['fname'];
         $query = "SELECT id FROM db_builder_messages_$BBZBID";
          $result = mysqli_query($link, $query);
      if(empty($result)) {
         $query1 = "CREATE TABLE IF NOT EXISTS db_builder_messages_$BBZBID ( id INT NOT NULL AUTO_INCREMENT , BBZUID INT(11) NOT NULL , sendby VARCHAR(255) NOT NULL ,message MEDIUMTEXT NOT NULL , file LONGBLOB NULL , dateOfMessage TIMESTAMP NOT NULL , PRIMARY KEY (id) )";
         $result1 = mysqli_query($link, $query1);              
      }
      if(isset($_POST['submit'])){
        $message=$_POST['message'];
        $query2 = "SELECT id FROM db_user_messages_$BBZUID";
         $result2 = mysqli_query($link, $query2);
      if(empty($result2)) {
         $query3 = "CREATE TABLE IF NOT EXISTS db_user_messages_$BBZUID ( id INT NOT NULL AUTO_INCREMENT , BBZBID INT(11) NOT NULL , sendby VARCHAR(255) NOT NULL ,message MEDIUMTEXT NOT NULL , file LONGBLOB NULL , dateOfMessage TIMESTAMP NOT NULL , PRIMARY KEY (id) )";
        $result1 = mysqli_query($link, $query3);
        }
        $sql = "INSERT INTO db_user_messages_$BBZUID (BBZBID, sendby, message, file, dateOFMessage) VALUES ('$BBZBID', '$fnameuser', '$message', '$file', CURRENT_TIMESTAMP)";
        $sql1 = "INSERT INTO db_builder_messages_$BBZBID (BBZUID, sendby,message, file, dateOFMessage) VALUES ('$BBZUID', 'me' , '$message', '$file', CURRENT_TIMESTAMP)";
        mysqli_query($link, $sql1);
        mysqli_query($link, $sql);
       // header("Location:builderMessage.php");
        $page = "builderMessageDetails.php?id=$BBZUID";
          echo '<script type="text/javascript">';
         echo 'window.location.href="'.$page.'";';
         echo '</script>';
      }
    }
        ?>
    <div class="container">
    	<br /><br />
    	<br /><br />
    	<br /><br />
    	
    	<br /><br />
    	
    	
    	
    	
    	
    	<div class="row">
    		<div class="col-md-8 col-md-offset-2">
	    		<form method="POST">
		      
		      		<div class="sender_id">To : <?php  echo $row5['fname']; ?></div>
		      		<div class="message_content">Message : <textarea class="form-control" min-height="200px" required="true" name="message" size="300" style=" padding-left:10px;border-radius:5px;"></textarea> </div>
		      		<br />
		      		<input type="submit" class="btn btn-primary btn-block" value="Send" name="submit"></input>
		    	</form>
	    	</div>
	    </div>
	</div>
    
  <?php
  include 'footer.php';    
  
  ?>