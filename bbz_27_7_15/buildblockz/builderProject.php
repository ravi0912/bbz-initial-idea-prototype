<?php
	include 'header.php';
	
	$BBZBID = mysqli_real_escape_string($link,$_GET['BBZBID']);
	//error_reporting(E_ERROR | E_PARSE);
	$sql = "SELECT * FROM db_builder_projects WHERE BBZBID = '$BBZBID'";
	$pwd = mysqli_query($link, $sql);
	$numSearch = mysqli_num_rows($pwd);
	//$row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
	//$path = "builder/" . $BBZBID . "/project/" . $BBZPID;
  	?>
  		
  	<br/><br/><br/><br/><br/>
  	<?php
  	if($numSearch > 0){
  		?>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-8 col-md-offset-2 projectlist">
  					<table class="table table-striped">
	        	<tr>
	        	  <th>Project Name</th><th>Rating</th><th>Status</th><th>Construction Type</th>
	    <?php
  		 while ($row = mysqli_fetch_assoc($pwd)){
            $BBZPID = $row['BBZPID'];
                ?>
	        	</tr>
	                  <tr>
	                  	<td>
	                  		<?php
	                  echo "<a href = \"builderProjectDetails.php?BBZPID=$BBZPID\"><b>".$row['project_name']."</b></a><br></br>";
					  ?>
	                  	</td> 
	                    <td>
	                      <b><?php
							  $rating = $row['rating'];
							  include 'rating.php';
					  
                       echo "&nbsp;&nbsp;(".$row['numOfRatings'].")";
                       ?></b>
	                    </td>
	                    <td>
	                      <b><?php echo $res['status'];?></b>
	                    </td>
	                    <td>
	                      <b><?php echo $res['constructionType'];?></b>
	                    </td>
	                  </tr>
               <?php
                	}
            	}else{ ?>
            		<b>No Project Done.</b>
            	<?php
            	}
  			?>
  		</table>
  				</div>
  			</div>
  		</div>
  		
  	

	<?php
  		include 'footer.php';
  	?>