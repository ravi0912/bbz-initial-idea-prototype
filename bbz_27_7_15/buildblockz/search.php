<?php
include 'header.php';
?>
  	<br /><br /><br />
   
    
    <hr/>
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12 round_box">
    			<?php 
      $terms = explode(" ",$search);
      $query = "SELECT id FROM db_search_keywords WHERE ";

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
              echo "<b>$numSearch</b> Search Results for $search<br></br>";
		  ?>
		  	<table class="table">
        		<tr>
          			<th><u>Company Name</u></th><th><u>Organization</u></th><th><u>City</u></th><th><u>Rating</u></th>
        		</tr>
  		<?php
              while ($row = mysqli_fetch_assoc($query)){
                $id = $row['id'];
                $sql = "SELECT * FROM db_search_contactdetails WHERE id = '$id'";
                $pwd = mysqli_query($link, $sql);
                $res = mysqli_fetch_array($pwd,MYSQL_ASSOC);
                if($res['BBZBID'] > 0)
                {
                  $k = $res['BBZBID'];
                  
                  ?>
                  <tr>
                  	<td>
                  		<?php
                  		echo "<a href = \"builderPage.php?BBZBID=$k&search=$search\"><b>".$res['name']."</b></a><br></br>";
						?>
                  	</td>
                    <td>
                      <b><?php echo $res['organization'];?></b>
                    </td>
                    <td>
                      <b><?php echo $res['city'];?></b>
                    </td>
                    <td>
                      <b><?php
                      $sql1 = "SELECT * FROM db_builder_details WHERE BBZBID = '$k'";
                      $pwd1 = mysqli_query($link, $sql1);
                      $res1 = mysqli_fetch_array($pwd1,MYSQL_ASSOC);
					  $rating = $res1['ratings'];
					  include 'rating.php';
					  
                       echo "&nbsp;&nbsp;(".$res1['numOfRatings'].")";
                       ?></b>
                    </td>
                  </tr>
                  <?php
                }
              }
              
             while ($row1 = mysqli_fetch_assoc($query1)){
                $id = $row1['id'];
                $sql = "SELECT * FROM db_search_contactdetails WHERE id = '$id'";
                $pwd = mysqli_query($link, $sql);
                $res = mysqli_fetch_array($pwd,MYSQL_ASSOC);
                if($res['BBZBID'] > 0)
                {
                }else{
                	?>
                  <tr>
                  	<td>
                  		<?php
                  echo "<a href = \"builderPage.php?id=$id&search=$search\"><b>".$res['name']."</b></a><br></br>";
				  ?>
                  	</td>
                    <td>
                      <b><?php echo $res['organization'];?></b>
                    </td>
                    <td>
                      <b><?php echo $res['city'];?></b>
                    </td>
                      <td>
                      <b>No Ratings</b>
                    </td>
                  </tr>
                  <?php
                }
              }
			 ?>
      </tbody>
			 </table>
			 <?php
      }else 
        echo "No results found for \"<b>$search</b>\"";
      
    ?>
    		</div>
    	</div>
    </div>
<?php
include 'footer.php';
?>
