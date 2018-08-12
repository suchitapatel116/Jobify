<html>

<head>
<?php

$id=$_REQUEST['t1'];

$pas=$_REQUEST['p1'];

$link=mysql_connect("localhost","root");
$db=mysql_select_db("student",$link);

$result=mysql_query("select Id,Password from mytab");
 $flag=0;
 
       // session_start();

	while($rec=mysql_fetch_row($result))
	{
		if($rec[0]==$id && $rec[1]==$pas)
                {
		$flag=1;

			session_start();

			$_SESSION['ses']="yes";

	           if($_REQUEST['c3'].checked)
	            {
		      setcookie("keep","yes");
	            }

				

			

		
              header("location:info1.php");

		}

        }
if($flag==0)
{
header("location:index.php");
}


mysql_close($link);

?>
</head>

</html>