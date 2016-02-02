<html>
	<?php
	 //if(!isset($_SESSION['BBZBID'])){
    //echo "Please, Login";
    //header("Location:index.php");
  //}
		//$BBZBID=$_SESSION['BBZBID'];
	include 'database.php';
		$BBZBID=1000001;
		 $query = "SELECT id FROM db_builder_project_request_$BBZBID";
    	$result = mysqli_query($link, $query);
		if(empty($result)) {
   			$query1 = "CREATE TABLE IF NOT EXISTS db_builder_request_addproject_$BBZBID ( id INT NOT NULL AUTO_INCREMENT , project_name VARCHAR(255) NOT NULL , status VARCHAR(255) NOT NULL , bank_approval MEDIUMTEXT ,address VARCHAR(255) NOT NULL , contact VARCHAR(255) NULL , constructionType VARCHAR(255) NOT NULL , constructionTypeDetail VARCHAR(255) NULL , price INT(11) NOT NULL , start_date date , end_date date , features MEDIUMTEXT ,  dateOfEntry TIMESTAMP NOT NULL , PRIMARY KEY (id) )";
   			$result1 = mysqli_query($link, $query1);
   			echo "done";                
   		}
   		if(isset($_POST['submit'])){
        $project_name=$_POST['project_name'];
        $status=$_POST['status'];
        $contact = $_POST['mobile'].",".$_POST['phone'] ;
        $address=$_POST['line1'].",".$_POST['line2'].",".$_POST['place'].",".$_POST['city'].",".$_POST['state'].",".$_POST['pincode'];
        $price=$_POST['price'];
        $start_date=$_POST['start_date'];
        $end_date=$_POST['end_date'];
        $features=$_POST['features'];
        $bank_approval=$_POST['bank_approval'];
        $constructionType=$_POST['constructionType'];
        $constructionTypeDetail=$_POST['constructionTypeDetail'];
        echo "done"; 
        $sql1 = "INSERT INTO db_builder_request_addproject_$BBZBID (project_name,status,bank_approval,address,contact,constructionType,constructionTypeDetail,price,start_date,end_date,features,
    	dateOfEntry)VALUES('$project_name','$status','$bank_approval','$address','$contact','$constructionType','$constructionTypeDetail','$price','$start_date','$end_date','$features',
    	CURRENT_TIMESTAMP)";
        mysqli_query($link, $sql1);
        $allow = array("zip", "rar");
        $curdir =getcwd();
        $todir = $curdir."/builder/".$BBZBID."/projectRequest";
        $info = explode('.', strtolower( $_FILES['projectphoto']['name']));
        $newfilename = $project_name.'.'."zip";
        echo $newfilename;
         if ( in_array( end($info), $allow) ){
            if(file_exists($todir."/".$newfilename)) unlink($todir."/".$newfilename); 
              move_uploaded_file($_FILES["projectphoto"]["tmp_name"], "$todir/" . $newfilename);
          }else{
            echo "Sorry ,this type of image is not supported.";
          }
		}	
	?>
	<body>

      <b> <i>Builder SIGN UP<i><b><br></br>
    <form method="POST" action="builderProjectAdd.php" enctype="multipart/form-data">
    <input type="text" required="true" placeholder="Project Name" name="project_name" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="text" required="true" placeholder="Status : Completed/ On Work" name="status" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
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
    <input type="number" required="false" placeholder="Enter 10 digit Mobile No." name="mobile" size="10" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <input type="number" required="false" placeholder="Phone No." name="phone" size="10" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <span>
    <select name="constructionType">
        <option value="Residential">Residential</option>
        <option value="Commercial">Commercial</option>
    </select><input type="text" required="true" placeholder="constructionTypeDetail" name="constructionTypeDetail" size="50" style="height:25px; padding-left:10px;border-radius:5px;"></input><br/>
    <input type="number" required="true" placeholder="Approx Price" name="price" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="date" required="true" placeholder="Start Date" name="start_date" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="date" required="true" placeholder="End Date" name="end_date" size="25" style="height:25px; padding-left:10px;border-radius:5px;"></input>
    <br></br>
    <input type="textarea" placeholder="Features" name="features" size="500" style="height:250px; width:500px; padding-left:10px;border-radius:5px;"></input>
    <br></br>Write your feature seperated by semicolon
    <input type="file" name="projectphoto" >Upload zip/rar file of all images of project</input>
    <br></br>
    
    <td colspan="2">
        <input type="submit" style=" background:black;border:none; color:white; font-family:geor…order-radius:5px; position:relative;" value="Register" name="submit"></input>
    </td>
    </form>
    </body>
</html>