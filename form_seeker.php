<html>
<head>
<script>
function Checkna()
{
var e=document.getElementById("tna");
var val=f1.tna.value;
var pat="^[a-z A-Z]{3,15}$";
var exp=new RegExp(pat);
if(f1.tna.value.length==0)
{	document.getElementById("fna").style.border="2px solid red";  }
else
{
if(exp.test(val))
{	document.getElementById("fna").style.border="1px solid gray";  }
else
{	document.getElementById("fna").style.border="2px solid red";  }
}
}

function Checkma()
{
var e=document.getElementById("tma");
var val=f1.tma.value;
var pat="^[\\w]*[\\w]\@[\\w]\.*[\\w]$";
var exp=new RegExp(pat);
if(f1.tma.value.length==0)
{	document.getElementById("fma").style.border="2px solid red";}
else
{
if(exp.test(val))
{	document.getElementById("fma").style.border="1px solid gray";}
else
{	document.getElementById("fma").style.border="2px solid red";}
}
}

function Checkpas()
{
var e=document.getElementById("fpas");
var val=f1.tpas.value;
var pat="^[a-z A-Z 0-9 ! # $ % ^ & *]{8,20}$";
var exp=new RegExp(pat);
if(f1.tpas.value.length==0)
{	document.getElementById("fpas").style.border="2px solid red";}
else
{
if(exp.test(val))
{	document.getElementById("fpas").style.border="1px solid gray";}
else
{	document.getElementById("fpas").style.border="2px solid red";}
}
}

function Checkph()
{
var e=document.getElementById("tph");
var val=f1.tph.value;
var v1=val.charAt(0);
var v2=val.substring(1,val.length);
var pat1="^[9 8 7]{1}$";
var pat2="^[0-9]{9}$";
var e1=new RegExp(pat1);
var e2=new RegExp(pat2);
if(f1.tph.value.length==0)
{	document.getElementById("fph").style.border="2px solid red";}
else
{
if(e1.test(v1) && e2.test(v2))
{	document.getElementById("fph").style.border="1px solid gray";}
else
{	document.getElementById("fph").style.border="2px solid red";}
}
}

function Checkage()
{
var e=document.getElementById("tage");
var val=f1.tage.value;
var pat="^[0-9]{1,2}$";
var exp=new RegExp(pat);
if(f1.tage.value.length==0)
{	document.getElementById("fage").style.border="2px solid red";}
else
{
if(exp.test(val))
{	document.getElementById("fage").style.border="1px solid gray";}
else
{	document.getElementById("fage").style.border="2px solid red";}
}
}
</script>

</head>

<body style="background-size:cover; background-image:url('images/food.png');">
<br><br><br><br><br><br><br>
<form name="f1" action="dbseek.php">
<h1 style="color:blue"><center>REGISTRATION FORM</center></h1>
<!--hr style="box-shadow: 5px 5px 5px green"><br-->
<center>
<table>

<tr>
<td>Name:</td><td><input id="fna" type="text" name="tna" onBlur="Checkna()" >
</tr>

<tr>
<td>E-mail:</td><td><input id="fma" type="email" name="tma" onBlur="Checkma()"  >
</tr>

<tr>
<td>Password:</td><td><input id="fpas" type="password" name="tpas" onBlur="Checkpas()"  >
</tr>

<tr>
<td>Contact no:</td><td><input id="fph" type="text" name="tph" onBlur="Checkph()" >
</tr>

<tr>
<td>Gender</td><td><input type="radio" name="r1" value="male" checked=true>Male
<input type="radio" name="r1" value="female" >Female</td>
</tr>

<tr>
<td>Age:</td><td><input id="fage" type="text" name="tage" onBlur="Checkage()"  >
</tr>

<tr>
<td>Nationality:</td><td><input id="fnat" type="text" name="tnat">
</tr>

<tr>
<td>Skills:</td><td><input type="text" name="tsk">
</tr>

<tr>
<td>Job type:</td><td>
<select name="typ">
<option>Manager</option>
<option>Marketing</option>
<option>Finanace</option>
<option>HR</option>
<option>Accounting</option>
<option>Sales</option>
<option>Other</option>
</select>
</tr>

<tr>
<td>Current Work Loaction:</td><td>
<select name="place">
<option>Not Working</option>
<option>Gujarat</option>
<option>Delhi</option>
<option>Pune</option>
<option>Banglore</option>
<option>Chennai</option>
<option>Kolkta</option>
<option>Bombay</option>
<option>Other</option>
</select>
</tr>

<tr>
<td>Experience:</td><td>Years <input type="text" name="tex1"> 
</tr>
<tr><td></td><td> Months <input type="text" name="tex2"></td></tr>

<tr>
<td>Upload Resume:</td><td><input type="file" name="bres" value="Choose File">
</tr>

<tr>
<td><br><center><input type="submit" name="b1" value="Submit" ></center></td>
<td><br><input type="reset" name="r1" value="Reset" ></td>
</tr>

</table>
</center>
</form>

<br><br>
<a href="reg.php"><img src="images/Back Arrow.png" width=30 height=30></img></a>

</body>
</html>
