<!doctype html>
<html>
<head>
<script type="text/javascript">
function abc()
	{
		window.setTimeout("showTime()",1000);
	}
function showTime()
	{
		var m,x,y,l,d;
		d=new Date();
		l=d.getDay();
		switch(l)
			{
				case 1 : l="Monday";break;
				case 2 : l="Tuesday";break;
				case 3 : l="Wednesday";break;
				case 4 : l="Thursday";break;
				case 5 : l="Friday";break;
				case 6 : l="Saturday";break;
				case 0 : l="Sunday";break;
				
			}
		m=eval(d.getMonth());
		switch(m)
			{
				case 0 : m="January";break;
				case 1 : m="February";break;
				case 2 : m="March";break;
				case 3 : m="April";break;
				case 4 : m="May";break;
			 	case 5 : m="June";break;
				case 6 : m="July";break;
				case 7 : m="August";break;
				case 8 : m="September";break;
				case 9 : m="October";break;
				case 10 :m="November";break;
				case 11 :m="December";break;
				
			}
			x=l+", "+d.getDate()+" / "+m+" / "+d.getFullYear();
			y=d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
			document.f1.d1.value=x;
			document.f1.tm.value=y;
			myid=window.setTimeout("showTime()",1000);
	}
</script>
<title>Update Registration Form</title>
<link rel="stylesheet" type="text/css" href="register.css">
</head>

<body bgcolor="#D0E1EC" onLoad="abc()">
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

if($result)
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
				$n47=$row['blood_group'];
				$n11=$row['nation'];
				$n12=$row['any_disability'];
				$n13=$row['degree1'];
				$n14=$row['institute1'];
				$n15=$row['board1'];
				$n17=$row['full_mark1'];
				$n18=$row['mark1'];
				$n19=$row['division1'];
				$n20=$row['degree2'];
				$n21=$row['institute2'];
				$n22=$row['board2'];
				$n24=$row['full_mark2'];
				$n25=$row['mark2'];
				$n26=$row['division2'];
				$n27=$row['degree3'];
				$n28=$row['institute3'];
				$n29=$row['board3'];
				$n31=$row['full_mark3'];
				$n32=$row['mark3'];
				$n33=$row['division3'];
				$n34=$row['address1'];
				$n35=$row['district1'];
				$n36=$row['locality'];
				$n37=$row['pin1'];
				$n38=$row['state1'];
				$n39=$row['mobile'];
				$n40=$row['email'];
				$n41=$row['telephone'];
				$n42=$row['address2'];
				$n43=$row['district2'];
				$n44=$row['city'];
				$n45=$row['pin2'];
				$n46=$row['state2'];
				}
				
	}
else
{
	echo '<script type="text/javascript">alert("user no found");window.location=\'updaterecord.html\';</script>';

}

?>
<div id="n1">
<form  name="f1" action="upd1.php" method="post" enctype='multipart/form-data'>
<input id="date" name="d1" style="font-size:large">
<input id="time" name="tm" style="font-size:x-large">
<h2 id="hh1">Update Record</h2>
</div>
<hr id="hr1" width="1355">
<p id="p1">User Type :&nbsp;&nbsp;
<select name="usertype" id="ut" >
<option>Candidate</option>
<option>Admin</option>
</select>
<fieldset id="f1">
<legend align="center">Basic Information</legend>
<input name="uid" size="25"  value="<?php echo $uid; ?>" hidden="true">
<p id="p2">Name </p>
<input id="in1" name="name" size="75" value="<?php echo $n1; ?>" >

<p id="p3">Father's Name </p>
<input id="in4" name="fname" size="75" value="<?php echo $n2; ?>" >

<p id="p4">Mother's Name </p>
<input id="in7" name="mname" size="75" value="<?php echo $n3; ?>">
	
<p id="p5">Date of Birth</p>
<input id="s1" name="dob" size="75" value="<?php echo $n4; ?>" >

<p id="p6">Catagory</p>
<input id="r1" name="cat" size="75" value="<?php echo $n5; ?>" >

<p id="p7">Language Known</p>
<input id="r2" name="lang" size="75" value="<?php echo $n6; ?>" >

<p id="p8">Urban/Rural</p>
<input id="ar" name="area" size="25"  value="<?php echo $n7; ?>">

<p id="p9">Marital Status</p>
<input id="ms" name="marital" size="25" value="<?php echo $n8; ?>" >

<p id="p10">Religion</p>
<input id="rg" name="religion" size="25" value="<?php echo $n9; ?>" >
<p id="p11">Gender</p>
<input id="gn" name="gender" size="75"  value="<?php echo $n10; ?>">
<p id="p12">Nationality</p>
<input id="nt" name="nation" size="35"  value="<?php echo $n11; ?>">
<p id="p13">Blood Group</p>
<input id="bg" name="blood" size="25"  value="<?php echo $n47; ?>">
<p id="p14">Any Disability</p>
<input id="dab" name="dab" size="25" value="<?php echo $n12; ?>" >
<img id="im1" src="man.png" name="photo">
<input id="in10" type="file" name="ph" >

</fieldset>

<fieldset id="f2">
<legend align="center">Educational Datails</legend>
<table id="t1" width="1230">
<tr>
<th align="center" width="10%">Degree Name</th>
<th align="center" width="23%">Passing Institution</th>
<th align="center" width="23%">Board/University </th>
<th align="center">Full Marks</th>
<th align="center">Obtained Marks</th>
<th align="center">Division/Class</th>
</tr>
<tr>
<td align="center" ><input name="dnm1" size="12" value="<?php echo $n13; ?>" ></td>
<td align="center"><input name="pi1" size="35" value="<?php echo $n14; ?>"></td>
<td align="center"><input name="bu1" size="35" value="<?php echo $n15; ?>"></td>
<td align="center"><input name="fm1"  size="15" value="<?php echo $n17; ?>"></td>
<td align="center"><input name="om1" size="15" value="<?php echo $n18; ?>"></td>
<td align="center"><input name="dc1" size="25" value="<?php echo $n19; ?>"></td>

<tr>
<td align="center" ><input name="dnm2" size="12" value="<?php echo $n20; ?>"></td>
<td align="center"><input name="pi2" size="35" value="<?php echo $n21; ?>"></td>
<td align="center"><input name="bu2" size="35" value="<?php echo $n22; ?>"></td>
<td align="center"><input name="fm2"  size="15" value="<?php echo $n24; ?>"></td>
<td align="center"><input name="om2" size="15" value="<?php echo $n25; ?>"></td>
<td align="center"><input name="dc2" size="25" value="<?php echo $n26; ?>"></td>
</tr>

<tr>
<td align="center" ><input name="dnm3" size="12" height="30" value="<?php echo $n27; ?>"></td>
<td align="center"><input name="pi3" size="35" value="<?php echo $n28; ?>"></td>
<td align="center"><input name="bu3" size="35" value="<?php echo $n29; ?>"></td>
<td align="center"><input name="fm3"  size="15" value="<?php echo $n31; ?>"></td>
<td align="center"><input name="om3" size="15" value="<?php echo $n32; ?>"></td>
<td align="center"><input name="dc3" size="25" value="<?php echo $n33; ?>"></td>
</tr>
</table>
</fieldset>

<fieldset id="f3">
<legend align="center">Correspondance Address</legend>
<p id="pp1">Address </p><input id="in11" name="ad1" size="30" value="<?php echo $n34; ?>">
<p id="pp2">Locality </p><input id="in12" name="local" size="30" value="<?php echo $n36; ?>">
<p id="pp3">Pin Code </p><input id="in13" name="pin1" size="30" value="<?php echo $n37 ?>">
<p id="pp4">E-mail id </p><input id="in14" name="email" size="30" value="<?php echo $n40; ?>">
<p id="pp6">Dist </p><input id="in15" name="dist1" size="20" value="<?php echo $n35; ?>">
<p id="pp7">State</p>
<input id="st" name="state1" size="20" value="<?php echo $n38; ?>">
<p id="pp8">Mobile</p><input id="in16" name="mob" size="20" value="<?php echo $n39; ?>">
<p id="pp9">Tel</p><input id="in17" name="tel" size="20" value="<?php echo $n41; ?>">

</fieldset>
<fieldset id="f4">
<legend align="center">Permanent Address</legend>

<p id="pp2">Address </p> <input id="in12" name="ad2" size="30" value="<?php echo $n42; ?>">
<p id="pp3">City </p> <input id="in13" name="ct" size="30" value="<?php echo $n44; ?>">
<p id="pp4"> Pin</p> <input id="in14" name="pin2" size="15" value="<?php echo $n45; ?>">

<p id="pp8">State</p><input id="in16" name="state2" size="20" value="<?php echo $n46; ?>">
<p id="pp7">Dist </p><input id="st" name="dist2" size="20" value="<?php echo $n43; ?>" >
</fieldset>
<div id="n2">
<input type="submit" value="Submit" id="in18">
</form>
<a href="updaterecord1.html"><button id="in19">Cancel</button></a>
</div>


</body>
</html>
