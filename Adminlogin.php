<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style>

#n1
{
	position:absolute;
	left:400px;
	top:200px;
	width:510px;
	height:250px;
	background:#39C;
	border:10px;
	border-style:solid;
	border-color:#003;
}
#im1
{
	position:absolute;
	left:0px;
	top:30px;
	width:180px;
	height:200px;
	}
#in1
{
	position:absolute;
	left:210px;
	top:25px;
	width:250px;
	height:40px;
	font-size:25px;
	font-weight:bold
	}
#in2
{
	position:absolute;
	left:210px;
	top:90px;
	width:250px;
	height:40px;
	font-size:25px;
	font-weight:bold
	}
#b1
{
	position:absolute;
	left:210px;
	top:170px;
	width:130px;
	height:50px;
	font-size:25px;
	font-weight:bold;
	background:#C09;
	color:#FC0;
	border-radius:15px 15px 15px 15px;
	
	}
#b2
{
	position:absolute;
	left:340px;
	top:170px;
	width:130px;
	height:50px;
	font-size:25px;
	font-weight:bold;
	background:#C09;
	color:#FC0;
	border-radius:15px 15px 15px 15px;
	}
.error1
	{
		color:#C00;
		position:absolute;
		left:205px;
		top:71px;
	}
.error2
	{
		color:#C00;
		position:absolute;
		left:205px;
		top:139px;
	}


</style>
</head>
<body>
<?php
//variables and set to emp;ty values.

$emailErr=$pwdErr="";$uid;$pwd;

if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(empty($_POST["n1"]))
			{
				$emailErr="  userid is Required ";
			}
		else
			{
				$uid=test_input($_POST["n1"]);
				
			}
		if(empty($_POST["n2"]))
			{
				$pwdErr="Password is Required";
			}
		else
			{
				$pwd=test_input($_POST["n2"]);
			}
		
	}
	
	function test_Input($data)
		{
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return($data);
		}
		
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);

$sql="Select * from admin where uid='$uid' and pwd='$pwd' ";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
				if($rows==0)
				{	
					echo "Incorrect userid or password";
								}
				else
					{
						while($row=mysql_fetch_array())
						{
							$nm=$row['name'];
						}
					header('location:http://localhost/project/rahul/Admin.php');
					
					}


?>
<div id="n1">
<img src="Locker-blue.ico" id="im1">
<form name="f1" method="post" action="
<?php
echo htmlspecialchars($_SERVER['PHP_SELF']);
?> ">
<input id="in1" placeholder=" ENTER USERID" type="text" name="n1">
<span class="error1">*<?php echo $emailErr;?></span><br><br>
<input id="in2" placeholder=" ENTER PASSWORD" type="password" name="n2">
<span class="error2">*<?php echo $pwdErr;?></span><br><br>
<button id="b1">Login</button>
</form>
<button id="b2">Logout</button>
<input type="text" name="nm" value="<?php echo $nm; ?>"
</div>
</body>
</html>
