<!doctype html>
<html>
<head>
<title>Records</title>
<script type="text/javascript" src="job.js" language="javascript"></script>
<style>
#n1
	{
		position:absolute;
		left:2px;
		top:150px;
		width:2500px;
		height:150px;
		background:#003;
		color:#CCC;
	}
#n5
	{
		position:fixed;
		top:0px;
		background:#6D1635;
		left:1px;
		width:1364px;
		height:100px;
	}
#im1
	{
		position:absolute;
		top:-10px;
		height:120px;
	}
#jj
	{
		position:fixed;
		top:101px;
		background:#030;
		left:1px;
		text-align:center;
		color:#F09;
		font-size:35px;
		width:1364px;
		height:46px;
	}
#im2
	{
		position:absolute;
		top:-10px;
		height:110px;
		left:200px;
	}
#im3
	{
		position:absolute;
		top:0px;
		height:45px;
		left:20px;
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
	
#n3
{
	font-size:20px;
	color:#FC0;
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

</style>
</head>
<body onLoad="abc()" bgcolor="#CAF4F9">
<form name="f1">
<div id="n5">
<img id="im1" src="l1.gif">
<img id="im2" src="logo.png">
<input id="in1" name="dat">
<input id="in2" name="tm">
</div>
<div id="jj">RECORD OF Mr. <?php echo $n1; ?>
<a href="searchrecord.html"><img id="im3" src="cs_leftImg.png"></a></div>
</form>
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);

$uid=$_POST['uid'];

$sql="select * from form1 where user_id='$uid' ";
$result=mysql_query($sql);

if(!$result)
		{
			echo '<script type="text/javascript">alert("Usr_Id Doesnt Found");window.location=\'user.php\';</script>';

		}
	else
{
		while($row=mysql_fetch_array($result))
			{
				$n1=$row['name'];
				$n2=$row['father'];
				$n3=$row['mother'];
				$n4=$row['dob'];
				$n5=$row['catagory'];
				$n6=$row['language'];
				$n7=$row['area'];
				$n8=$row['marital_status'];
				$n9=$row['religion'];
				$n10=$row['gender'];
				$n11=$row['nation'];
				$n12=$row['any_disability'];
				$n13=$row['degree1'].'-'.$row['institute1'].'-'.$row['board1'].'-'.$row['degree1'].'-'.$row['full_mark1'].'-'.$row['mark1'].'-'.$row['division1'];
				$n14=$row['degree2'].'-'.$row['institute2'].'-'.$row['board2'].'-'.$row['degree2'].'-'.$row['full_mark2'].'-'.$row['mark2'].'-'.$row['division2'];
				$n15=$row['degree3'].'-'.$row['institute3'].'-'.$row['board3'].'-'.$row['degree3'].'-'.$row['full_mark3'].'-'.$row['mark3'].'-'.$row['division3'];
				$n16=$row['address1'].'-'.$row['district1'].'-'.$row['pin1'].'-'.$row['state1'];
				$n17=$row['mobile'];
				$n18=$row['email'];
				$n19=$row['address2'].'-'.$row['district2'].'-'.$row['pin2'].'-'.$row['state2'];
				
				
				echo"<table border=3 id=n1 cellpadding=10 cellspacing=5 bordercolor=#FF0000>";echo "<tr id=n3><td>Candidate Name</td><td>Father's Name</td><td>Mother's Name</td><td>Date of Birth</td><td>Catagory</td><td>Language</td><td>Area</td><td>Marital_Status</td><td>Relegion</td><td>Gender</td><td>Natonality</td><td>Any_Disability</td><td>Mobile No.</td><td>E-mail Id</td><td>1st Qualification</td><td>2nd Qualification</td><td>3rd Qualification</td><td>Correspondence Address</td><td>Permanent Address</td></tr>";
				echo"<tr><td>";echo $n1;echo"<br>"; echo"</td>";
				echo"<td>";echo $n2;echo"<br>";echo"</td>";
				echo"<td>";echo $n3;echo"<br>";echo"</td>";
				echo"<td>";echo $n4;echo"<br>";
				echo"<td>";echo $n5;echo"<br>";
				echo"<td>";echo $n6;echo"<br>";
				echo"<td>";echo $n7;echo"<br>";
				echo"<td>";echo $n8;echo"<br>";
				echo"<td>";echo $n9;echo"<br>";
				echo"<td>";echo $n10;echo"<br>";
				echo"<td>";echo $n11;echo"<br>";
				echo"<td>";echo $n12;echo"<br>";
				echo"<td>";echo $n17;echo"<br>";
				echo"<td>";echo $n18;echo"<br>";
				echo"<td>";echo $n13;echo"<br>";
				echo"<td>";echo $n14;echo"<br>";
				echo"<td>";echo $n15;echo"<br>";
				echo"<td>";echo $n16;echo"<br>";
				echo"<td>";echo $n19;echo"<br>";
				echo"</td></tr></table>";
			
				
				
				
			}
	}
		
			
			
	
				
?>
</body>
</html>