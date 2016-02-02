<!-- Map Section -->

    <div id="map"></div>

    <!-- Footer -->
    </div>
    <footer>
        
        <div class="container">
        	<div class="row">
        		
        		<div class="col-md-4">
        			<ul>
        				<li>
        					<a href="/aboutus.php">About Us</a>
        				</li>
        				<li>
        					<a href="faq.php">FAQ</a>
        				</li>
        				<li>
        					<a href="contactus.php">Contact Us</a>
        				</li>
        				<li>
        					<a href="whybbz.php">Why buildblockz.com</a>
        				</li>
        				<li>
        					<a href="feedback.php">Feedback</a>
        				</li>
        			</ul>
        		</div>
        		<div class="col-md-4">
        			<ul>
        				<li>
        					<a href="search.php?search=jaipur">Builders In Jaipur</a>
        				</li>
        			</ul>
        		</div>
        		<div class="col-md-4">
        			<ul>
        				<li>
        					Contractors In Jaipur
        				</li>
        			</ul>
        		</div>
        	</div>
        </div>
        <div class="container">
        	<div class="row">
        		<div class="col-lg-3 col-lg-offset-9 social_icons">
        		<a class="fb_icon" href="https://facebook.com/buildblockz">&nbsp;</a>
        		<a class="gplus_icon" href="https://googleplus.com/buildblockz">&nbsp;</a>
        		<a class="twitter_icon" href="https://twitter.com/buildblockz">&nbsp;</a>
        		<a class="insta_icon" href="https://instagram.com/buildblockz">&nbsp;</a>
        		</div>
        	</div>
            
        </div>
        <div class="container text-center">
             &copy; 2015 BuildBlockz.com | All Rights Reserved
        </div>
    </footer>
	<!--<script type="javascript/text">
		
		$('#form-content').modal("show");
	</script>
	-->
    <!-- jQuery 
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(26.892018, 75.810078);
  var mapOptions = {
    zoom: 17,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'My Location'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    
    
		
	</body>
</html>