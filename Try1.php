<?php

//http://35.162.40.126/phpmyadmin
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="r3wat";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);
 
$flag=0;$dt;$cdt=date("Y-m-d");
$sql="select * from graph_res where 1";
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
				$sqlr1="delete from graph_res where 1";
				$result1=mysql_query($sqlr1);
				$isql="insert into graph_res(Meter_id,reading,timestamp)
(SELECT
  Thismultiply_counts.Meter_id, 
  COALESCE(Thismultiply_counts.reading - Prevmultiply_counts.reading, Thismultiply_counts.reading) AS consumption,
 Thismultiply_counts.ts
FROM
  multiply_counts    AS Thismultiply_counts
LEFT JOIN
  multiply_counts    AS Prevmultiply_counts
    ON  Prevmultiply_counts.Meter_id   = Thismultiply_counts.Meter_id
    AND Prevmultiply_counts.ts = (SELECT MAX(ts)
                          FROM multiply_counts
                         WHERE Meter_id   = Thismultiply_counts.Meter_id
                           AND ts < Thismultiply_counts.ts)
)";
	
	$ires=mysql_query($isql);
	if($rires)
				echo "ok";
				else
				echo "something went wrong";
}

else
{
	$isql="insert into graph_res(Meter_id,reading,timestamp)
(SELECT
  Thismultiply_counts.Meter_id, 
  COALESCE(Thismultiply_counts.reading - Prevmultiply_counts.reading, Thismultiply_counts.reading) AS consumption,
 Thismultiply_counts.ts
FROM
  multiply_counts    AS Thismultiply_counts
LEFT JOIN
  multiply_counts    AS Prevmultiply_counts
    ON  Prevmultiply_counts.Meter_id   = Thismultiply_counts.Meter_id
    AND Prevmultiply_counts.ts = (SELECT MAX(ts)
                          FROM multiply_counts
                         WHERE Meter_id   = Thismultiply_counts.Meter_id
                           AND ts < Thismultiply_counts.ts)
)";
	
	$ires=mysql_query($isql);
	
	if($ires)
	echo "yes";
	else
		echo "not all";
	
}

		

?>