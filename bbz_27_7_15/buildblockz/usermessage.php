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
    error_reporting(E_ERROR | E_PARSE);
    $sql = "SELECT * FROM db_user_info WHERE BBZUID = '$BBZUID'";
    $sql1 = "SELECT BBZBID FROM db_user_messages_$BBZUID GROUP BY BBZBID"; 
     $pwd = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
    $pwd1 = mysqli_query($link, $sql1);
    //$row1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);

    ?>
    
    <br></br><br /><br /><br />
    <div class="container">
  <div class="col-md-6 round_box">
    <table class="table">
      <thead>
        <tr>
          <th>Builder's Name</th><th>Company's Name</th>
        </tr>
        <tbody>
        <?php 
          while($row1 = mysqli_fetch_array($pwd1)) { 
          $value = $row1['BBZBID'];
          ?>
          <tr>
          <td><a href="userMessageDetails.php?id=<?php echo $value; ?>"><?php
		$sql2 = "SELECT fname FROM db_builder_info WHERE BBZBID='$value'";
		$sql3 = "SELECT cmp_name FROM db_builder_details WHERE BBZBID='$value'";
		$pwd2 = mysqli_query($link, $sql2);
		$row2 = mysqli_fetch_array($pwd2, MYSQL_ASSOC);
		$pwd3 = mysqli_query($link, $sql3);
		$row3 = mysqli_fetch_array($pwd3, MYSQL_ASSOC);
		echo $row2['fname'];
	?></a></td>
        <td><?php echo $row3['cmp_name']; ?></td>
      </tr>
      <?php } mysqli_close(); ?>
        </tbody>
      </thead>
    </table>
  </div>
</div>
 <?php
include 'footer.php';
}
  ?>