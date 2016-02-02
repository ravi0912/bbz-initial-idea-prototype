<?php
     include 'header.php';
     //include 'database.php';
        session_start();
  if(!isset($_SESSION['BBZBID'])){
    echo "Please, Login";
    header("Location:index.php");
  }
    $BBZBID=$_SESSION['BBZBID'];
    error_reporting(E_ERROR | E_PARSE);
    $sql = "SELECT * FROM db_builder_info WHERE BBZBID = '$BBZBID'";
     $pwd = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
    ?>
    <!--
        <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span>
            <span class="icon-bar"></span><span class="icon-bar"></span></button><a href="builderIndex.php" class="navbar-brand">BuildBlockz &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hi <?php  echo $row['fname'] ?></a>
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
    </nav>
    -->
    <br /><br /><br /><br /><br /><br />
    <div class="container">
    </div>
  <?php
  include 'footer.php';
  ?>