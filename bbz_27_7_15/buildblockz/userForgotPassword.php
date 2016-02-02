<!DOCTYPE html>
<html>
  <head>
    <title>BuildBlockz|Builder</title>
  </head>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <body>
    <?php 
include 'database.php';
error_reporting(E_ERROR | E_PARSE);
    $email=$_POST['email'];
    $fname=$_POST['fname'];
    $dateOfBirth=$_POST['dateOfBirth'];
    $pincode=$_POST['pincode'];
    $sql = "SELECT email, fname, dateOfBirth, pincode FROM db_user_info WHERE email = '$email'";
    $pwd = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
    if(isset($_POST['email']) && isset($_POST['submit'])){
       if($email==$row['email'] && $fname==$row['fname'] && $dateOfBirth==$row['dateOfBirth'] && $pincode==$row['pincode']){
          $sql1 = "SELECT password FROM db_user_info WHERE email = '$email'";
          $pwd1 = mysqli_query($link, $sql1);
          $row1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
          $password = $row1['password'];
          $to  = 'rkumar@buildblockz.com' . ','; // note the comma
          $to .= '$email';     
        // subject
          $subject = 'Password Request';
        // message
        $msg = "
          <html>
            <body>
             <p>Hi! $fname<br></br></p>
              Your Password : $password <br></br>
              Please, Change your Password as soon as possible. 
            </body>
          </html>
          ";
        // To send HTML mail, the Content-type header must be set
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // Additional headers
          $headers .= "From: BuildBlockz Builder rkumar@buildblockz.com";
        // Mail it*/
          mail($to, $subject, $msg, $headers);
          header("Location:index.php");
      }
    }
  mysqli_close();
?>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span>
          	<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="home.php" class="navbar-brand">BuildBlockz.com								</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="builderRequest.php">New Builder</a></li>
            <li><a href="userSignup.php">User Register</a></li>
            <li><a href="builderLogin.php">Builder Log In</a></li>
           <li><a href="userLogin.php">User Log In</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <form method="POST">
      <input type="email" required="true" placeholder="Email*" name="email" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input><br></br>
    <input type="text" required="true" placeholder="First Name* " name="name" size="30" style="height:25px; padding-left:10px;border-radius:5px;"></input><br></br>
    <span> Date of Birth*
    <input type="date" required="true" name="dateOfBirth" size="8" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    </span>
    <br></br>
     <input type="number" required="true" placeholder="Pincode*" name="pincode" size="6" style="height:25px; padding-left:10px;border-radius:5px;"></input><br></br>
    <input type="submit" style=" background:black;border:none; color:white; font-family:geor…order-radius:5px; position:relative;" value="Submit" name="submit"></input>
    </form>
    </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="/javascripts/bootstrap.js"></script>
</html>