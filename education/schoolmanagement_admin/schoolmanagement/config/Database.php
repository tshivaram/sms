<?php
	

	$conn =mysqli_connect("localhost","root","","schoolmanagement");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
	


?>