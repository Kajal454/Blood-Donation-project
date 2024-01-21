<?php
include("ncon.php");
?>



<html>
<head><title></title></head>
<style>
body{
	font-family:Times New Roman;
	background-repeat:no-repeat;
	background-size:cover;

}
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  opacity:0.7;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  opacity:0.8;
  color: white;
  padding: 10px 15px;
  border: none;
  
}
.tab1{
	
	opacity:0.7;
}
.tablead{
	opacity:0.8;
}
a{
	text-decoration:none;
}
</style>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>


<body background="backg.jpg" width="100%" height="100%">



<table class='tablead' bgcolor=#38ACEC width="100%" height="100px" >

<tr><td align="right"> <font color="white" size="7"><b>welcome admin</b> </td>
</table>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="adcamp.php">Add Up-coming Camp</a>
  <!-- <a href="#">Update Profile</a> -->
  <a href="homepage.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#8801</button>  
 <center> <h2></h2></center>

<br><br><br>

<table class='tab1' width="100%" border="0" opacity="0.5" height="200" cellspacing="10">

<tr>

<td align="center" width="25%" bgcolor="black"  rowspan="2"><font size="6" ><a href=showreq.php style="color:white">Show Blood Requests </a></font></td>
<td align="center"width="25%" bgcolor="black"  rowspan="2"><font size="6"><a href=dispregis.php  style="color:white">View Donor Registrations</a></font></td>
<td align="center"width="25%" bgcolor="black" rowspan="2"><font size="6"><a href=upcampadmin.php  style="color:white">View Camps List</a></font></td>
<td align="center""width="25%" bgcolor="purple"><font size="5" color="white"> Total registrations :
<?php
error_reporting(0);
$query="SELECT * FROM registered";
$data= mysqli_query($con,$query);
$total= mysqli_num_rows($data);

if($data!=0)
	
	{
		
	 echo"$total";
	}
else
{
	echo"data not found";
}

?>
</font></td>


</tr>


<tr>  
<td align="center" bgcolor="orange"><font size="5" color="white"> Active blood requests:
<?php
error_reporting(0);
$query="SELECT * FROM bloodreq";
$data= mysqli_query($con,$query);
$total= mysqli_num_rows($data);

if($data!=0)
	
	{
		
	 echo"$total";
	}
else
{
	echo"data not found";
}

?>
</font></td>

</tr>

</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br>

</body>
</html>