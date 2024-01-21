<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  margin:20px;
  	border: 4px double black;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
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
  color: white;
  padding: 10px 15px;
  border: none;
}

h2{
font-family:Lucida Bright;
margin-top:5px;

}
#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.card {

  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
 
 
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	margin-left:25%;
  margin-top:-10%;	
  	
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	margin-left:50%;
  margin-top:-10%;	
}

.card3 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	margin-left:75%;
  margin-top:-10%;	
}

.card4 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	
  	
}

.card5 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	
  margin-left:25%;
  margin-top:-10%;	
  		
}

.card6 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
margin-left:50%;
  margin-top:-10%;	
  	
  	
}

.card7 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	margin-left:75%;
  margin-top:-10%;	
  	
  	
}

.card8 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
	
  	
}

.card9 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
		border: 2px solid transparent;
		background-color:skyblue;
		width:250px;
		height:120px;
  border-radius: 5px;
  padding:15px;
margin-left:25%;
  margin-top:-10%;	
  	
  	
}


a{
 text-decoration:none;
 font-size:26px;
 font-family:Geogria;
}

.container {
  padding: 32px;
  text-align:center;
 
}
a:hover{
	color:darkred;
	text-decoration:bolder;
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
</head>
<body bgcolor=AntiqueWhite>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
  <a href="#">Change Password</a>
  <a href="#">Update Profile</a>
  <a href="#">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#8801</button>  
 <center> <h2>DASHBOARD</h2></center>
 

<div class="card">
  <div class="container">
    <a href="">VIEW BLOOD REQUEST</a>
  </div>
</div>

<div class="card1">
  <div class="container">
    <a href="">VIEW DONOR REGISTRATION</a>
  </div>
</div>

<div class="card2">
  <div class="container">
    <a href="">ADD UPCOMING EVENTS</a>
  </div>
</div>

<div class="card3">
  <div class="container">
    <a href="">REMOVE EVENTS</a>
  </div>
</div>

<div class="card4">
  <div class="container">
    <a href="">IN PROGRESS REQUESTS</a>
  </div>
</div>

<div class="card5">
  <div class="container">
    <a href="">PENDING REQUESTS</a>
  </div>
</div>

<div class="card6">
  <div class="container">
    <a href="">SUCCESSFULLY DONE REQUESTS</a>
  </div>
</div>

<div class="card7">
  <div class="container">
    <a href="">MANAGE GALARY</a>
  </div>
</div>

<div class="card8">
  <div class="container">
    <a href="">EDIT ABOUT US SECTION</a>
  </div>
</div>

<div class="card9">
  <div class="container">
    <a href="">EDIT VISION & MISSION SECTION</a>
  </div>
</div>


 </div>
</body>
</html> 
