<html>
<head>
<title> events </title>
</head>
<style>
	.cv{
		margin:20px;
	}
</style>


<body bgcolor="AntiqueWhite">
<?php
include_once('logo.html');
?>
<center>

<h1><center>UPCOMING CAMPS</center></h1>
<table  border=2 cellpadding="10">

<tr bgcolor=red>
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
   echo"<script>alert('no record found')</script>";
}

?>
 </center>  
</table>

<div class=cv>
<form method=get>
<center><a href=homepage.php><input type=button value="Go To HomePage" ></a></center>
</form>
</div>

</body>
</html>