<?php
$con = mysqli_connect('localhost', 'root', '', 'blood_donation_db', '3306');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


else 
{
	echo "Failed to Connect <br/>";
}
$ans = mysqli_select_db($con,"blood_donation_db");

if(!$ans)
{
	die("Error in opening Database");
}
?>