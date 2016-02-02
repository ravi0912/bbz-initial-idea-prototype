<?php
	$link=mysqli_connect('localhost','root','password','database_name');
	 
	if(mysqli_connect_errno($link)){
			echo 'Failed to connect';
	}
?>