<!doctype html>
<html>
<head>
</head>

<body>

<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);
$nm=$_POST['fnm'].' '.$_POST['mnm'].' '.$_POST['lnm'];
$uid=$_POST['uid'];
$pwd1=$_POST['pwd'];
$pwd2=$_POST['rpwd'];
		
$dob=$_POST['dy'].'/'.$_POST['mnth'].'/'.$_POST['yr'];
$gen=$_POST['ge1'];
$mob=$_POST['mob'];
if($pwd1==$pwd2)
		{
			$pwd=$pwd1;
			$sql="Insert into login(name,userid,password,dob,gender,mobile)values('$nm','$uid','$pwd','$dob','$gen','$mob')";
		}
		else
			echo '<script type="text/javascript">alert(" Password and RE-Enter password will Mismatch");window.location=\'Login.html\';</script>';
			$result=mysql_query($sql);

if(! $result)
	echo"Connection is fail";
  else
  	echo '<script type="text/javascript">alert("You are Registered");window.location=\'Login.html\';</script>';
?>

</body>
</html>