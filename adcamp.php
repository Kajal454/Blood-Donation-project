<html>
<head>
<link rel="stylesheet" type=text/css href=sty2.css>
</link>
<style>
    .cv{
        margin:20px;
    }
</style>

</head>
<body align="center" background="adcamp.jpg">
<body align="center" background="adcamp.jpg">

<?php

include_once('logo.html');
?>

<br><br><br><br><br>
<h2 ><font color="black"> ADD CAMP </font> </h2>
<form name=myform method=post onsubmit="return form()"  action=insertcamp.php>

<table>
<tr>
<td>ORGANIZER'NAME : </td> 
<td><input type=text name=oz></td>
</tr>

<tr>
<td> CONTACT DETAILS E-mail/Mobile : </td>
<td><input type=text name=oc></td>
</tr>



<tr>
<td> Enter Camp address </td>
<td><input type=text name=cadd></td>
</tr><br><br>


<tr>
<td>City : </td>
<td><input type=text name=ct></td>
</tr>

<tr>
<td>State : </td>
<td><input type=text name=st></td>
</tr>
<tr>

<td> Date: </td>
<td><input type=date name=dt></td>
</tr>

<tr>
<td> Time: </td>
<td><input type=time name=t></td>
</tr>


</table>
<input type=checkbox> DETAILS ARE TRUE !!!<br><br>

<center><input type=Submit>
&nbsp&nbsp&nbsp&nbsp<input type=reset value=Clear></center><br><br>

</form>
<div class=cv>

<center ><a href=dashboard.php><input type=button value="Go To Dashboard" ></a></center>

</div>
</body>
</html>

