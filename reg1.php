<?php
$host="localhost"; 
$username="root"; 
$password="qwerty"; 
$db_name="ris"; 
$tbl_name="form1"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$name=$_POST['first'].' '.$_POST['middle'].' '.$_POST['last'];

$fname=$_POST['ffirst'].' '.$_POST['fmiddle'].' '.$_POST['flast'];
$mname=$_POST['mfirst'].' '.$_POST['mmiddle'].' '.$_POST['mlast'];
$dob=$_POST['mnth'].'/'.$_POST['dy'].'/'.$_POST['yr'];
$catagory=$_POST['cat'];
$lang=$_POST['lan1'].' '.$_POST['lan2'].' '.$_POST['lan3'].' '.$_POST['lan4'].' '.$_POST['lan5'];
$area=$_POST['ar1'];
$marital=$_POST['ms'];
$religion=$_POST['rg'];
$gender=$_POST['gen'];
$nation=$_POST['nt'];
$file=$_POST['ph'];
$blood=$_POST['bg'];
$disability=$_POST['dab'];
$userid=$_POST['uid'];
$pwd=$_POST['pwd'];
 
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
		
$query= "insert into form1 (name,father,mother,dob,catagory,language,area,marital_status,religion,gender,nation,blood_group,any_disability,user_id,password,degree1,institute1,board1,full_mark1,mark1,division1,degree2,institute2,board2,full_mark2,mark2,division2,degree3,institute3,board3,full_mark3,mark3,division3,address1,district1,locality,state1,pin1,mobile,email,telephone,address2,district2,city,state2,pin2) values ('$name','$fname','$mname','$dob','$catagory','$lang','$area','$marital','$religion','$gender','$nation','$blood','$disability','$userid','$pwd','$degree1','$institute1','$board1','$fullmark1','$mark1','$division1','$degree2','$institute2','$board2','$fullmark2','$mark2','$division2','$degree3','$institute3','$board3','$fullmark3','$mark3','$division3','$address1','$district1','$locality','$state1','$pin1','$mobile','$email','$telephone','$address2','$district2','$city','$state2','$pin2')";

$result=mysql_query($query);
if($result)
	echo '<script type="text/javascript">alert("Your Registeration will be completed !");window.location=\'user.php\';</script>';

	
	?>