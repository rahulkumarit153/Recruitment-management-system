<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="r3wat";
$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);
$md = $_POST['meter_id'];
$fg = $_POST['flag'];
$bt = $_POST['bat'];

if($fg==1)
{
	$altype="Temper";
	$aldes="removed add-on from meter";
	$ains="Insert into alerts(Meter_id,flag,Alert_type,Alert_description,battery_status) values ('$md','$fg','$altype','$aldes','$bt')";
	$alertres=mysql_query($ains);
	if($alertres)
	echo "ji";
	else
		echo "no 1";
}
if($bt>=3.0 and $bt<=3.2)
		{
		$altype="Battery";	
		$altdesc="Battery_low";
		$ains="Insert into alerts(Meter_id,flag,Alert_type,Alert_description,battery_status) values ('$md', '$fg','$altype','$altdesc','$bt')";
	$alertres=mysql_query($ains);
	if($alertres)
	echo "ji 2";
	else
		echo "no 2";
		}
else if($bt<3.0)
{
		$altype="Battery";	
		$altdesc="very low_battery";
		$ains="Insert into alerts(Meter_id,flag,Alert_type,Alert_description,battery_status) values ('$md', $fg,'$altype','$altdesc',$bt)";
	$alertres=mysql_query($ains);
	
	if($alertres)
	echo "ji 3";
	else
		echo "no 3";
}




?>