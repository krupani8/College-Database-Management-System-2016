<?php
include ('connect.php');
session_start();
if (! empty($_SESSION['login_user']))
{

	?>
	    <br>
	    <a href='logout.php'><font color = "brown">logout</font></a>

	   <?php
	}
	else
	{
	    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
	}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$myfname=mysqli_real_escape_string($db,$_POST['fname']);
	$mylname=mysqli_real_escape_string($db,$_POST['lname']);
	$mysex=mysqli_real_escape_string($db,$_POST['sex']);
	$myphnumber=mysqli_real_escape_string($db,$_POST['phnumber']);
	$myage=mysqli_real_escape_string($db,$_POST['age']);
	$myaddress=mysqli_real_escape_string($db,$_POST['address']);
	if(empty($myfname) || empty($mylname) || empty($mysex)|| empty($myphnumber)|| empty($myaddress)|| empty($myage) )
		echo "<font color = 'red' size='4'><center><u> You did not fill out the required fields.</u></center></font>";
	else
	{


	$query = mysqli_query($db, "INSERT INTO student (fname,lname,sex,phnumber,age,address)VALUES ('$myfname','$mylname','$mysex','$myphnumber','$myage','$myaddress' )");

	if($query)
	{
		$last_id = mysqli_insert_id($db);
		echo "<font size='6' color = white><center> Successfully registered as a Student with ID $last_id.!!</center></font>";
	}

	}

}



?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<center><font size = "8" color="white"><b>STUDENT LOGIN</b></font><br></center>
<br>
<form action="student.php" method = "post">

<font size = "5" color="white">First name:</font><br>
<input type="text" name="fname">
<br>
<font size = "5" color="white">Last name:</font><br>
<input type="text" name="lname">
<br>
<font size = "5" color="white">Sex:<br>
<input type="radio" name="sex" value="male" checked> Male
<input type="radio" name="sex" value="female"> Female<font size = "5">
<br>
<font size = "5" color="white">Phone Number:</font><br>
<input type="text" name="phnumber"><br>
<font size = "5" color="white">Age:</font> <br>
<input type="text" name="age"><br>
<font size = "5" color="white">Address</font><br>
<input type="text" name="address"><br><br>
<center><input type="Submit" value="Submit">
<a href="main1.php"><input type="button" value="Home"
onclick="main1.php = this.value"></a></center><br><br>
</form>
