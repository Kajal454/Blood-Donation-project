<html>
<head>
<title> events </title>
</head>


<body bgcolor="AntiqueWhite">
<?php
include_once('logo.html');
?>
<center>

<h1><center>UPCOMING CAMPS</center></h1>
<h3><center><a href="dashboard.php">admin dashboard</a></center></h3>

<table  border=2 cellpadding="10">

<tr bgcolor=red>
<th>uid</th>
<th>organiser name</th>
<th>contact details</th>
<th>address</th>
<th>city</th>
<th>state</th>
<th>date</th>
<th>time</th>
<th colspan="2" align="center">operations</th>

</tr>

<?php
include("ncon.php");
error_reporting(0);
$query ="select * from upcamps";
$data =mysqli_query($con,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
  while($result =mysqli_fetch_assoc($data))
 {
    echo"
    <tr>
	<td>".$result["uid"]."</td>
	<td>".$result['organiser']."</td>
	<td>".$result['contact']."</td>
	<td>".$result['address']."</td>
	<td>".$result['city']."</td>
	<td>".$result['state']."</td>
	<td>".$result['date']."</td>
	<td>".$result['time']."</td>
		<td><a href ='delete2.php?uid=$result[uid]' onclick ='return checkdelete()'> Delete</a></td>

	</tr>";
 	

 }
  
}

else
{
    echo"<script>alert('no donor found')</script>";
}

?>
 </center>  
</table>
<script>

function checkdelete()
{
	return confirm('Are you sure you want to delete this record');
	
}


</script>
</body>
</html>