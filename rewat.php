<?php

//http://35.162.40.126/phpmyadmin
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="r3wat";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);
 
$flag=0;$dt;$cdt=date("Y-m-d");
$sql="select * from multiply_counts where 1";
$res=mysql_query($sql);

if($res)
{
	while($row1=mysql_fetch_array($res))
		{
			$dt=$row1['ts'];
			$datetime = explode(" ",$dt);
$date = $datetime[0];
			
				if($date==$cdt)
					{
						$flag=1;
						break;
					}
		}
}


if($flag==1)
{
				$sqlr1="update multiply_counts t1,filtered_counts t2 set t1.reading=(SELECT t2.counts*b.multiplication_factor from multiply_fact b WHERE t2.Meter_id=b.Meter_id and date(timestamp)='$cdt'),t2.flag=1 where t1.meter_id=t2.meter_id and date(t2.timestamp)='$cdt'";
				$result1=mysql_query($sqlr1);
				if($result1)
				echo "ok";
				else
				echo "something went wrong";
}

else
{
	$isql="INSERT into multiply_counts (Meter_id,reading,ts) (SELECT a.Meter_id, a.counts, a.timestamp from filtered_counts a where date(a.timestamp)='$cdt' group by a.Meter_id);";
	
	$ires=mysql_query($isql);
	
	if($ires)
	echo "yes";
	else
		echo "not all";
	
}

		

?>