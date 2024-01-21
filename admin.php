<html>
<head>
<style>
body	{
	background-repeat:no-repeat;
	background-size:cover;
}


h2		{
	
		text-transform:uppercase;
		font-family:Lucida Calligraphy;
		margin-top:40px;
		text-decoration:underline;
		color:black;
		
		}
		

form	{
		font-size:20px;	
		color:black;
		font-family:Georgia;
		text-align:left;
		border:2px solid grey;
		width:450px;
	
		margin-left:35%;
	
		box-shadow:2px 4px 8px;	
		padding:15px;
		background-color:AntiqueWhite;
	}


table {
                
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
		background-color:orange;
		color:white;
		font-family:Baskerville Old Face;
		font-size:18px;

		}	
		
form input[type=reset]:hover{
		text-decoration:underline;
		}
form input[type=button]{
		background-color:crimson;
		color:white;
		font-family:Baskerville Old Face;
		font-size:18px;
}
	    form input[type=button]:hover{
		text-decoration:underline;
		}


</style>
<script>
function login()
	{
		
		var uname=document.myform.n1.value;
		var pwd=document.myform.n2.value;
		
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(uname =='' || uname==null)
		{
			alert("Please enter user name.");
			return false;
		}
		else if(pwd=='' || pwd==null)
		{
        	alert("Enter the password");
			return false;
		}
		else if(uname!="bloodalliance@123")
		{
			alert("Enter valid email id.");
			return false;
		}
		else if(pwd!="123456")
		{
			alert("Enter Valid Password");
			return false;
		}
		return true;
	}

</script>
</head>
<body align=center background="wp4323461.webp">
<?php
include_once('logo.html');
?>
<br><br><br><br><br><br>


<form name=myform method=post onsubmit="return login()"  action=dashboard.php>
<center><h2>ADMIN LOGIN</h2></center>
<table cellpadding=6px>
	<tr>
	<td><label for="username">Username</label></td>
	<td><input type="text" name="n1" /></td>
	</tr>	
	
	<tr>
	<td><label for="password">Password:</label></td>		
	<td><input type="password" name="n2" /></td>
	</tr>	
</table>	
	<center><input type = "submit" value="Login" name="btnlog">	&nbsp&nbsp
	<input type="reset" value="Reset" class="btn" /> &nbsp&nbsp <input type= "button" class="btn btn-lg btn-success"onclick ="location.href='homepage.php';" value="home"></center>

</form>

</body>
</html>	

<?php
include_once('db_config.php'); // Include your database config file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from POST request
    $username = $_POST['n1'];
    $password = $_POST['n2'];

    // Prepare an insert statement
    $sql = $conn->prepare("INSERT INTO admin_users (username, password) VALUES (?, ?)");
    $sql->bind_param("ss", $username, $password); // 'ss' specifies the variable types => 'string, string'

    // Execute the prepared statement
    if ($sql->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $sql->close();
    $conn->close();
}
?>
