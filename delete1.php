<?php

include("ncon.php");
error_reporting(0);

$did=$_GET['did'];

$query = "DELETE FROM REGISTERED WHERE did ='$did'";

$data=mysqli_query($con,$query);


if($data)
{
	echo "<script>alert('record deleted from database')</script>";
	
?>
<META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/dispregis.php">

<?php
}

else
{
	echo"failed to delete";
}
?>