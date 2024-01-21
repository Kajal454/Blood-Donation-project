<html>
<head>
<title> events </title>
</head>

<h1>list of upcoming camps</h1>
<body>
<table border= 2>

<tr>
<th>organiser name</th>
<th>contact details</th>
<th>address</th>
<th>city</th>
<th>state</th>
<th>date</th>
<th>time</th>
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
	<td>".$result['organiser']."</td>
	<td>".$result['contact']."</td>
	<td>".$result['address']."</td>
	<td>".$result['city']."</td>
	<td>".$result['state']."</td>
	<td>".$result['date']."</td>
	<td>".$result['time']."</td>
	</tr>";
 	

 }
  
}

else
{
   echo"no record found";
}

?>
   
</table>
</body>
</html>