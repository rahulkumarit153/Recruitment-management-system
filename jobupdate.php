<!doctype html>
<html>
<head>
</head>

<body>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="qwerty"; // Mysql password
$db_name="ris"; // Database name
$tbl_name="job"; // Table name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$location=$_POST['loc'];
$company=$_POST['comp'];
$qualification=$_POST['qualif'];
$posting=$_POST['pos'];
$salary=$_POST['salary'];
$vacancies=$_POST['vacancies'];

$sql="Insert into job(location,company,qualification,posting,salary,vacancies) values('$location','$company','$qualification','$posting','$salary','$vacancies') ";
$result=mysql_query($sql);
if($result)
	echo '<script type="text/javascript">alert("New Job Is Updated");window.location=\'Admin.php\';</script>';

else
	echo "Error Occured";
?>
</body>
</html>