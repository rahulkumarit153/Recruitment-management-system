<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Records</title>
<style>
#n1
{
	position:absolute;
	left:400px;
	top:200px;
	width:460px;
	height:210px;
	border-width:10px;
	border-color:#F0F;
	background:#003;
	border-style:solid;
}
#n2
{
	position:absolute;
	left:0px;
	top:20px;
	width:150px;
	height:150px;
	}
#b1
{
	position:absolute;
	left:210px;
	top:100px;
	width:198px;
	height:40px;
	background:#FC0;
	font-size:30px;
	color:#60F
	}
#pp1
{
	position:absolute;
	left:210px;
	top:85px;
	width:198px;
	height:40px;
	font-size:30px;
	color:#60F
	}

#b2
{
	position:absolute;
	left:210px;
	top:160px;
	width:198px;
	height:40px;
	background:#FC0;
	font-size:30px;
	color:#60F
	}
a
	{
		text-decoration:none;
		color:#60F;
	}
a:hover
	{
		text-decoration:underline;
		color:#030
	}
#in1
{
	position:absolute;
	left:170px;
	top:30px;
	width:278px;
	height:30px;
	font-weight:bold;
	font-size:15px;
	}

</style>
</head>

<body>
<div id="n1">
<form action="deleterecord.php" method="post" enctype="multipart/form-data">
<img id="n2" src="d.ico">
<input type="text" name="uid" id="in1" placeholder="ENTER USER ID TO DELETE RECORD">
<button id="b1">Delete </button>
</form>
<button  id="b2"><a href="Admin.html">Back</a></button>
</div>
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);

$uid=$_POST['uid'];

$sql="Delete from form1 where user_id='$uid' ";
$result=mysql_query($sql);
if($result)
	{
	echo '<script type="text/javascript">alert("One Record deleted");window.location=\'Admin.php\';</script>';
	}
?>
</body>
</html>
