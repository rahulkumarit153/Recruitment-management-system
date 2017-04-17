<!doctype html>
<html>
<head>
<script language="javascript" type="text/javascript" src="job.js">
</script>
<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body onLoad="abc()">
<?php 
$pwwd=$news=" ";

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);
$nm=$_POST['fnm'].' '.$_POST['mnm'].' '.$_POST['lnm'];
$uid=$_POST['uid'];
$pwd1=$_POST['pwd'];
$pwd2=$_POST['rpwd'];
		
$dob=$_POST['dy'].'/'.$_POST['mnth'].'/'.$_POST['yr'];
$gen=$_POST['ge1'];

if($pwd1==$pwd2)
		{
			$pwd=$pwd1;
			$sql="Insert into login(name,userid,password,dob,gender)values('$nm','$uid','$pwd','$dob','$gen')";
		}
		else
			$pwwd="Password mismatch!";
			
$result=mysql_query($sql);

if($result)
	$news="you are Registered to this site";
?>


<form name="f1" method="post" action="login1.php">
<div id="n1">
<img id="im1" src="l1.gif">
<h1 id="hh1">JobsDonor.com</h1>
<h2 id="hh2">Affliated by Government of India</h2>
<input id="in1" name="dat">
<input id="in2" name="tm">
</div>
<div id="n2">
<img  src="solar.jpg" class="first">
<img src="seagulls.jpg" alt="">
<img src="sli-2.jpg" alt="">
<img src="slider06.jpg" alt="">
<img src="slider.jpg" alt="">
<img src="slider-image9.jpg" alt="">
<img src="im12.jpg" alt="">
<img src="im13.jpg" alt="">
<img src="im14.jpg" alt="">
<img src="im15.jpg" alt="">
<img src="im16.jpg" alt="">
<img src="im17.jpg" alt="">
<img src="im18.jpg" alt="">
<img src="im19.jpg" alt="">
<img src="im20.jpg" alt="">
<img src="im21.jpg" alt="">
<img src="im22.jpg" alt="">
<img src="im23.jpg" alt="">
<img src="im24.jpg" alt="">
<img src="im25.jpg" alt="">
<img src="im26.jpg" alt="">
<img src="im28.jpg" alt="">
<img src="im29.jpg" alt="">

</div>
<div id="n3">
<div id="n5">
Login
</div>
<p id="pp14">User Name</p><input id="in11" name="n1">
<p id="pp15">Password</p><input id="in12"  type="password" name="n2">
<button id="bb3">Sign In</button>
<p id="pp16"><a href="#">Forgot Password?</a></p>
<p id="pp17"><a href="#">Change Password?</a></p>
</form>
<form name="f2" method="post" action="<?php
echo $PHP_SELF;
?> ">
>
<div id="n6">
Register
</div>
<input id="in4" name="fnm" placeholder="&nbsp;First name" autofocus /> 
<input id="in9" name="mnm" placeholder="&nbsp;Middle name" autofocus />
<input id="in5" name="lnm" placeholder="&nbsp;Last name" autofocus />
<input id="in6" name="uid" placeholder="&nbsp;Enter email or User Id" autofocus />
<input id="in7" name="pwd" type="password" placeholder="&nbsp;Enter Password" autofocus />	
<input id="in8" name="rpwd" type="password" placeholder="&nbsp;Re-Enter password" autofocus />
<span class="pwdd"><?php echo $pwwd ?></span>	
<p id="hh3">Birthday:-</p>
<select name="mnth" id="s1">
<option>&nbsp;Month</option>
<option>Jan</option>
<option>Feb</option>
<option>Mar</option>
<option>Apr</option>
<option>May</option>
<option>Jun</option>
<option>Jul</option>
<option>Aug</option>
<option>Sep</option>
<option>Oct</option>
<option>Nov</option>
<option>Dec</option>
</select>
<select name="dy" id="s2">
<option>&nbsp;Day</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
</select>
<select name="yr" id="s3">
<option>&nbsp;Year</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
<option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
<option>2006</option>
<option>2005</option>
<option>2004</option>
<option>2003</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>
<option>1997</option>
<option>1996</option>
<option>1995</option>
<option>1994</option>
<option>1993</option>
<option>1992</option>
<option>1991</option>
<option>1990</option>
<option>1989</option>
<option>1988</option>
<option>1987</option>
<option>1986</option>
<option>1985</option>
<option>1984</option>
<option>1983</option>
<option>1982</option>
<option>1981</option>
<option>1980</option>
<option>1979</option>
<option>1979</option>
<option>1978</option>
<option>1977</option>
<option>1976</option>
<option>1975</option>
<option>1974</option>
<option>1973</option>
<option>1972</option>
<option>1971</option>
<option>1970</option>
<option>1969</option>
<option>1968</option>
<option>1967</option>
<option>1966</option>
<option>1965</option>
<option>1964</option>
<option>1963</option>
<option>1962</option>
<option>1961</option>
<option>1960</option>
<option>1959</option>
</select>
<p id="pp12">Gender :-</p>
<p id="pp13"><input type="radio" name="ge1" >Female
<input type="radio" name="ge1" >Male
<input type="radio" name="ge1" >Other
</p>
<p id="pp11">Mobile :-</p>
<input id="in13">
<button id="bb1">Sign Up</button><?php echo $news ?>
<button id="bb2">Cancel</button>

</div>

</form>
</body>
</html>
