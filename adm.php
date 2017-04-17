<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);

$id=$_POST['n1'];
$pw=$_POST['n2'];
$sql="Select * from admin where uid='$id' and pwd='$pw' ";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
				if($rows==0)
				{	
					echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'adminlogin.html\';</script>';			}
				else
					{
					header('location:http://localhost/project/rahul/Admin.php');
					
					}

?>
</body>
</html>