<!DOCTYPE html>
<html>
<head>
<style>
body{
		background-repeat:no-repeat;
	    background-size:cover;
		
}

.cv{
	margin: 50px;
}
.main{
	
	text-align:center;
	margin-top:0%;

}

.title{
	font-size:40px;
		text-decoration:NONE;
		color:#810541;
		font-family: Lucida Bright;
		position:static;
		background-color:#4EE2EC;
		opacity:0.7;
}	

.box{
	border:2px solid blue;
	width:400px;
	margin-left:500px;
	padding:45px;
	text-align:left;
	font-size:22px;
	font-family:Century;
	color:red;
	box-shadow:1px 2px 4px; 
		background-color:#00FFFF;
		opacity:0.8;
	
}
button{
		background-color:green;
		color:white;
		font-family:Baskerville Old Face;
		font-size:20px;
		border-radius:20px;
		margin-left:10px;
		
		
		}	

button:hover{
		background-color:brown;
		}


</style>
</head>
<body background="covid19.jpg">
<?php
include_once('logo.html');
?>
<br><br><br><br><br>
<div class=main>
	<div class=title>
	<b>COVID-19 HELP DESK</b><br>
	</div><br><br><br>
	<div class=box>
	<font color=blue>Helpline Number : </font><font color=red> +91-11-23978046</font> <br>
	<font color=blue>Toll Free : </font><font color=red>1075 </font><br>
	<font color=blue>Helpline Email ID : </font><font color=red>ncov2019@gov.in </font><br><br>
	<font color=blue>For Information on COVID-19 Vaccine - Visit the official Website<br><br>
<a href="https://www.mohfw.gov.in/"><button type=button>MINISTRY OF HEALTH AND FAMILY WELFARE</button></a>	
	</div>

</div>
<div class=cv>
<form method=get>
<center><a href=homepage.php><input type=button value="Go To HomePage" ></a></center>
</form>
</div>
</body>
</html>