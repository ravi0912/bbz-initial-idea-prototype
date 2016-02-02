<link href="css/projectDetails.css" rel="stylesheet" type="text/css" media="screen" /> 
<!--[if IE]>
	<link href="css/jphotogrid.ie.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]--> 

<script src="js/jphotogrid.js"></script>

<script>
$(document).ready(function(){
	$('#pg').jphotogrid({
	baseCSS: {
		width: '175px',
		height: '117px',
		padding: '0px'
	},
	selectedCSS: {
		top: '50px',
		left: '100px',
		width: '500px',
		height: '360px',
		padding: '10px'
	}
	});
});
	
</script> 
<ul id="pg">
	<?php
		$fi = new FilesystemIterator($path, FilesystemIterator::SKIP_DOTS);
		$total = iterator_count($fi);
		for($i=1;$i<$total;$i++){
		$path1 = $path."/".$i.".png";
		?>
	<li>
		<img src="<?php echo $path1; ?>" alt="Fb" />
		<p>Caption</p>
	</li>
	<?php
		}
	?>
	<!--sakmdasmdmasl YAHA TK-->
</ul>