<form class="form-horizontal" action="builderUpdate.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Company Update</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="cmp_name">Company Name</label>  
  <div class="col-md-6">
	<img src="<?php echo $path;?>" alt="No Logo" width="100"  />
    <input type="file" name="logo">
      
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmp_name">Company Name</label>  
  <div class="col-md-6">
	  <input id="cmp_name" name="cmp_name" type="text" placeholder="Company Name*" class="form-control input-md" value= "<?php echo $row['cmp_name']?>" required="">
    
  </div>
</div>

<!-- Text input-->
<label class="col-md-6 control-label ">Head Office Address</label> 
<label class="col-md-6 control-label ">&nbsp;</label> 

<div class="form-group">
  <label class="col-md-4 control-label" for="hoal1">Line 1</label>  
  <div class="col-md-6">
  <input id="hoal1" name="hoal1" type="text" value= "<?php echo $row['hoal1']?>" placeholder="Line 1*" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoal2">Line 2</label>  
  <div class="col-md-6">
  <input id="hoal2" name="hoal2" type="text" value= "<?php echo $row['hoal2']?>" placeholder="Line 2" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-6">
  <input id="city" name="city" type="text" value="<?php echo $row['hoac']?>" placeholder="City*" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoas">State</label>  
  <div class="col-md-6">
  <input id="hoas" name="hoas" type="text" value= "<?php echo $row['hoas']?>" placeholder="State" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoap">Pincode</label>  
  <div class="col-md-6">
  <input id="hoap" name="hoap" type="number" value= "<?php echo $row['hoap']?>" placeholder="Pincode" class="form-control input-md" required="">
  <span class="help-block">6 digit zip postal code</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hocm">Mobile No.</label>  
  <div class="col-md-6">
  <input id="hocm" name="hocm" type="number" value= "<?php echo $row['hocm']?>" placeholder="Mobile No*" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="hocm">Phone No.</label>  
  <div class="col-md-6">
  <input id="hocm" name="hocp" type="number" value= "<?php echo $row['hocp']?>" placeholder="Phone No*" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="hoce">Email</label>  
  <div class="col-md-6">
  <input id="hoce" name="hoce" type="email" value= "<?php echo $row['hoce']?>" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numOfBranch">Number of Branches</label>  
  <div class="col-md-6">
  <input id="numOfBranch" name="numOfBranch" value= "<?php echo $row['numOfBranch']?>" type="number" placeholder="Number of Branches" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch ( City )</label>  
  <div class="col-md-6">
  <input id="branch" name="branch" type="text" value= "<?php echo $row['branch']?>" placeholder="Branch" class="form-control input-md" required="">Eg : Jaipur, Delhi, Kolkata (City seperated by commas.)
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numProjectCity">Number of Projects in Each City</label>  
  <div class="col-md-6">
  <input id="numProjectCity" name="numProjectCity" value= "<?php echo $row['numProjectCity']?>" type="text" placeholder="Number of Projects in Each City" class="form-control input-md" required="">Eg : 27_Jaipur,30_Delhi [(number of project)_(City Name) seperated by commas.]
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="about">About</label>  
  <div class="col-md-6">
  <input id="about" name="about"  value= "<?php echo $row['about']?>" type="text" placeholder="About" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="aim">Aim</label>  
  <div class="col-md-6">
  <input id="aim" name="aim"  value= "<?php echo $row['aim']?>" type="text" placeholder="Aim" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="website">Website</label>  
  <div class="col-md-6">
  <input id="website" name="website" value= "<?php echo $row['website']?>" type="text" placeholder="Website" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="since">Since</label>  
  <div class="col-md-6">
  <input id="since" name="since" value= "<?php echo $row['since']?>" type="number" placeholder="Since" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="typeOfConstruction">Types of Construction</label>  
  <div class="col-md-6">
  <input id="typeOfConstruction" name="typeOfConstruction" value= "<?php echo $row['typeOfConstruction']?>" type="text" placeholder="Types of Construction" class="form-control input-md" required="">Eg : Interior, Exterior, Parking(Types of Contruction seperated by Commas.)
    
  </div>
</div>
<div class="col-md-6 col-md-offset-4">
<input type="submit" class="btn btn-primary btn-block" value="sumbit"/>
</div>
</fieldset>
</form>
