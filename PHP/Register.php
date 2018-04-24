<?php
	include("DBTools.php");
	$link=dbConnect();
	
	$name = safe($_POST['name']);
	$password = safe($_POST['pass']);
	$email = $_POST['email'];


	$query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());

	echo 'success';
	
	
?>