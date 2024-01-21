<?php
error_reporting(0);
$con = mysqli_connect('localhost','root','','project','3306');

/*if($con)
	echo "Connection Successfully <br/>";
else 
	echo "Failed to Connect <br/>";
*/
$ans = mysqli_select_db($con,"project");

if(!$ans)
{
	die("Error in opening Database");
}


$uid = $_POST['uid'];
$oname = $_POST['oz'];
$ocon = $_POST['oc'];
$cadd= $_POST['cadd'];
$ct= $_POST['ct'];
$sta = $_POST['st'];
$date = $_POST['dt'];
$time=$_POST['t'];

$que = "insert into upcamps values('$uid','$oname', '$ocon', '$cadd', '$ct', '$sta', '$date', '$time')";
$ret = mysqli_query($con,$que);

if($ret)
	echo "<script>alert('Record Inserted')</script><a href='admin.php'>abc</a>";


else
	echo "Error in inserting records ... Err Desc : " . mysqli_error($con);
	
	
/*if(mysqli_close($con))
	echo "<br/>Active Connection Closed <br/>";
else 
	echo "Failed to closed connection <br/>";
*/

    
?>



