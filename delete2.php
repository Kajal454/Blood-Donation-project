<?php

include("ncon.php");
error_reporting(0);

$uid=$_GET['uid'];

$query = "DELETE FROM upcamps WHERE uid ='$uid'";

$data=mysqli_query($con,$query);


if($data)
{
	echo "<script>alert('record deleted from database')</script>";
	
?>
<META HTTP-EQUIV ="Refresh" CONTENT="0; URL=http://localhost/Project/upcampadmin.php">

<?php
}

else
{
	echo"failed to delete";
}
?>