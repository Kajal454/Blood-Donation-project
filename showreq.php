<html>
	<style>
		.cv{
			margin:20px;
		}
	</style>

<h1><center>Blood Requests</center></h1>
<body bgcolor=AntiqueWhite><center>
<table border=2 cellpadding="10">

<tr bgcolor=red>
<th>First Name</th>
<th>Last Name</th>
<th>DOB</th>
<th>Blood Group</th>
<th>Unit Needed</th>
<th>Hospital Name</th>
<th>Hospital Address</th>
<th>City</th>
<th>State</th>
<th>Mobile No</th>
<th>Aadhar No</th>
<th>Request ID</th>
</tr>

<?php
$con = mysqli_connect('localhost','root','','project','3306');

/*if($con)
	echo "Connection Successfully <br/>";
else 
	echo "Failed to Connect <br/>";
*/
$query = "select * from bloodreq";
	$result = mysqli_query($con,$query);

	
	$row = mysqli_fetch_assoc($result);

error_reporting(0);
$query ="select * from bloodreq";
$data =mysqli_query($con,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
  while($result =mysqli_fetch_assoc($data))
 {
    echo"
    <tr>
	<td>".$result["First Name"]."</td>
	<td>".$result["Last Name"]."</td>
	<td>".$result["DOB"]."</td>
	<td>".$result["Blood_Group"]."</td>
	<td>".$result["Unit_needed"]."</td>
	<td>".$result["Hospital_name"]."</td>
	<td>".$result["H_Address"]."</td>
	<td>".$result["City"]."</td>
	<td>".$result["State"]."</td>
	<td>".$result["Mobile No"]."</td>
	<td>".$result["Aadhar No"]."</td>
	<td>".$result["req_id"]."</td>
	
	
	</tr>";
 	

 }
  
}

else
{
   echo"no record found";
}

?>
 </center>  
</table>
<div class=cv>
<center ><a href=dashboard.php><input type=button value="Go To Dashboard" ></a></center>
</div>
</body>
</html>
