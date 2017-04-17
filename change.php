<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql="Select * from login where userid='$uid' and password='$pwd' ";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
if($rows==0)
		{
		echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'cng.html\';</script>';}
else
	{
	$npwd=$_POST['npwd'];
	$rnpwd=$_POST['rnpwd'];
	if($npwd==$rnpwd)
		{
			$sql="Update login set password='$npwd' where userid='$uid' ";
			$rs=mysql_query($sql);
			if($rs)
				echo '<script type="text/javascript">alert("Your Password will be Changed");window.location=\'Login.html\';</script>';
		}
		else
			{
				echo '<script type="text/javascript">alert("New Password and RE-Enter password will Mismatch");window.location=\'cng.html\';</script>';
			}
	}

?>
</body>
</html>