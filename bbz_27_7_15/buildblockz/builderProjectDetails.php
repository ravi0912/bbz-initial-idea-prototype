<?php
	include 'header.php';
	
	$BBZPID = mysqli_real_escape_string($link,$_GET['BBZPID']);
	$id = mysqli_real_escape_string($link,$_GET['id']);
	error_reporting(E_ERROR | E_PARSE);
	$sql = "SELECT * FROM db_builder_projects WHERE BBZPID = '$BBZPID'";
	$pwd = mysqli_query($link, $sql); 
	$row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
	$BBZBID = $row['BBZBID'];
	$sql1 = "SELECT cmp_name FROM db_builder_details WHERE BBZBID = '$BBZBID'";
	$pwd1 = mysqli_query($link, $sql1); 
	$row1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);

	$numSearch = mysqli_num_rows($pwd);
	$path = "builder/" . $BBZBID . "/project/" . $BBZPID;
  ?>
  <br /><br /><br /><br /><br /><br /><br />
  	<div class="container">
  			<div class="row">
  				<div class="col-md-12 ">
  					<div class="projectDetails">
  					<table class="table table-user-information">
                    <tbody>
                      	<tr>
                      		<td colspan="3"><h4><?php echo $row1['cmp_name'];?></h4></td>
                      		
  					  	</tr>
  		
				  		<tr>
				           	<td>Project Name : </td>
				           	<td colspan="2"><b><?php echo $row['project_name'];?></b></td>
				  		</tr>
				  		<tr>
				  			<td>Rating :</td>
				  			<td colspan="2">
				  				<b>
				  					<?php
									   $rating = $row['rating'];
									   include 'rating.php';
									  
							           echo "&nbsp;&nbsp;(".$row['numOfRatings'].")";
							           ?>
							    </b>
				           </td>
				        </tr>
						<tr>
							<td>Status : </td>
				           	<td colspan="2"><?php echo $row['status'];?></td>
				        </tr>		
				        <tr>
				           	<td>Price of Construction(exlcuded Land Price) :</td>
				           	<td colspan="2"><?php echo $row['price'];?></td>
				        </tr>
				        <tr>
         					<td>Duartion : </td>
         					<td colspan="2"><?php echo $row['start_date'];?> to <?php echo $row['end_date'];?></td>
         				</tr>
				        <tr>
				        	<td>Construction Type :</td>
				        	<td colspan="2"><?php echo $row['constructionType'];?></td>
				        </tr>
				        <tr>
				        	<td>Construction Type Details :</td>
				        	<td colspan="2"><?php echo $row['constructionTypeDetail'];?></td>
				        	
				        </tr>
         				
        				<tr>
        					<td>
        						Feature : 
        					</td>
        					<td colspan="2">
        						<?php echo $row['features']?>
        					</td>
        					
        				</tr>
        			</tbody>
        		</table>
        		</div>
        		<br /><br />
        		<?php
        		include 'imageGallery.php';
				?>
   			</div>
  			</div>
  		</div>

  <?php
  	include 'footer.php';
  ?>