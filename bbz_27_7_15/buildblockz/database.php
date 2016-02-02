<?php
	$link=mysqli_connect('localhost','root','krj@123','buildblockz');
	 
	if(mysqli_connect_errno($link)){
			echo 'Failed to connect';
	}
?>