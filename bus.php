<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="gaya.css" >
<script src="gaya.js" language="javascript"></script>
</head>
<body onLoad="abc()">
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="gaya city";


$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);

$source=$_POST['source'];
$destination=$_POST['dest'];
$doj=$_POST['s2'].'-'.$_POST['s1'].'-'.$_POST['s3'];

$sql="Select * from bus where source='$source' and estination='$destination' and doj='$doj'  ";
$result=mysql_query($sql);
if($result)
	{
		echo "<table id=t1><tr><td>";echo "Name Of Buses";echo "</td><td>";echo "Source Point";echo "</td><td>";echo "DDestination Point";echo "</td><td>";echo "Time-Table";echo "</td><td>";echo "Type Of Bus";echo "</td><td>";echo "Fare";echo "</td><td>";echo "Date Of Travel";echo "</td></tr>";
		while($row=mysql_fetch_array($result))
			{
				$n1=$row['source'];
				$n2=$row['destination'];
				$n3=$row['doj'];
				$n4=$row['type'];
				$n5=$row['time'];
				$n6=$row['fare'];
				$n7=$row['name'];
				
				echo "<tr><td>";echo $n7;echo "</td><td>";echo $n1;echo "</td><td>";echo $n2;echo "</td><td>";echo $n5;echo "</td><td>";echo $n4;echo "</td><td>";echo $n6;echo "</td><td>";echo $n3;echo "</td></tr>";
				
			}
			echo "</table>";
	}
?>
<form name="f1">
<div id="full">
<div id="t1">
<img src="logo_champ.gif">
<img src="logon.png" id="img1">
<input id="tm" type="text">
<input id="dat" type="text">

</div>
<div id="line"></div>
<div id="menu">
<ul id="u1">
<li ><a href="gaya.php">HOME</a></li>
<li><a href="#">FESTIVAL</a></li>
<li><a href="#">GALLERY</a></li>
<li><a href="#">ABOUT US</a></li>
<li><a href="#">CONTACT US</a></li>
<li class="current"><a href="Buses.html">BUS TRAVELLING</a></li>
<li><a href="#">AIRPORT</a></li>
<li><a href="#">RAILWAY STATION </a></li>
</ul>
</div>
<div id="lin">
</div>
<div id="k1">
JOURNEY IN GAYA CITY BY BUS
</div>
</div>
</body>
</html>