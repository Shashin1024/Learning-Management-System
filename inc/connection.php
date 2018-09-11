<?php 
	$connection = mysqli_connect('localhost','root','','lmssignup');

	if (mysqli_connect_errno()) {
		# code...
		die('Database connection failed' . mysqli_connect_errno);
	}
 ?>