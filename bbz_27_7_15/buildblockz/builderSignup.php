<!DOCTYPE>
<html>
<head>
<style>
 body{
}
</style>
<title>
Signup|builder
</title>
</head>
<body>

<?php 

include 'database.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
    $cmp_name=$_POST['cmp_name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    $sex=$_POST['sex'];
    $dateOfBirth=$_POST['dateOfBirth'];
    $website=$_POST['website'];
    $mobile=$_POST['mobile'];
    $phone=$_POST['phone'];
    $line1=$_POST['line1'];
    $line2=$_POST['line2'];
    $place=$_POST['place'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
if($password == $repassword){
$sql = "INSERT INTO db_builder_info VALUES('$cmp_name','$fname','$mname','$lname','$email','$password','$sex','$dateOfBirth','$website',
    '$mobile','$phone','$line1','$line2','$place','$city','$state','$pincode')";
mysqli_query($link, $sql);
echo mysqli_error ($link);

if(isset($_POST['email'])){
		header("Location:index.php");
	}

  
}
mysqli_close();
?>
<body>

      <b> <i>Builder SIGN UP<i><b><br></br>
    <form method="POST">
    <input type="text" required="true" placeholder="Company Name" name="cmp_name" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="email" required="true" placeholder="Email" name="email" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="password" required="true" placeholder="Password" name="password" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="password" required="true" placeholder="Confirm-Password" name="repassword" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="text" required="true" placeholder="First Name" name="fname" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="text" required="false" placeholder="Middle Name" name="mname" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="text" required="true" placeholder="Last Name" name="lname" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <span>
    <select name="sex">
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="NS">Other</option>
    </select>
    <span> Date of Birth
    <input type="date" required="true" name="dateOfBirth" size="8" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    </span>
    <br></br>
    <input type="text" required="false" placeholder="Company Website" name="website" size="150" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="number" required="false" placeholder="Enter 10 digit Mobile No." name="mobile" size="10" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="number" required="false" placeholder="Phone No." name="phone" size="10" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="text" required="true" placeholder="Line 1" name="line1" size="150" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="text" required="false" placeholder="Line 2" name="line2" size="75" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="number" required="true" placeholder="Pincode" name="pincode" size="6" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <a href="http://www.mapsofindia.com/pincode/">Find Your Pincode</a>
    <br></br>
    <input type="text" required="true" placeholder="Place" name="place" size="50" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="text" required="true" placeholder="City" name="city" size="50" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="text" required="true" placeholder="State" name="state" size="50" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <td colspan="2">
        <input type="submit" style=" background:black;border:none; color:white; font-family:geor…order-radius:5px; position:relative;" value="Register" name="submit"></input>
    </td>
    </form>
    </body>
</html>
