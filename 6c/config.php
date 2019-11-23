<?php
//Connect to MySQL
$connection = mysqli_connect("localhost","root","","arkademy");

//Checking connection
if (mysqli_connect_errno()){
	echo "Failed to connect MySQL: " . mysqli_connect_error();
}
?>