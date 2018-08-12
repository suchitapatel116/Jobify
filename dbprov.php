<html>
<body>
<?php

$na=$_REQUEST['tna'];
$ma=$_REQUEST['tma'];
$pas=$_REQUEST['tpas'];
$ph=$_REQUEST['tph'];
$tc=$_REQUEST['tc'];
$he=$_REQUEST['headq'];
$job=$_REQUEST['tjob'];
$ar=$_REQUEST['area'];

if(empty($na)||empty($ma)||empty($pas)||empty($ph)||empty($tc)||empty($he)||empty($job)||empty($ar))
{
die("<br>please fill out the fill form carefully...");
}

$link=mysql_connect("localhost","root");
$db=mysql_select_db("jobportal",$link);

mysql_query("insert into jobprov values('".$na."','".$ma."','".$pas."',".$ph.",'".$tc."','".$he."','".$job."','".$ar."')");

echo "You are registered user now...";

mysql_close($link);
?>

<br><br>
<a href="reg.php"><img src="images/Back Arrow.png" width=30 height=30></img></a>


</body>
</html>