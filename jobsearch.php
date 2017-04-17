<!doctype html>
<html>
<head>
<script src="job.js" language="javascript"></script>
<style>
#n1
	{
		position:absolute;
		top:0px;
		background:#6D1635;
		left:1px;
		width:1364px;
		height:100px;
	}
#jj
	{
		position:absolute;
		top:101px;
		background:#030;
		left:1px;
		text-align:center;
		color:#F09;
		font-size:35px;
		width:1364px;
		height:46px;
	}
#n2
	{
		position:absolute;
		left:5px;
		top:150px;
		width:1355px;
		height:60px;
		background:#CAF4F9;
		text-align:center;
		font-size:25px;
		color:#62224A;
	}
#n3
{
	font-size:30px;
	color:#003;
	font-weight:bold;
}
#n4
	{
		position:fixed;
		left:5px;
		top:280px;
		width:1355px;
		height:30px;
		background:#396;
		font-size:25px;
		color:#F3F
	}
#im3
	{
		position:absolute;
		top:0px;
		height:45px;
		left:20px;
	}

#im1
	{
		position:absolute;
		top:-10px;
		height:120px;
	}
#im2
	{
		position:absolute;
		top:-10px;
		height:110px;
		left:200px;
	}
#in1
	{
		position:absolute;
		left:1030px;
		top:0px;
		font-size:25px;
		font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
		background:#6D1635;
		width:300px;
		border:none;
		color:#F4A908;
		font-weight:bold;
	}
#in2
	{
		position:absolute;
		left:1060px;
		top:40px;
		font-size:45px;
		background:#6D1635;
		width:300px;
		border:none;
		color:#F4A908;
		font-weight:bold;
	}

</style>

</head>

<body onLoad="abc()" bgcolor="#CAF4F9">
<form name="f1">
<div id="n1">
<img id="im1" src="l1.gif">
<img id="im2" src="logo.png">
<input id="in1" name="dat">
<input id="in2" name="tm">
</div>
<div id="jj">JOBS ARE AVAILABLE
<a href="user.php"><img id="im3" src="cs_leftImg.png"></a></div>
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);

$qualif=$_POST['qualif'];

$sql="select * from job where Qualification='$qualif' ";
$result=mysql_query($sql);

if($result)
	{
		echo"<table  id=n2 cellpadding=10 cellspacing=5>";echo "<tr id=n3><td>LOCATION</td><td>COMPANY</td><td>POSTING</td><td>SALARY</td><td>VACCANCIES</td></tr>";
				while($row=mysql_fetch_array($result))
			{
				$n1=$row['location'];
				$n2=$row['company'];
				$n3=$row['Qualification'];
				$n4=$row['posting'];
				$n5=$row['salary'];
				$n6=$row['vacancies'];
				
				echo"<tr><td>";echo $n1;echo"<br>"; echo"</td>";
				echo"<td>";echo $n2;echo"<br>";echo"</td>";
				echo"<td>";echo $n4;echo"<br>";echo"</td>";
				echo"<td>";echo $n5;echo"<br>";
				echo"<td>";echo $n6;echo"<br>";
				echo"</td></tr>";
			
				
				
				
			}
			
			echo "</table>";
	}
				
?>

</body>
</html>