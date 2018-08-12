<html>
<body>
<?php

$na=$_REQUEST['tna'];
$ma=$_REQUEST['tma'];
$pas=$_REQUEST['tpas'];
$ph=$_REQUEST['tph'];
$gen=$_REQUEST['r1'];
$age=$_REQUEST['tage'];
$nat=$_REQUEST['tnat'];
$sk=$_REQUEST['tsk'];
$typ=$_REQUEST['typ'];
$pla=$_REQUEST['place'];
$yr=$_REQUEST['tex1'];
$m=$_REQUEST['tex2'];


if(empty($na)||empty($ma)||empty($pas)||empty($ph)||empty($gen)||empty($age)||empty($nat)||empty($sk)||empty($typ)||empty($pla)||empty($yr)||empty($m))
{
die("<br>please fill out the fill form carefully...");
}


$link=mysql_connect("localhost","root");
$db=mysql_select_db("jobportal",$link);

mysql_query("insert into jobseek values('".$na."','".$ma."','".$pas."',".$ph.",'".$gen."',".$age.",'".$nat."','".$sk."','".$typ."','".$pla."',".$yr.",".$m.")");

echo "You are registered user now...";

mysql_close($link);
?>

<br><br>
<a href="reg.php"><img src="images/Back Arrow.png" width=30 height=30></img></a>


</body>
</html>