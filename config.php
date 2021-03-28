<?php
//The connection object to database
$con = new mysqli("localhost","root","","Car_Rental_System");
// Check connection
	if($con->connect_error){
		die("Connection failed: " . $con->connect_error);
	}
?>
