<?php
 	session_start();
	if(isset($_SESSION['BBZBID'])){
		header("Location:builderIndex.php");
	}
	include 'header.php';
 ?>
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"></h1>
                        <br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <p class="intro-text">Meet the best Builders of your locality<br />Sample details are provided</p>
                        		<?php
		                    		include 'searchbar.php';
								?>
                        <a href="#builder_contractor" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                        <br /><br /><br /><br /><br /><br /><br />
                    </div>
                </div>
            </div>
        </div>
        
        <!--<div id="form-content" class="modal hide fade in">
		    <div class="modal-header">
		        <a class="close" data-dismiss="modal">×</a>
		        <h3>Send me a message</h3>
		    </div>
		    <div class="modal-body">
		        <form class="contact" name="contact">
		            <label class="label" for="name">Your Name</label><br>
		            <input type="text" name="name" class="input-xlarge"><br>
		            <label class="label" for="email">Your E-mail</label><br>
		            <input type="email" name="email" class="input-xlarge"><br>
		            <label class="label" for="message">Enter a Message</label><br>
		            <textarea name="message" class="input-xlarge"></textarea>
		        </form>
		    </div>
		    <div class="modal-footer">
		        <input class="btn btn-success" type="submit" value="Send!" id="submit">
		        <a href="#" class="btn" data-dismiss="modal">Nah.</a>
		    </div>
		</div>
		-->
    </header>
    <br /><br /><br />
    
    <!-- search builder n contractor div -->
    <section id="builder_contractor" class="container content-section">
    	<!--<div class="row">
        	<div class="col-lg-12">
                <center><h1>Searching for a builder or contractor ? </h3></center>
            </div>
    </div>-->
        <div class="row">
        	
            <div class="col-lg-5">
            	<div class="grow">
            		<h3 class="text-center">Builder in your locality</h1>
            		<div class="row">
            			<div class="local_builder col-md-6">
            				<a href="builderpage.php?BBZBID=1000001">
            				<div class="col-md-3">
                                <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000001'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
            					<img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
            				</div>
            				<div class="col-md-9">
            				<?php
                              echo $res1['cmp_name'];
                            ?><br/>
            				<?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
            				</div>
            				</a>
            			</div>
            			<div class="local_builder col-md-6">
            				<a href="builderpage.php?BBZBID=1000002">
            				<div class="col-md-3">
            					 <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000002'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-9">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
            			<div class="local_builder col-md-6">
            				<a href="builderpage.php?BBZBID=1000003">
            				<div class="col-md-3">
            					 <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000003'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-9">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
            				</a>
            			</div>
            			<div class="local_builder col-md-6">
            				<a href="builderpage.php?BBZBID=1000004">
            				<div class="col-md-3">
            					 <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000004'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-6">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
            				</a>
            			</div>
            		</div>
            	</div>
                
            </div>
            <div class="col-lg-5">
            	<div class="grow">
            		<h3 class="text-center">Contractor in your locality</h1>
            		<div class="row">
            		<!--	<div class="local_builder col-md-6">
            				<a href="builder_page.php">
            				<div class="col-md-3">
            					<img src="builder_logo.jpg" width="50px" height="50px" />
            				</div>
            				<div class="col-md-9">
            				Builder 1sdksakdaslkdasldm sakdmnaslm
            				</div>
            				</a>
            			</div>
            			<div class="local_builder col-md-6">
            				<a href="builder_page.php">
            				<div class="col-md-3">
            					<img src="builder_logo.jpg" width="50px" height="50px" />
            				</div>
            				<div class="col-md-9">
            				Builder 1sdksakdaslkdasldm sakdmnaslm
            				</div>
            				</a>
            			</div>
            			<div class="local_builder col-md-6">
            				<a href="builder_page.php">
            				<div class="col-md-3">
            					<img src="builder_logo.jpg" width="50px" height="50px" />
            				</div>
            				<div class="col-md-9">
            				Builder 1sdksakdaslkdasldm sakdmnaslm
            				</div>
            				</a>
            			</div>
            			<div class="local_builder col-md-6">
            				<a href="builder_page.php">
            				<div class="col-md-3">
            					<img src="builder_logo.jpg" width="50px" height="50px" />
            				</div>
            				<div class="col-md-9">
            					Builder 1sdksakdaslkdasldm sakdmnaslm
            				</div>
            				</a>
            			</div>
            		</div>
                -->
                <center><p><b>Coming Soon</b></p></center>
            	</div>
                
            </div>
        </div>
<div class="row">
            
            <div class="col-lg-5">
                <div class="grow">
                    <h3 class="text-center">Builder in your locality</h1>
                    <div class="row">
                        <div class="local_builder col-md-6">
                            <a href="builderpage.php?BBZBID=1000001">
                            <div class="col-md-3">
                                <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000001'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-9">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
                            </a>
                        </div>
                        <div class="local_builder col-md-6">
                            <a href="builderpage.php?BBZBID=1000002">
                            <div class="col-md-3">
                                 <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000002'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-9">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                        <div class="local_builder col-md-6">
                            <a href="builderpage.php?BBZBID=1000003">
                            <div class="col-md-3">
                                 <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000003'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-9">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
                            </a>
                        </div>
                        <div class="local_builder col-md-6">
                            <a href="builderpage.php?BBZBID=1000004">
                            <div class="col-md-3">
                                 <?php
                                $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '1000004'";
                              $pwd1 = mysqli_query($link, $sql1);
                              $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
                                ?>
                                <img src="builder/builderLogos/Jaipur/<?php echo $res1['cmp_name']; ?>.png" width="40px" height="40px" />
                            </div>
                            <div class="col-md-9">
                            <?php
                              echo $res1['cmp_name'];
                            ?><br/>
                            <?php
                               //echo $res1['ratings']."&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                              $rating = $res1['ratings'];
                              include 'rating.php';
                              echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                                ?>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-5">
                <div class="grow">
                    <h3 class="text-center">Contractor in your locality</h1>
                    <div class="row">
                    <!--    <div class="local_builder col-md-6">
                            <a href="builder_page.php">
                            <div class="col-md-3">
                                <img src="builder_logo.jpg" width="50px" height="50px" />
                            </div>
                            <div class="col-md-9">
                            Builder 1sdksakdaslkdasldm sakdmnaslm
                            </div>
                            </a>
                        </div>
                        <div class="local_builder col-md-6">
                            <a href="builder_page.php">
                            <div class="col-md-3">
                                <img src="builder_logo.jpg" width="50px" height="50px" />
                            </div>
                            <div class="col-md-9">
                            Builder 1sdksakdaslkdasldm sakdmnaslm
                            </div>
                            </a>
                        </div>
                        <div class="local_builder col-md-6">
                            <a href="builder_page.php">
                            <div class="col-md-3">
                                <img src="builder_logo.jpg" width="50px" height="50px" />
                            </div>
                            <div class="col-md-9">
                            Builder 1sdksakdaslkdasldm sakdmnaslm
                            </div>
                            </a>
                        </div>
                        <div class="local_builder col-md-6">
                            <a href="builder_page.php">
                            <div class="col-md-3">
                                <img src="builder_logo.jpg" width="50px" height="50px" />
                            </div>
                            <div class="col-md-9">
                                Builder 1sdksakdaslkdasldm sakdmnaslm
                            </div>
                            </a>
                        </div>
                    </div>
                -->
                <center><p><b>Coming Soon</b></p></center>
                </div>
                
            </div>
        </div>
    </section>

	
    <!-- About Section -->
    <!--
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Us</h2>
                
                <p>Are your dreams of constructing a house/office/restaurant etc. lifeless just because you did not find the right builder or the right contractor? You’ve just landed at the place to be. </p>
                <p>Construction (both residential and commercial) isn’t an easy job, both for the owner and the builder. At BuildBlockz.com we aim at providing one-stop solution to both, all just a CLICK away.</p>
                
            </div>
        </div>
    </section>

    -->
    <script>
    $(document).ready(function(){
    	$('#focusSearch').click(function() {
    	 	//alert();
		     $('#search').focus();
		     
		});
    });
    	 
    </script>
   
    <section id="about" class="content-section text-center">
        <div class="about-section">
            <div class="col-lg-6 col-lg-offset-3">
                <h2>About Us</h2>
                
                <p>Are your dreams of constructing a house/office/restaurant etc. lifeless just because you did not find the right builder or the right contractor? You’ve just landed at the place to be. </p>
                <p>Construction (both residential and commercial) isn’t an easy job, both 
                	for the owner and the builder. At BuildBlockz.com we aim at providing 
                	one-stop solution to both, all just a <span id="focusSearch" >CLICK</span>  away.</p>
                	<a href="http://buildblockz.com/aboutus.php" class="btn btn-primary btn-lg"><span class="network-name">Read More</span></a>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Building Calculator</h2>
                
               <p> Coming Soon</p>
               <img src="images/Calculator-icon18.png"  />
            </div>
        </div>
    </section>
    
    <?php
    include 'footer.php';
    ?>