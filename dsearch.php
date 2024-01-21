<html>
<head>
<style>
body	{
	background-repeat:no-repeat;
	background-size:cover;
	opacity:0.9;
}


h2		{
	
		text-transform:uppercase;
		font-family:Times New Roman;
		margin-top:40px;
		text-decoration:none;
		color:white;
		
		}
		

form	{
	
		font-size:20px;	
		color:grey;
		font-family:Georgia;
		text-align:left;
		
		border:2px solid grey;
		width:450px;
	
		margin-left:35%;
	
		box-shadow:2px 4px 8px;	
		padding:15px;
		background-color:black;
		opacity:0.9;
	}


table {
                font-size:20px;
				color:white;
				border-spacing:15px;
				border:3px solid transparent;
				padding:20px;
            }
	
form input[type=submit]{
		background-color:green;
		color:white;
		font-family:Baskerville Old Face;
		font-size:18px;

		}	
		
form input[type=submit]:hover{
		text-decoration:underline;
		}
		
form input[type=reset]{
		background-color:crimson;
		color:white;
		font-family:Baskerville Old Face;
		font-size:18px;

		}	
		
form input[type=reset]:hover{
		text-decoration:underline;
		}
</style>

</head>
<body align=center background="find.jpg" height="100%" width="100%">
<?php
include_once('logo.html');
?>
<br><br><br><br><br><br>

<form name=myform method=post  action=searchquery.php>
<center><h2>Search for Donor</h2></center>	
<table cellpadding=6px>
	<tr>
<td>Select Blood Group : </td>
<td><select name=bd>
    <option>A+</option>
    <option>A-</option>
    <option>B+</option>
    <option>B-</option>
    <option>AB+</option>
    <option>AB-</option>
    <option>O+</option>
    <option>O-</option>
</select></td>
</tr>


<tr>
<td>City : </td>
<td><select name=ct>
<option>Pune</option>
<option>Mumbai</option>
<option>Nashik</option>
<option>Delhi</option>
<option>Bangalore</option>
<option>Hyderabad</option>
<option>Chennai</option>
<option>Kolkata</option>
<option>Ahmedabad</option>
<option>Jaipur</option>
<option>Surat</option>
<option>Chandigarh</option>
<option>Indore</option>
<option>Patna</option>
<option>Bhopal</option>
<option>Lucknow</option>
<option>Thiruvananthapuram</option>
<option>Coimbatore</option>
<option>Vadodara</option>
<option>Ludhiana</option>
</select></td>
</tr>

<tr>
    <td>State : </td>
    <td>
        <select name="st">
            <option>Maharashtra</option>
            <option>Delhi</option>
            <option>Karnataka</option>
            <option>Tamil Nadu</option>
            <option>West Bengal</option>
            <option>Uttar Pradesh</option>
            <option>Gujarat</option>
            <option>Rajasthan</option>
            <option>Madhya Pradesh</option>
            <option>Bihar</option>
            <option>Kerala</option>
            <option>Punjab</option>
            <option>Haryana</option>
            <option>Odisha</option>
            <option>Andhra Pradesh</option>
            <option>Telangana</option>
            <option>Assam</option>
            <option>Chhattisgarh</option>
            <option>Jharkhand</option>
            <option>Uttarakhand</option>
        </select>
    </td>
</tr>


	
</table>	
	<center><input type="Submit"  name="btnlog">&nbsp&nbsp&nbsp	
	<input type="reset" value="Reset" class="btn" /></center>
</form>
</body>
</html>	
