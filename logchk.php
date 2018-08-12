<html>
<body>

<?php
setcookie("log","");
setcookie("log1","");
setcookie("log2","");

session_start();
$_SESSION['new']="no";

header("location:index.php");
?>

</body>
</html>