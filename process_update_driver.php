<?php

require 'config.php';

$driver_ID = $_POST["driverID"];
$full_name = $_POST["fname"];
$last_name = $_POST["lname"];
$gender = $_POST["gender"];
$phone_no = $_POST["teleNo"];
$email_add = $_POST["emailAddress"];
$address = $_POST["address"];
$l_no = $_POST["licence"];
$password = $_POST["pswd"];
$DOB = $_POST["dob"];

$sql = "UPDATE driver_details SET firstName = '$full_name', lastName = '$last_name', gender = '$gender', phoneNo =$phone_no,	email = '$email_add', address = '$address', licenceNo = $l_no, password = '$password', DOB = '$DOB' WHERE driverID = '$driver_ID'";
if($con->query($sql))
{
   echo "Updated successfully";
   header("Location:admin_driver_database.php");
}
else
{
   echo "Error: ".$con->error;
}
$con->close();

?>
