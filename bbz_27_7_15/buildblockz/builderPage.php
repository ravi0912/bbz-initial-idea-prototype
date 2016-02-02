<?php

include 'database.php';
error_reporting(E_ERROR | E_PARSE);
$BBZBID = $_GET['BBZBID'];
$id = $_GET['id'];

$sql = "SELECT * FROM db_builder_details WHERE BBZBID = '$BBZBID'";
$pwd = mysqli_query($link, $sql);
$numSearch = mysqli_num_rows($pwd);

include 'header.php';

  ?>

     <script src="js/sendmeetup.js" type="text/javascript"></script>
     
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
				  <div class="container">
				    <br /><br /><br /><br /><br /><br />
				    <div class="row">
				      <div class="col-md-3">
				        <div class="panel panel-info">
				                <div class="panel-heading">
				                    <h3 class="panel-title"><center>Fix Up a Meeting!</center></h3>
				                    </div>
				                    <div id="form_meetup">
				                    	<form id="fixupmeet" class="form-horizontal">
				                <fieldset>
				
				                  <!-- Form Name -->
				                  
				                  
				                  <!-- Text input-->
				                  
				                    <input id="builder_id" name="builder_id" type="hidden" value="<?php echo $BBZBID; ?>" />
				
				                    <input id="fullname" name="fullname" type="text" placeholder="Full Name*" class="form-control input-md" required="">
				                      
				                    <br />
				                    <input id="email" name="email" type="text" placeholder="Email*" class="form-control input-md" required="">
				                      
				                    
				                    <br />
				                    <input id="mobileNumber" name="mobileNumber" type="number" placeholder="Mobile*" data-placement="right" data-toggle="tooltip" title="We'll get back to you on this number" class="form-control input-md" required="">
				                    
				                  <br />
				                      <button id="fixmeet" name="fixmeet" class="btn btn-primary btn-block">Send Request</button>
				                    
				                  
				                  
				                  </fieldset>
				                </form>
				                		<script>
				                			$(document).ready(function(){
				                				$("#2hourclock").hide();
				                			});
				                		</script>
				                		<div id="2hourclock">
				                			<img src="images/2hrclock.png" />
				                		</div>
				                    </div>
				              
				          
				        </div>
				      </div>
				      
				<?php
					//echo $numSearch;
				  if($numSearch > 0){
				      $path = "builder/".$BBZBID."/companyLogo/".$BBZBID.".jpg";
				      $row = mysqli_fetch_array($pwd,MYSQL_ASSOC);
				?>  
				  
				    <div class="col-md-9" >
				   
				   
				          <div class="panel panel-info">
				            <div class="panel-heading">
				              <h3 class="panel-title bs-callout bs-callout-info"><?php echo $row['cmp_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="userCompose.php?id=<?php echo $BBZBID; ?>&name=<?php echo $row['cmp_name']; ?>"><b>Send a Mail!</b></a></h3>
				            </div>
				            <div class="panel-body">
				              <div class="row">
				                <div class="col-md-3 col-lg-3 " align="center">
				                  
				          <img alt="User Pic" width="140px" src="<?php echo $path; ?>" class="img-circle">
				          
				        </div>
				                
				                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
				                  <dl>
				                    <dt>DEPARTMENT:</dt>
				                    <dd>Administrator</dd>
				                    <dt>HIRE DATE</dt>
				                    <dd>11/12/2013</dd>
				                    <dt>DATE OF BIRTH</dt>
				                       <dd>11/12/2013</dd>
				                    <dt>GENDER</dt>
				                    <dd>Male</dd>
				                  </dl>
				                </div>-->
				                <div class=" col-md-9 col-lg-9 "> 
				                  <table class="table table-user-information">
				                    <tbody>
				                      <tr>
				                        <td>Rating</td>
				                        <td><?php
										$rating = $row['ratings'];
										include 'rating.php';
										echo "&nbsp;(" . $row['numOfRatings'], ")";
 ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="builderProject.php?BBZBID=<?php echo $BBZBID; ?>"><b>Project Details</b></a></td>
				                      </tr>
				                      <tr>
				                        <td>Builder Name </td>
				                        <td><?php echo $row['fname'] . "&nbsp;" . $row['mname'] . "&nbsp;" . $row['lname']; ?></td>
				                      </tr>
				                      <tr>
				                        <td>Head Office Address </td>
				                        <td><?php echo $row['hoal1'] . "&nbsp;<br/>" . $row['hoal2'] . "&nbsp;<br/>City :" . $row['hoac'] . "&nbsp;State :" . $row['hoas'] . "-" . $row['hoap']; ?></td>
				                      </tr>
				                      <tr>
				                        <td>call</td>
				                        <td><?php echo $row['hocm'] . "&nbsp;&nbsp;" . $row['hocp']; ?></td>
				                      </tr>
				                      <tr>
				                        <td>number of branch</td>
				                        <td><?php echo $row['numOfBranch']; ?></td>
				                      </tr>
				                      <tr>
				                        <td>Branch in City</td>
				                        <td><?php $terms = explode(",", $row['branch']);
											$x = 0;
											foreach ($terms as $each) {
												if ($x == 1) {
													echo "," . $each;
												} else {
													echo $each;
													$x = 1;
												}
											}
				                ?>.
				            </td>
				                      </tr>
				                      <tr>
				                        <td>Number of Project with City </td>
				                        <td><?php $terms = explode(",", $row['numProjectCity']);
											$x = 0;
											foreach ($terms as $each) {
												$k = explode("_", $each);
												if ($x == 1) {
													echo "," . $k[1] . "-" . $k[0];
												} else {
													echo $k[1] . "-" . $k[0];
													$x = 1;
												}
											}
				                ?>
				                .
				                </td>
				                      </tr>
				                      <tr>
				                        <td>Type of Construction </td>
				                        <td><?php $terms = explode(",", $row['typeOfConstruction']);
											$x = 0;
											foreach ($terms as $each) {
												if ($x == 1) {
													echo "," . $each;
												} else {
													echo $each;
													$x = 1;
												}
											}
				                ?>
				                .
				              </td>
				                      </tr>
				                      <tr>
				                        <td>Aim</td>
				                        <td><?php echo $row['aim']; ?></td>
				                      </tr>
				                      <tr>
				                        <td>About</td>
				                        <td><?php echo $row['about']; ?></td>
				                      </tr>
				                      <tr>
				                        <td>Since</td>
				                        <td><?php echo $row['since']; ?></td>
				                      </tr>
				                      
				                      
				                      
				              <?php
				                if(isset($row['website'])){
				              ?>
				                      <tr>
				                        <td>Website</td>
				                        <td><a href="../<?php echo $row['website']; ?>" target="_blank"><?php echo $row['website']; ?></a></td>
				                      </tr>
				                      <?php } ?>
				    
				                      
				                     
				                    </tbody>
				                  </table>
				                  
				                  
				                </div>
				                
				              </div>
				              
				            </div>
				            
				          </div>
				          <div class="row">
					            	<div class="col-md-12">
					            		<?php
										if (isset($_SESSION['BBZUID'])) {
											//show add revie box;
											//echo "add review box";
											include 'reviewComment.php';

										} else {
											echo "Please login to give review.";
										}
										include 'showReview.php';
											?>
					            	
					            	</div>
					    	</div>
				        </div>
				    
				
				  <?php }else{ ?>
				
				  
				   <?php

				$sql1 = "SELECT * FROM db_search_contactdetails WHERE id = '$id'";
				$pwd1 = mysqli_query($link, $sql1);
				$row1 = mysqli_fetch_array($pwd1, MYSQL_ASSOC);
				$path = "builder/builderLogos/" . $row1['city'] . "/" . $row1['name'] . ".png";
				  ?>
				    <?php
				        if(isset($id)){
				    ?>
				    
				    <div class="col-md-6" >
				   
				   
					          <div class="panel panel-info">
					            <div class="panel-heading">
					              <h3 class="panel-title bs-callout bs-callout-info"><?php echo $row1['cmp_name']; ?> <a href="builderRequest.php"><button class="btn-default">Claim Your Business</button></a></h3>
					            </div>
					            <div class="panel-body">
					              <div class="row">
					                <div class="col-md-3 col-lg-3 " align="center">
					                 
							          <img alt="User Pic" width="140px" src="<?php echo $path; ?>" class="img-circle">
							          
							        </div>
					                
					                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
					                  <dl>
					                    <dt>DEPARTMENT:</dt>
					                    <dd>Administrator</dd>
					                    <dt>HIRE DATE</dt>
					                    <dd>11/12/2013</dd>
					                    <dt>DATE OF BIRTH</dt>
					                       <dd>11/12/2013</dd>
					                    <dt>GENDER</dt>
					                    <dd>Male</dd>
					                  </dl>
					                </div>-->
					                <div class=" col-md-9 col-lg-9 "> 
					                  <table class="table table-user-information">
					                    <tbody>
					                      <tr>
					                        <td><u>Organization</u></td>
					                        <td><?php echo $row1['organization']; ?></td>
					                      </tr>
					                      <tr>
					                        <td>City :</td>
					                        <td><?php echo $row1['city']; ?></td>
					                      </tr>
					                      <?php
					                if(isset($row1['email'])){
					              ?>
					                      <tr>
					                        <td>Email :</td>
					                        <td><?php echo $row1['email']; ?></td>
					                      </tr>
					                        <?php } ?>
					              <?php
					                if(isset($row1['mobile'])){
					              ?>
					                      <tr>
					                        <td>Mobile :</td>
					                        <td><?php echo $row1['mobile']; ?></td>
					                      </tr>
					                      <?php } ?>
					              <?php
					                if(isset($row1['phone'])){
					              ?>
					                      <tr>  
					                        <td>phone :</td>
					                        <td><?php echo $row1['phone']; ?></td>
					                      </tr>
					                        <?php } ?>
					              <?php
					                if(isset($row1['fax'])){
					              ?>
					                      <tr>
					                        <td>Fax :</td>
					                        <td><?php echo $row1['fax']; ?></td>
					                      </tr>
					                      <?php } ?>
					              <?php
					                if(isset($row1['website'])){
					              ?>
					                      <tr>
					                        <td>Website :</td>
					                        <td><a href="../<?php echo $row1['website']; ?>" target="_blank"><?php echo $row1['website']; ?></a></td>
					                      </tr>
					                      <?php } ?>
					    
					                      
					                     
					                    </tbody>
					                  </table>
					                  
					                  
					                </div>
					              </div>
					            </div>
					           </div>
					            <div class="row">
					            	<div class="col-md-12">
					            		<?php
										if (isset($_SESSION['BBZUID'])) {
											//show add revie box;
											//echo "add review box";
											include 'reviewComment.php';

										} else if (isset($_SESSION['BBZBID'])) {
											//show nothing
										} else {
											echo "Please login to give review.";
										}
										include 'showReview.php';
											?>
					            	
					            	</div>
					    		</div>
				            </div>
				            <div class="col-md-3 round_box">
				              
				          <?php 
				      $terms = explode(" ",$search);
				      $query = "SELECT id FROM db_builder_keywords WHERE ";
				
				      foreach ($terms as $each) {
				        $i++;
				        if($i == 1)
				          $query .= "keywords LIKE '%$each%' ";
				        else
				          $query .= "OR keywords LIKE '%$each%' ";
				      }
				      $query1 = mysqli_query($link,$query);
				      $query = mysqli_query($link,$query); 
				      $numSearch = mysqli_num_rows($query);
				      if($numSearch > 0){
				              echo "Relevant search results<br></br>";
				      ?>
				      <table class="table ">
				  <?php
				              while ($row = mysqli_fetch_assoc($query)){
				                $id1 = $row['id'];
				                $sql = "SELECT * FROM db_builder_contactdetails WHERE id = '$id1' ";
				                $pwd = mysqli_query($link, $sql);
				                $res = mysqli_fetch_array($pwd,MYSQL_ASSOC);
				                if($res['BBZBID'] > 0 && $k!=$id)
				                {
				                  $k = $res['BBZBID'];
				                  
				                  ?>
				                  <tr>
				                    <td>
				                      <?php
									echo "<a href = \"builderPage.php?BBZBID=$k&search=$search\"><b>" . $res['cmp_name'] . "</b></a><br></br>";
				            ?></br>
				             <?php
							$sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '$k'";
							$pwd1 = mysqli_query($link, $sql1);
							$res1 = mysqli_fetch_array($pwd1, MYSQL_ASSOC);
							//echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
							$rating = $res1['ratings'];
							include 'rating.php';
							echo "&nbsp;&nbsp;(" . $res1['numOfRatings'] . ")";
				                       ?>
				                    </td>
				                  </tr>
				                  <?php
								}
								}

								while ($row1 = mysqli_fetch_assoc($query1)){
								$id1 = $row1['id'];
								$sql = "SELECT * FROM db_builder_contactdetails WHERE id = '$id1' ";
								$pwd = mysqli_query($link, $sql);
								$res = mysqli_fetch_array($pwd,MYSQL_ASSOC);
								if($res['BBZBID'] > 0 )
								{
								}else if( $id1!=$id){
				                  ?>
				                  <tr>
				                    <td>
				                      <?php
									echo "<a href = \"builderPage.php?id=$id1&search=$search\"><b>" . $res['cmp_name'] . "</b></a></br>";
				          ?><br/>No Ratings
				                    </td>
				                  </tr>
				                  <?php
								}
								}
				       ?>
				       </table>
				       <?php
					}else
					echo "No results found for \"<b>$search</b>\"";
				    ?>
				        
				            </div>
				            <?php } ?>
				    </div>
				  </div>
				  <?php
				}
				 ?>
<script>
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	}); 
</script>
</div>
</div>

<?php
include 'footer.php';
?>