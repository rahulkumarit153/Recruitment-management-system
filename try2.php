<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="r3wat";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail !");
mysql_select_db($mysql_database,$bd);
 $cdt=date("Y-m-d");


function flag($metid)
{
$flag_graph=0;
$sql_graph="select * from graph_res where Meter_id='$metid' ";
$res_graph=mysql_query($sql_graph);


if($res_graph)
{
  while($row1=mysql_fetch_array($res_graph))
    {
      $dt=$row1['timestamp'];
      $datetime = explode(" ",$dt);
      $date = $datetime[0];
      $cdate=date("Y-m-d");
        if($cdate==$date)
          {
            $flag_graph=1;
            break;
          }
    }
	
}

return $flag_graph;
}




$avg="select * from consumer where 1";
$avgsql=mysql_query($avg);
if($avgsql)
{
	while($row=mysql_fetch_array($avgsql))
	{
		$avgcons=$row['avg'];
		$mitid=$row['Meter_id'];
		$cusres;
		$flag_graph=flag($mitid);
		
		if($flag_graph==1)
		{
			
		$cuscons="Select curr_reading from graph_res where Meter_id='$mitid' and timestamp=(SELECT timestamp FROM (SELECT timestamp FROM graph_res where Meter_id='$mitid' ORDER BY timestamp DESC LIMIT 2) as graph ORDER BY timestamp LIMIT 1)";
		//$cuscons="select * from graph_res where Meter_id='$mitid' and date(timestamp)='$cdt'";
		$cusres=mysql_query($cuscons);
			}
		
		else
		{
			$cuscons="Select * from graph_res where Meter_id='$mitid' and timestamp=(SELECT timestamp FROM (SELECT timestamp FROM graph_res where Meter_id='$mitid' ORDER BY timestamp DESC LIMIT 1) as graph ORDER BY timestamp LIMIT 1)";
			//$cuscons="select * from graph_res where Meter_id='$mitid' and date(timestamp)='$cdt'";
		$cusres=mysql_query($cuscons);
	
		}
		if($cusres)
		{
			while($row1=mysql_fetch_array($cusres))
			{
				
				$custreading=$row1['curr_reading'];
				echo $custreading;
				if($custreading>$avgcons)
				{
			$tempsql="Insert into notification(Meter_id,notific_type,notific_desc,time) values('$mitid','Consumption','any 			msg','$cdt')";
			$cusresult=mysql_query($tempsql);
				}
			}
			
		}
		
		
	}
}






/*$sql="select * from readings where 1";
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
	$rsql="select * from multiply_counts where date(ts)='$cdt'";
	$rres=mysql_query($rsql);
	if($rres)
	{
		while($rrow1=mysql_fetch_array($rres))
		{
			$mid=$rrow1['Meter_id'];
			 $sqt="select * from readings where date(timestamp)='$cdt' and Meter_id='$mid'  ";
        $filres=mysql_query($sqt);
        $nor=mysql_num_rows($filres);
        if($nor>0)
        {
    $rsqlr1="update readings r set r.reading=(select reading from multiply_counts where Meter_id='$mid' and date(ts)='$cdt')+(select initial_reading from consumer where Meter_id='$mid') where r.Meter_id='$mid' and date(r.timestamp)='$cdt' ";
        $result12=mysql_query($rsqlr1);
		if($result12)
		echo "hurrah";
		else
		echo "raja ji";
        }
    else
    {
      $rsqlr1="INSERT INTO readings (Meter_id, reading, timestamp) values ('$mid',((select reading from multiply_counts where Meter_id='$mid' and date(ts)='$cdt')+(select initial_reading from consumer where Meter_id='$mid')),'$cdt')";
 $result12=mysql_query($rsqlr1);
 
		if($result12)
		echo "hurrah  koio";
		else
		echo "raja ji bolio";
    }
		}
}
else
echo "going wrong";
}

else
{
	$isql="INSERT INTO readings (Meter_id, reading, timestamp)SELECT a.Meter_id, a.reading+b.initial_reading as reading, a.ts from multiply_counts a, consumer b WHERE a.Meter_id=b.Meter_id  and date(a.ts)='$cdt' ";
	
	$ires=mysql_query($isql);
	
	if($ires)
	echo "yes";
	else
		echo "not all";
	
}
/*

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
				
 $sqlr="select * from filtered_counts where date(timestamp)='$cdt'";
$result_filt=mysql_query($sqlr);

  while($row=mysql_fetch_array($result_filt))
      {
        $n1=$row['Meter_id'];
        $sqt="select * from multiply_counts where date(ts)='$cdt' and Meter_id='$n1'";
        $filres=mysql_query($sqt);
        $nor=mysql_num_rows($filres);
        if($nor>0)
        {
        $sqlupdate1="update multiply_counts a set a.reading=(select counts from filtered_counts where Meter_id='$n1' and date(timestamp)='$cdt')*(select multiplication_factor from multiply_fact where Meter_id='$n1') where a.Meter_id='$n1' and date(a.ts)='$cdt'";
        $resultupdate=mysql_query($sqlupdate1);
		if($resultupdate)
				echo "oyes111";
				else
				echo "ono1111";
        }
    else
    {
       $sqlr1="INSERT into multiply_counts (Meter_id,reading,ts) values ('$n1',(SELECT t2.counts*b.multiplication_factor from filtered_counts t2,multiply_fact b WHERE (t2.Meter_id='$n1' and date(t2.timestamp)='$cdt') and b.Meter_id='$n1'),'$cdt')";
        
          $rest=mysql_query($sqlr1);
		  if($rest)
				echo "oyes";
				else
				echo "ono";
    }
    }
}
				

else
{
	 $insertsql="INSERT into multiply_counts (Meter_id,reading,ts) (SELECT a.Meter_id,(SELECT t2.counts*b.multiplication_factor  from filtered_counts t2,multiply_fact b WHERE t2.Meter_id=b.Meter_id and date(t2.timestamp)='$cdt') , a.timestamp from filtered_counts a where date(a.timestamp)='$cdt' group by a.Meter_id)";
  
  $insertres=mysql_query($insertsql);
				if($insertsql)
				echo "oyes ji";
				else
				echo "ono ji";
}

	



















	/*$isql="INSERT into multiply_counts (Meter_id,reading,ts) (SELECT a.Meter_id, a.counts, a.timestamp from filtered_counts a where date(a.timestamp)='$cdt' group by a.Meter_id);";
	
	$ires=mysql_query($isql);
	if($ires)
	echo "uturn";
	else
	echo "noooo";*/


				/*$sqlr1="update multiply_counts t1,filtered_counts t2 set t1.reading=(SELECT t2.counts*b.multiplication_factor from multiply_fact b WHERE t2.Meter_id=b.Meter_id and date(timestamp)='$cdt'),t2.flag=1 where t1.meter_id=t2.meter_id and date(t2.timestamp)='$cdt'";
				$result1=mysql_query($sqlr1);*/


?>




















