<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />

		<title>BuildBlockz</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
 		<link href="css/grayscale.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/demo.css" />
		<link type="text/css" rel="stylesheet" href="css/buildb.css" />
		<link type="text/css" rel="stylesheet" href="dist/css/jquery.mmenu.all.css" />
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>		<!-- Bootstrap Core CSS -->
	    
	
	    <!-- Custom CSS -->
	   
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script type="text/javascript" src="dist/js/jquery.mmenu.min.all.js"></script>
		
				 
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu({
					extensions	: [ 'effect-slide-menu', 'pageshadow' ],
					
					counters	: true,
					navbar 		: {
						title		: 'BuildBlockz'
					},
					navbars		: [
						 {
							position	: 'top',
							content		: [
								'prev',
								'title',
								'close'
							]
						}, {
							position	: 'bottom',
							content		: [
								'<a class="fb_icon" href="https://facebook.com/buildblockz">&nbsp;</a>',
        		'<a class="gplus_icon" href="https://googleplus.com/buildblockz">&nbsp;</a>',
        		'<a class="twitter_icon" href="https://twitter.com/buildblockz">&nbsp;</a>',
        		'<a class="insta_icon" href="https://instagram.com/buildblockz">&nbsp;</a>'
							]
						}
					]
				});
			});
			
		</script>
	</head>
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		
		<div id="pag">
				
				
			<!--
			<div class="content">
				<p><strong>This is an advanced demo.</strong><br />
					Click the menu icon to open the menu.</p>
				<p>For more demos, a tutorial, documentation and support, please visit <a href="http://mmenu.frebsite.nl" target="_blank">mmenu.frebsite.nl</a></p>			
			</div>
			-->
			<nav id="menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="aboutus.php">About us</a>
						<!--
						<ul>
							<li><a href="#about/history">History</a></li>
							<li><a href="#about/team">The team</a>
								<ul>
									<li><a href="#about/team/management">Management</a></li>
									<li><a href="#about/team/sales">Sales</a></li>
									<li><a href="#about/team/development">Development</a></li>
								</ul>
							</li>
							<li><a href="#about/address">Our address</a></li>
						</ul>
						-->
					</li>
					<li><a href="contactus.php">Contact</a></li>
				</ul>
			</nav>
			<?php

		    	include 'database.php';
		      	error_reporting(E_ERROR | E_PARSE);
		      	$search = $_GET['search'];
		      	session_start();
				$pagename = $_SERVER["SCRIPT_NAME"];
				$pageArray = split('/', $pagename);
				$pagename = $pageArray[1];
				
		    	if(!isset($_SESSION['BBZUID']) && !isset($_SESSION['BBZBID'])){
    	
				?>
			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		        <div class="container header_nav">
		        	<a id="side_menu" href="#menu"><i class="fa fa-bars"></i></a>
		            <div class="navbar-header">
						
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		                    <i class="fa fa-bars"></i>
		                </button>
		                
		                <a class="navbar-brand page-scroll" href="index.php">
		                	<img src="images/buildblockzlogob.png" />
		                     <!--<span class="light">Build</span>Blockz-->
		                </a>
		            </div>
					
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		                <ul class="nav navbar-nav">
		                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		                    <?php
		                    if($pagename != "index.php"){
		                    	?>
		                    <li>
		                    	<?php
		                    		include 'searchbar.php';
								?>

		                    	<!--<form action="search.php" method="GET">
				                  <input type="text" name="search" size="50" placeholder="Search Builder in your City."> </input>
				                  <input type="submit" value="Go" size="100"></input>
				                </form>
				                -->
		                    </li>
		                    <?php
		                    }
		                    ?>
		                    <li>
		                        <a class="page-scroll" href="aboutus.php">About</a>
		                    </li>
		                    
		                    <li>
		                        <a class="page-scroll" href="contactus.php">Contact</a>
		                    </li>
		                    
		                    <li>
		                    	<a data-toggle="modal" data-target=".bs-example-modal-lg" href="#form-content" >Login/Signup</a>
		                    </li>
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>
		    <?php 
		    if($thispage!='siteLogin'){
		    	?>
		    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			  	<div class="modal-dialog modal-lg">
			    	<div class="modal-content">
			      		<div class="modal-header">
					        <div class="row">
					        	<div id="login_signup_update"></div>
					        	<a class="close" data-dismiss="modal">×</a>
					        </div>
					    </div>
					    <div class="modal-body">
					        <?php
					        	include 'loginForm.php';
								?>
					    </div>
					    <div class="modal-footer">
					        &nbsp;
					    </div>
			    	</div>
			  	</div>
			</div>
		    <?php
			}
   }else if(isset($_SESSION['BBZUID'])) {
   		if(isset($_SESSION['redirect_url']) && $_SESSION['redirect_url']!=null){
   			
   			if($_SESSION['redirect_url']=='userCompose.php'){
   				
				
   				header("Location:".$_SESSION['redirect_url']."?id=".$_SESSION['builder_id']."&name=".$_SESSION['user_name']);
   			}
				
   			
   		}
   	?>
   			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		        <div class="container header_nav">
		        	<a id="side_menu" href="#menu"><i class="fa fa-bars"></i></a>
		            <div class="navbar-header">
						
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		                    <i class="fa fa-bars"></i>
		                </button>
		                
		                <a class="navbar-brand page-scroll" href="index.php">
		                	
		                     <span class="light">Build</span>Blockz
		                </a>
		            </div>
					
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		                <ul class="nav navbar-nav">
		                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		                    
		                    <?php
		                    if($pagename != "index.php"){
		                    	?>
		                    <li>
		                    	<?php
		                    		include 'searchbar.php';
								?>
		                    </li>
		                    <?php
		                    }
		                    ?>
		                    <li>
		                        <a class="page-scroll" href="#notify">Notification</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="usermessage.php">Messages</a>
		                    </li>
		                    <!--<li>
		                        <a class="page-scroll" href="#contact">Profile Update</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#contact">change Password</a>
		                    </li>
		                   -->
		                   <li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-circle-arrow-down" ></i> <span class="caret"></span></a>
				                <ul class="dropdown-menu">
				                  <li><a href="userProfile.php">Profile Update</a></li>
				                  <li><a href="userReview.php">Edit Review</a></li>
				                  <li><a href="userPassword.php">Change Password</a></li>
				                  <li role="separator" class="divider"></li>
				                  <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> &nbsp;Logout</a></li>
				                  
				                  
				                </ul>
			              	</li>
		                    
		                    
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>
   	
   	<?php
   }else if(isset($_SESSION['BBZBID'])){
   		if(isset($_SESSION['redirect_url']) && $_SESSION['redirect_url']!=null){
   			//$_SESSION['redirect_url']=null;
   			header("Location:".$_SESSION['redirect_url']);
   		}
   	?>
   			<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		        <div class="container header_nav">
		        	<a id="side_menu" href="#menu"><i class="fa fa-bars"></i></a>
		            <div class="navbar-header">
						
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		                    <i class="fa fa-bars"></i>
		                </button>
		                
		                <a class="navbar-brand page-scroll" href="index.php">
		                	
		                     <span class="light">Build</span>Blockz
		                </a>
		            </div>
					
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		                <ul class="nav navbar-nav">
		                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
		                    
		                    <?php
		                    if($pagename != "index.php"){
		                    	?>
		                    <li>
		                    	<?php
		                    		include 'searchbar.php';
								?>
		                    </li>
		                    <?php
		                    }
		                    ?>
		                    <li>
		                        <a class="page-scroll" href="#notify">Notification</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="buildermessage.php">Messages</a>
		                    </li>
		                    <!--<li>
		                        <a class="page-scroll" href="#contact">Profile Update</a>
		                    </li>
		                    <li>
		                        <a class="page-scroll" href="#contact">change Password</a>
		                    </li>
		                   -->
		                   <li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-circle-arrow-down" ></i> <span class="caret"></span></a>
				                <ul class="dropdown-menu">
				                	<li><a href="builderUpdate.php">Update Company</a></li>
				                  <li><a href="builderProfile.php">Profile Update</a></li>
				                  <li><a href="builderPassword.php">Change Password</a></li>
				                  <li role="separator" class="divider"></li>
				                  <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> &nbsp;Logout</a></li>
				                  
				                  
				                </ul>
			              	</li>
		                    
		                    
		                </ul>
		            </div>
		            <!-- /.navbar-collapse -->
		        </div>
		        <!-- /.container -->
		    </nav>
			
<?php
   }
   
    ?>