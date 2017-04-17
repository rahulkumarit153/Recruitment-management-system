<?php

//http://35.162.40.126/phpmyadmin
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="r3wat";
$flag=0;$dt;$cdt=date("Y-m-d");

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);
 
$sql="select * from filtered_counts where 1";
$res=mysql_query($sql);

if($res)
{
	while($row1=mysql_fetch_array($res))
		{
			$dt=$row1['timestamp'];
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
$sqlt="delete from try where 1";
$resl=mysql_query($sqlt);
$sqlt1="Insert into try(meter_id,counts,time)(select meter_id,max(counts),time from cyclecount where date(time)='$cdt' group by meter_id order by counts desc)";
$rest=mysql_query($sqlt1);
$sqlr="select * from try where date(time)='$cdt'";
$result=mysql_query($sqlr);
	while($row=mysql_fetch_array($result))
			{
				$n1=$row['meter_id'];
				$n2=$row['counts'];
				$n3=$row['time'];
				$sqlr1="update filtered_counts a set a.counts='$n2',a.timestamp='$n3',a.flag=0 where a.Meter_id='$n1' and date(a.timestamp)='$n3'";
				$result1=mysql_query($sqlr1);
			}
}
else
{
	$isql="INSERT into filtered_counts (Meter_id,counts,timestamp) (SELECT a.Meter_id, max(a.counts), a.time from cyclecount a where date(a.time)='$cdt' group by a.Meter_id);";
	
	$ires=mysql_query($isql);
	
}

		

?>