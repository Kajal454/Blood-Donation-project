<html>
<head>
<link rel="stylesheet" type=text/css href=style.css></link>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>

body{
background-repeat:no-repeat;
background-size:1200px 500px;
background-position:5px 190px;

}
a{
		text-decoration:none;
		color:white;
}
i{
	
	float:right;
	margin-top:-70px;
	margin-right:30px;

}
.admin{
	font-size:18px;
	float:right;
	margin-top:-30px;
	margin-right:-1px;
	color:white;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color:dodgerblue;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

.column {
  float: left;
  width: 50%;
  margin-left: 80px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
</head>
<body background="wall1.gif" height="100%" width="100%">

<?php
include_once('logo.html');
?>
<br>
<br><br><br>
<i style='font-size:40px' class='far'><a href=admin.php> &#xf2bd; </a></i>
<div class=admin>Admin Login</div>

<?php 
include('navbar.html');
?>


<div class="header">
  <!-- <a href="#default" class="logo">CompanyLogo</a> -->
  <div class="header-right">
    <a href="registration.php">BECOME A DONOR</a>
    <a href="dsearch.php">FIND A BLOOD DONOR</a>
    <a href="req.php">BLOOD REQUEST</a>
	<a href="upcamp.php">UPCOMING DONATIONS CAMPS</a>

</div>
</div>
 

<!-- 
<div class="box1"><b>
<ol> 
<li><a href=registration.php>BECOME A DONOR </a></li>
<li><a href=dsearch.php>FIND A BLOOD DONOR</a></li>
<li><a href=req.php>BLOOD REQUEST</a></li>
<li><a href=upcamp.php>UPCOMING DONATIONS CAMPS</a></li>

</ol>
</b>
</div> -->

<br><br><br><br><br><br><br>



<div class="box2" >
<ul>
<li><a href=about.php>About Us</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href=vision.php>Vision & Mission</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href=app.php>Download App (Coming Soon)</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
</ul>
</div>
<br><br><br><br><br><br><br><br>


<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="pic">
<img src="cp1.png" height=300px width=300px align="middle">
</div>

<div class=text>
<h1>ALL YOU NEED TO KNOW ABOUT COVID <br>
AND COVID VACCINATION IN INDIA</h1>
<form method=get>
<a href=covid.php><input type=button value="Covid Help" ></a> <br>
</form>
</div>

<div class=gallery>
<div class=aw><center>AWARENESS</center></div>

<br><br>
<div class="column" class="row"  class="pi1">
<div class="row">
  <div class="column"></div>
  
<!-- <img src="crisis.jpg" height=500 width=500/> -->
<h1>
What happens to the blood you donate?
</h1>
<h3>
The blood you donate at the NIH Blood Bank is used to support the many patients who come from all over the world to receive treatment. The whole-blood and component requirements of the Clinical Center vary according to the needs of the current patient population. Typically, the following blood products are needed each month:
</h3>
<ul>
<li>600 units of red blood cells to treat patients with chronic anemias associated with sickle cell disease, thalassemia, aplastic anemia, leukemia, or cancer
<li>275 units of platelets to control bleeding in patients with leukemia, cancer, or who have had surgery</li>
<li>100 units of plasma for surgical patients, patients with cancer, and patients with immunologic deficiencies</li>
<li>20 units of cryoprecipitate for patients with a variety of bleeding disorders</li>
<li>10 units of granulocytes (white blood cells) for patients with serious infections associated with hereditary or acquired abnormalities of white blood cells.</li>
</ul>
</div>

<br><br><br><br> <br><br> <br><br>  

<div class=pi2>
<img src="image.jpeg" height=500 width=500/>
</div>
<!-- 
<br><br> <br><br> 
<br><br> 
<div class=pi3>
<!-- <img src="world-blood-donor-day-2020.png" height=700 width=500/> -->
</div>

<br><br> 

<div class=pi4>
<!-- <img src="69786647.webp"  height=700 width=500/> -->
</div>


<br><br> <br><br> <br><br> 
<div class=pi5>
<!-- <img src="img.png"  height=700 width=500/> -->
</div>

<br><br> 
<div class=pi6>
<!-- <img src="2016-Swe-blood-donor-graph.png"  height=700 width=500/> -->
</div>

</div>
 -->
</body>
</html>


