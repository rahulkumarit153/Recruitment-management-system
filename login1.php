<!doctype html>
<html>
<head>

<title></title>
</head>

<body>
<form method="post">
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);

$id=$_POST['n1'];
$pwd=$_POST['n2'];
$sql="Select * from login where userid='$id' and password='$pwd' ";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$rows=mysql_num_rows($result);
				if($rows==0)
				{	
					echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'Login.html\';</script>';
			}
				else
					{
					$_SESSION['Name']=$row['name'];	
					header('location:http://localhost/project/rahul/user.php');
					
					}
?>
</form>
					
</body>
</html>
