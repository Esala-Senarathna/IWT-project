<!DOCTYPE html>
<html>
  <head>
    <title>Karen Car Rental Service</title>
    <link rel="stylesheet" type="text/css" href="css/myStyles.css">

  </head>
  <body>
    <div id="header">
    <div id="topicLogoAlign">
    	<div>
    	<img src="images/yak1.png" width="200px">
    </div>
    <div>
    	<h1 id="topic">KAREN CAR RENTAL SERVICE</h1>
    </div>
    <div>
    	<p align="right">
    		<a class="head1" href="login.html">Sign in</a>
    	 |
    		<a class="head1" href="#">Sign up</a><br>
    		<input type="text" id="searchBar" maxlength="5"><br>
    		<input type="button" value="search" class="searchButton" id="topUp">
    </p>
    </div>
    </div>

    <div>
    <ul class="menu">
      <li class="menu"><a href="home.html">Home</a></li>
      <li class="menu"><a href="branches.html">Branches</a></li>
      <li class="menu"><a href="packages.html">Packages</a></li>
      <li class="menu"><a href="help.html">Help</a></li>
      <li class="menu"><a href="ContactUs.html">Contact Us</a></li>
      <li class="menu"><a href="aboutUs.html">About Us</a></li>
    </ul>
    </div>
    </div>

<h3 class="whoWeAre"><center>Admin Database - Drivers</center></h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h4 class="homeText">Search Driver: </h4>
  Driver ID: <input type="text" name="dId" id="driverIDSearch">
  <input type="submit" value="Search" name="searchExecute" class="searchButton">
  <input type="reset" value="Reset" class="searchButton">
  <input type="submit" value="Delete Driver" name="deleteDriverRecord" class="searchButton">
  <a href="addDriverByAdmin.html"><input type="button" value="Add driver" class="searchButton"></a>
  <a href="admin_driver_database.php"><input type="button" value="Refresh Table" class="searchButton"></a><br>
</form>
  <br>
<form  action="update_driver.php" method="post">
  Enter a Driver ID needed to be updated : <input type="text" name="updateID" id="driverIDSearch">
  <input type="submit" value="Update Driver" name="updateRecord" class="searchButton">
</form>

<?php
//linling with the Database
require 'config.php';

echo "<br>";

if(isset($_POST["searchExecute"])){
	$driver_ID = $_POST["dId"];
	$sql= "SELECT * FROM driver_details where driverID = $driver_ID";
		if($result=$con->query($sql)){
				if($result->num_rows > 0){
          echo ("<center>");
					echo ("<table>");
          echo ("<tr>");
          echo ("<th>Driver ID</th>");
          echo ("<th>First Name</th>");
          echo ("<th>Last Name</th>");
          echo ("<th>Gender</th>");
          echo ("<th>Phone No.</th>");
          echo ("<th>E-mail</th>");
          echo ("<th>Address</th>");
          echo ("<th>Licence No.</th>");
          echo ("<th>Password</th>");
          echo ("<th>Birthday</th>");
          echo ("</tr>");
					while($record = $result->fetch_assoc()){
            echo ("<tr>");
            echo ("<td>" .$record["driverID"]. "</td>"."<td>" .$record["firstName"]. "</td>"."<td>" .$record["lastName"]. "</td>");
            echo ("<td>" .$record["gender"]. "</td>"."<td>" .$record["phoneNo"]. "</td>");
            echo ("<td>" .$record["email"]. "</td>"."<td>" .$record["address"]. "</td>"."<td>" .$record["licenceNo"]. "</td>");
            echo ("<td>" .$record["password"]. "</td>"."<td>" .$record["DOB"]. "</td>");
            echo ("</tr>");
					}
					echo ("</table>");
          echo ("</center>");
				}else{
					echo "no results";
				}
		}
		else{
			echo "Error:". $con->error;
		}
}

//function to display driver records
function displayDriverRecords(){
global $con;

$sql = "SELECT * FROM driver_details";
$result = $con->query($sql);

  if($result->num_rows > 0){
    echo ("<center>");
    echo ("<table>");
    echo ("<tr>");
    echo ("<th>Driver ID</th>");
    echo ("<th>First Name</th>");
    echo ("<th>Last Name</th>");
    echo ("<th>Gender</th>");
    echo ("<th>Phone No.</th>");
    echo ("<th>E-mail</th>");
    echo ("<th>Address</th>");
    echo ("<th>Licence No.</th>");
    echo ("<th>Password</th>");
    echo ("<th>Birthday</th>");
    echo ("</tr>");
    //read data and store in a array
    while($record = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>" .$record["driverID"]. "</td>"."<td>" .$record["firstName"]. "</td>"."<td>" .$record["lastName"]. "</td>";
      echo "<td>" .$record["gender"]. "</td>"."<td>" .$record["phoneNo"]. "</td>";
      echo "<td>" .$record["email"]. "</td>"."<td>" .$record["address"]. "</td>"."<td>" .$record["licenceNo"]. "</td>";
      echo "<td>" .$record["password"]. "</td>"."<td>" .$record["DOB"]. "</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo ("</center>");
  }
  else{
    echo "no results found in the database";
  }
}
//function to delete records
function deleteDriverRecord($driver_ID){
global $con;

$sql = "delete from driver_details where driverID = $driver_ID";
  if($con->query($sql)){
     		 echo "Deleted successfully<br>";
         header("Location:admin_driver_database.php");
  }
  else{
     echo "Error: ".$con->error;
  }
}


if(!isset($_POST["searchExecute"])){
  displayDriverRecords();
}

if(isset($_POST["deleteDriverRecord"])){
	$driver_ID = $_POST["dId"];
	if($driver_ID != ""){
	deleteDriverRecord($driver_ID);
}
}

$con->close();
?>


<footer>
<div class="gridFooter">
  <div class="g1">
  <h2>Copyrights@2020</h2><br>
  <input type="button" value="TOP" onclick="backToTopFunction()" id="TopUp" class="searchButton" >

  </div>
  <div class="g2">
  <center><h2>Download us at</h2>
  <br>
  <a href="https://play.google.com/store/movies"><img src="images/playstore.png" id="playstoreIcon" class="imgIcons" height="100px" width="auto"></a></br>
  <a href="https://www.apple.com/ios/app-store/"><img src="images/appstore.png" id="appstoreIcon" class="imgIcons" height="84px" width="auto"></a><br>
  <a href="ContactUs.html" class="head1">Contact us</a>  |  <a href="aboutUs.html" class="head1">About us</a><br>

  </center>
  </div>
  <div class="g3">
  <div align="right" id="follow"><h2>Follow us:</h2><br><br>
    <a href="https://www.facebook.com/"><img src="images/facebook.png" class="social" id="facebookIcon" height="50px" width="auto"></a>
    <a href="https://www.instagram.com/"><img src="images/Instagram.png" class="social" height="50px" width="auto"></a>
    <a href="https://twitter.com/explore"><img src="images/Twitter.png" class="social" height="50px" width="auto"></a>
  </div>
  </div>
</div>

</footer>
<script src="js/myJavascript.js"></script>
</body>
</html>
