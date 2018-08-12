<html>
<body>
<?php

$oid=$_REQUEST['t1'];
$opas=$_REQUEST['p1'];

$link=mysql_connect("localhost","root");
$db=mysql_select_db("jobportal",$link);

$sch=mysql_query("select * from login");
$f=0;
	while($a=mysql_fetch_row($sch))
	{
		if($a[0]==$oid && $a[1]==$opas)
		{
		$f=1;
				session_start();
				$_SESSION['new']="yes";
					
			if($_REQUEST['cb'])
			{
			setcookie("log","yes");
			}
		header("location:infoseek.php");
		}
	}
	
$srch1=mysql_query("select * from jobseek");
$f1=0;
	while($a=mysql_fetch_row($srch1))
	{
		if($oid==$a[0] && $opas==$a[2])
		{
		$f1=1;	
				session_start();
				$_SESSION['new']="yes";
							
			if($_REQUEST['cb'])
			{
			setcookie("log1","yes");
			}
		header("location:slogged.php");
		}
	}
	
$srch2=mysql_query("select * from jobprov");
$f2=0;
	while($a=mysql_fetch_row($srch2))
	{
		if($oid==$a[0] && $opas==$a[2])
		{
		$f2=1;
				session_start();
				$_SESSION['new']="yes";
						
			if($_REQUEST['cb'])
			{
			setcookie("log2","yes");
			}
		header("location:plogged.php");
		}
	}

if($f==0 && $f1==0 && $f2==0)
{
header("location:login.php");
}
	
mysql_close($link);
?>

</body>
</html>