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

$name=$_POST['name'];

$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$catagory=$_POST['cat'];
$lang=$_POST['lang'];
$area=$_POST['area'];
$marital=$_POST['marital'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$nation=$_POST['nation'];
$blood=$_POST['blood'];
$disability=$_POST['dab'];
$degree1=$_POST['dnm1'];
$institute1=$_POST['pi1'];
$board1=$_POST['bu1'];
$fullmark1=$_POST['fm1'];
$mark1=$_POST['om1'];
$division1=$_POST['dc1'];

$degree2=$_POST['dnm2'];
$institute2=$_POST['pi2'];
$board2=$_POST['bu2'];
$fullmark2=$_POST['fm2'];
$mark2=$_POST['om2'];
$division2=$_POST['dc2'];

$degree3=$_POST['dnm3'];
$institute3=$_POST['pi3'];
$board3=$_POST['bu3'];
$fullmark3=$_POST['fm3'];
$mark3=$_POST['om3'];
$division3=$_POST['dc3'];
$address1=$_POST['ad1'];
$district1=$_POST['dist1'];
$locality=$_POST['local'];
$state1=$_POST['state1'];
$pin1=$_POST['pin1'];
$mobile=$_POST['mob'];
$email=$_POST['email'];
$telephone=$_POST['tel'];

		$address2=$_POST['ad2'];
		$district2=$_POST['dist2'];
		$city=$_POST['ct'];
		$state2=$_POST['state2'];
		$pin2=$_POST['pin2'];
		
$uid=$_POST['uid'];	


$sql="Update form1 set name='$name',father='$fname',mother='$mname',dob='$dob',catagory='$catagory',language='$lang',area='$area',marital_status='$marital',religion='$religion',gender='$gender',nation='$nation',blood_group='$blood',any_disability='$disability',degree1='$degree1',institute1='$institute1',board1='$board1',full_mark1='$fullmark1',mark1='$mark1',division1='$division1',degree2='$degree2',institute2='$institute2',board2='$board2',full_mark2='$fullmark2',mark2='$mark2',division2='$division2',degree3='$degree3',institute3='$institute3',board3='$board3',full_mark3='$fullmark3',mark3='$mark3',division3='$division3',address1='$address1',district1='$district1',locality='$locality',state1='$state1',pin1='$pin1',mobile='$mobile',email='$email',telephone='$telephone',address2='$address2',district2='$district2',city='$city',state2='$state2',pin2='$pin2' where user_id='$uid' ";
$result=mysql_query($sql);

if($result)
{
	echo '<script type="text/javascript">alert("Your Record will be Updated !");window.location=\'Admin.php\';</script>';
}
else
		echo "Not Record ";

?>
</body>
</html>