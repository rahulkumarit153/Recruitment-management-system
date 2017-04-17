<!doctype html>
<html>
<head>
<script language="javascript" type="text/javascript" src="job.js">
</script>
<link rel="stylesheet" type="text/css" href="login.css">
	<title></title>
      <link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
	  <script src="themes/1/js-image-slider.js" type="text/javascript"></script>
      <style>
.error1
	{
		color:#C00;
		position:absolute;
		left:0px;
		top:60px;
	}
.error2
	{
		color:#C00;
		position:absolute;
		left:0px;
		top:110px;
	}

</style>		
</head>

<body onLoad="abc()">

<form name="f1" method="post" action="First.php">
<?php
$emailErr=$pwdErr=" ";
if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(empty($_POST["n1"]))
			{
				$emailErr=" userid is Required ";
			}
		if(empty($_POST["n2"]))
			{
				$pwdErr="Password Is Required";
			}
		
	}
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="qwerty";
$mysql_database="ris";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password) or die("Connection Is Fail");
mysql_select_db($mysql_database,$bd);

$uid=$_POST['n1'];
$pwd=$_POST['n2'];
$sql="Select * from login where userid='$uid' and password='$pwd' ";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
				if($rows==0)
				{	
					echo "Incorrect userid or password";
								}
				else
					{
					header('location:http://localhost/project/rahul/user.html');
					
					}


?>

<div id="n1">
<img id="im1" src="l1.gif">
<h1 id="hh1">JobsDonor.com</h1>
<h2 id="hh2">Affliated by Government of India</h2>
<input id="in1" name="dat">
<input id="in2" name="tm">
</div>
	<div class="container">		
    <div id="sliderFrame">
        <div id="slider">            
            <img src="im13.jpg" alt="">
            <img src="im18.jpg" alt="">
            <img src="im19.jpg" alt="">
            <img src="image/1.jpg">
            <img src="image/2.jpg">
            <img src="image/3.jpg">
            <img src="image/5.jpg">
            <ismg src="image/6.jpg">
            <img src="image/7.jpg">
            <img src="image/8.jpg">
            <img src="image/10.jpg">
            <img src="image/11.jpg">
            <img src="image/12.jpg">
            <img src="image/13.jpg">
            <img src="image/14.jpg">
            <img src="image/15.jpg">
            <img src="image/16.jpg">
            <img src="image/19.jpg">
            <img src="image/20.jpg">
            <img src="image/21.jpg">
            

         </div>
					
	</div>
		</div>
 <div id="n2">
 <p id="pp18"><a href="NewsPaper.html">1.View News Paper</a></p>
 <p id="pp19"><a href="#">2.View Template</a></p>
 </div>


<div id="n3">
<div id="n5">
Login
</div>
<p id="pp14">User Name</p><input id="in11" name="n1"><span class="error1">*<?php echo $emailErr;?></span><br><br>

<p id="pp15">Password</p><input id="in12"  type="password" name="n2"><span class="error2">*<?php echo $pwdErr;?></span><br><br>

<button id="bb3">Sign In</button>
<p id="pp16"><a href="frg.html">Forgot Password?</a></p>
<p id="pp17"><a href="cng.html">Change Password?</a></p>
</form>
<form name="f2" method="post" action="login33.php">
<div id="n6">
Register
</div>
<input id="in4" name="fnm" placeholder="&nbsp;First name" autofocus />
<input id="in9" name="mnm" placeholder="&nbsp;Middle name" autofocus />
<input id="in5" name="lnm" placeholder="&nbsp;Last name" autofocus />
<input id="in6" name="uid" placeholder="&nbsp;Enter email or User Id" autofocus />
<input id="in7" name="pwd" type="password" placeholder="&nbsp;Enter Password" autofocus />	
<input id="in8" name="rpwd" type="password" placeholder="&nbsp;Re-Enter password" autofocus />	
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
<p id="pp13"><input type="radio" name="ge1"  value="Female">Female
<input type="radio" name="ge1"  value="Male">Male
<input type="radio" name="ge1" value="Transgender" >Transgender
</p>
<p id="pp11">Mobile :-</p>
<input id="in13"n type="text" name="mob">
<button id="bb1">Sign Up</button>
<button id="bb2">Cancel</button>

</div>
</form>


</body>
</html>
