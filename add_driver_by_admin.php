<?php
//linking configuration file
require 'config.php';

//$driver_ID = $_POST["drivID"];
$full_name = $_POST["fname"];
$last_name = $_POST["lname"];
$gender = $_POST["gender"];
$phone_no = $_POST["teleNo"];
$email_add = $_POST["emailAddress"];
$address = $_POST["address"];
$l_no = $_POST["licence"];
$password = $_POST["pswd"];
$DOB = $_POST["dob"];

$sql =  "INSERT INTO driver_details(firstName, lastName, gender, phoneNo,	email, address, licenceNo, password, DOB) VALUES('$full_name', '$last_name', '$gender', '$phone_no', '$email_add', '$address', $l_no, '$password', '$DOB')";

if($con->query($sql)){
		echo "<h3><center>Record Inserted successfully</center></h3>";
    header("Location:admin_driver_database.php");
}
	else{
		echo "Error occured:". $con->error;
	}
$con->close();

?>
