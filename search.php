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

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);

$cty=$_POST['ct'];

$sql="select * from job where city='$cty' ";
$result=mysql_query($sql);

if($result)
	{
		while($row=mysql_fetch_array($result))
			{
				$n1=$row['name'];
				$n2=$row['degree'];
				$n3=$row['city'];
				$n4=$row['seat'];
				
				echo"<table border=3 id=n1><tr><td>";echo $n1;echo"<br>"; echo"</td>";
				echo"<td>";echo $n2;echo"<br>";echo"</td>";
				echo"<td>";echo $n3;echo"<br>";echo"</td>";
				echo"<td>";echo $n4;echo"<br>";echo"</td></tr></table>";
			}
	echo"connection establish!";
	}
else
	{
		echo"connection disconnect ";
	}
				
?>

</body>
</html>