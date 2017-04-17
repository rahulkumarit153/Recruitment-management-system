<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$local="localhost";
$user="root";
$pwd="qwerty";
$db="ris";
$con=mysql_connect($local,$user,$pwd) or die("cant connect!");
mysql_select_db($db,$con);

$sql="CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
$row=mysql_query($sql);
echo "table created";
?>
</body>
</html>