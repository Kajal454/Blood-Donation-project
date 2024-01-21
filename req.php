<html>
<head>
<link rel="stylesheet" type=text/css href=sty2.css>
</link>


<script>
function form()
{
var fname=document.myform.n1.value;
var lname=document.myform.n2.value;
var aadhar=document.myform.b.value;
var mob=document.myform.a.value;
var add=document.myform.ad.value;
var ct=document.myform.ct.value;
var sta=document.myform.st.value;

 if(fname==null || fname=="" || lname==null || lname=="")
{
alert("Name should not be blank");
return false;
}
else if(mob.length<10 || mob.length>10)
{
alert("Mobile number should be of 10 Digits");
return false;
}
else if(add==null || add=="")
{
alert("Address should not be blank");
return false;
}
else if(aadhar.length<12 || aadhar.length>12)
{
alert("Aadhar Number is invalid or incomplete");
return false;
}
else if(ct==null || ct=="" || ct==null || ct=="")
{
alert("City Name should not be blank");
return false;
}
else if(sta==null || sta=="" || sta==null || sta=="")
{
alert("State Name should not be blank");
return false;
}
return true;
}

</script>
</head>
<body align=center background="wall.jpg" >

<?php

include_once('logo.html');
?>

<br><br><br><br><br><br><br>
<h2>REQUEST BLOOD </h2>
<form name=myform method=post onsubmit="return form()"  action=insertreq.php>

<table>
<tr>
<td>Patient's First Name : </td> 
<td><input type=text pattern="[A-Za-z]{1,20}" name=n1></td>
</tr>

<tr>
<td>Patient's  Last Name : </td>
<td><input type=text pattern="[A-Za-z]{1,20}" name=n2></td>
</tr>


<tr>
<td>DOB : </td>
<td><input type=date name=dt></td>
</tr>

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
<td> Unit needed : </td>
<td><input type=number name=u></td>
</tr>

<tr>
<td>Enter hospital name: </td>
<td><input type=text name=hname></td>
</tr>

<tr>
<td> Enter hospital address </td>
<td><input type=text name=hadd></td>
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
<td>Enter Mobile No : </td>
<td><input type=number name=a></td>
</tr>

<tr>
<td>Id proof (Aadhar No.) : </td>
<td><input type=number name=b></td>
</tr>

</table>
<input type=checkbox> I agree above all details are true to my knowledge!!!<br><br>

<center><input type=Submit>
&nbsp&nbsp&nbsp&nbsp<input type=reset value=Clear></center><br><br>

</form>
<font color=red size=4px>please fill exact details!!!!!!</font>
</body>
</html>

