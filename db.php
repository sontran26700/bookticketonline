<?php
// To connect to the database
// This code is called by other php-files to use the database
$con = mysqli_connect("localhost","root","","addphim");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>