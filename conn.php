<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'addphim';
	
	$conn = new mysqli($servername, $username, $password, $db);
	
	if ($conn->connect_error) {
		die($conn->connect_error);
	}
	mysqli_query($conn,'SET NAMES UTF8');
 ?>