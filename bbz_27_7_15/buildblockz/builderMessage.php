<?php
      session_start();
  if(!isset($_SESSION['BBZBID'])){
      header("Location:index.php");
  //echo "chutioyaaaap";
  }
    include 'header.php';
     $BBZBID=$_SESSION['BBZBID'];
    //error_reporting(E_ERROR | E_PARSE);
    $sql = "SELECT * FROM db_builder_info WHERE BBZBID = '$BBZBID'";
    $sql1 = "SELECT BBZUID FROM db_builder_messages_$BBZBID GROUP BY BBZUID"; 
     $pwd = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
    $pwd1 = mysqli_query($link, $sql1);
    
    ?>
    <br /><br /><br /><br />x
    <div class="container">
  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Client's Name</th><th>City</th>
        </tr>
        <tbody>
        <?php 
          while($row1 = mysqli_fetch_array($pwd1)) { 
          $value = $row1['BBZUID']; ?>
          <tr>
          <td><a href="builderMessageDetails.php?id=<?php echo$value;?>"><?php
          $sql2 = "SELECT fname, city FROM db_user_info WHERE BBZUID='$value'"; 
          $pwd2 = mysqli_query($link, $sql2);
          $row2 = mysqli_fetch_array($pwd2,MYSQL_ASSOC);
           echo $row2['fname'];?></a></td>
        <td><?php echo $row2['city'];?></td>
      </tr>
      <?php } mysqli_close();?>
        </tbody>
      </thead>
    </table>
  </div>
</div>
 <?php
  include 'footer.php';
    
  ?>