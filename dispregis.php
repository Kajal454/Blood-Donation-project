<html>
<style>
	.cv{
		margin:20px;
	}
</style>
<h1><center>Blood Donor's Registration List</center></h1>
<body bgcolor=AntiqueWhite><center>
<table border=2 cellpadding="10" cellspacing="0">

<tr bgcolor=red>
<th>Did</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>DOB</th>
<th>Blood Group</th>
<th>Aadhar No.</th>
<th>Mobile No</th>
<th>E-Mail Id</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th colspan="2" align="center">oprations</th>
</tr>

<?php
$con = mysqli_connect('localhost','root','','project','3306');

/*if($con)
	echo "Connection Successfully <br/>";
else 
	echo "Failed to Connect <br/>";
*/
$query = "select * from registered";
	$result = mysqli_query($con,$query);

	
	$row = mysqli_fetch_assoc($result);

error_reporting(0);
$query ="select * from registered";
$data =mysqli_query($con,$query);
$total = mysqli_num_rows($data);


if($total!=0)
{
  while($result =mysqli_fetch_assoc($data))
 {
    echo"
    <tr>
	<td>".$result["did"]."</td>
	<td>".$result["Donor's First Name"]."</td>
	<td>".$result["Donor's Last Name"]."</td>
	<td>".$result["Gender"]."</td>
	<td>".$result["DOB"]."</td>
	<td>".$result["Blood_Group"]."</td>
	<td>".$result["Aadhar_No"]."</td>
	<td>".$result["Mobile No"]."</td>
	<td>".$result["E-Mail Id"]."</td>
	<td>".$result["Address"]."</td>
	<td>".$result["City"]."</td>
	<td>".$result["State"]."</td>
	
	<td><a href ='delete1.php?did=$result[did]' onclick ='return checkdelete()'> Delete</a></td>
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

<script>

function checkdelete()
{
	return confirm('Are you sure you want to delete this record');
	
}


</script>
<div class=cv>
<center ><a href=dashboard.php><input type=button value="Go To Dashboard" ></a></center>
</div>

</body>
</html>
