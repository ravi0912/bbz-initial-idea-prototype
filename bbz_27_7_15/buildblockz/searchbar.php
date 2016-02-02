 <?php
    	$pagename = $_SERVER["SCRIPT_NAME"];
				$pageArray = split('/', $pagename);
				$pagename = $pageArray[1];
    	if($pagename=='index.php'){
    		?>
    		<link type="text/css" rel="stylesheet" href="css/indexSearchbar.css" />
    			<form class="form-horizontal"action="search.php" method="GET">
					<fieldset id="searchfield" >
						<div class="form-group">
						  <div class="row">
						  	  <div class="col-lg-1">
							  	
							    <select class="selectpicker" data-style="btn-info">
    						    	<option>Builder</option>
							        <option>Contractor</option>
							        <option>Architecture</option>
							        <option>Interior Desg.</option>
    						    </select>
							  </div>
							  <div class="col-lg-11">
							  	
							    <input id="searchinput" name="search"  type="search" placeholder="Search Builder in your City" class="form-control input-md">
							   </div>
							   <div class="col-lg-1">
							  	
							    <button  class="btn btn-primary">Go</button>
							  </div>
							  	
							 
							  
						  </div>
						  
						</div>
					</fieldset>
				</form>
    		<?php
    	}else{
    		?>
    		<link type="text/css" rel="stylesheet" href="css/pageSearchbar.css" />
    			<form class="form-horizontal"action="search.php" method="GET">
					<fieldset id="searchfield" >
						<div class="form-group">
						  <div class="row">
							  <div class="col-lg-12">
							  	
							    <select class="selectpicker" data-style="btn-info">
    						    	<option>Builder</option>
							        <option>Contractor</option>
							        <option>Architecture</option>
							        <option>Interior Desg.</option>
    						    </select>							  	
							    <input id="searchinput" name="search"  type="search" placeholder="Search Builder in your City" class="form-control input-md">
							    <button  class="btn btn-primary">Go</button>
							  
							  	
							  </div>
							  
						  </div>
						  
						</div>
					</fieldset>
				</form>
    		<?php
    	}
?>