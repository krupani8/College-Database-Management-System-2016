<?php
include ('connect.php');

session_start();

if (! empty($_SESSION['login_user']))
{

	?>
	    <br>
	    <a href='logout.php'><font color='brown'>logout</font></a>

	   <?php
	}
	else
	{
	    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
	}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$empid=mysqli_real_escape_string($db,$_POST['eid']);
	$empname=mysqli_real_escape_string($db,$_POST['ename']);
	$empdept=mysqli_real_escape_string($db,$_POST['edept']);
	$empdesg=mysqli_real_escape_string($db,$_POST['edesg']);

	if(empty($empid) || empty($empname) || empty($empdept) || empty($empdesg) )
		echo "<font color = 'red' size='4'><center><u> You did not fill out the required fields.</u></center></font>";
	else
	{
	$query = mysqli_query($db, "INSERT INTO employee (eid,ename,edept,edesg)VALUES ('$empid','$empname','$empdept','$empdesg')");

	if($query)
	{
		echo "<font size='6' color = blue ><center> Successfully registered under $empdept department!!</center></font>";
	}


	}
}



?>


<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center><font size = "8" color="white"><b>EMPLOYEE LOGIN</b></font><br></center>
<br><form action="employee.php" method = "post">

<font size = "5" color="white">Employee id:</font><br>
<input type="text" name="eid">
<br>
<font size = "5" color="white">Employee name:</font><br>
<input type="text" name="ename">
<br>

<font size = "5" color="white">Department:</font> <br>
<input type="text" name="edept"><br>
<br>
<font size = "5" color="white">Designation:</font> <br>
<input type="text" name="edesg"><br>
<br>

<center><input type="Submit" value="Submit">
<a href="main1.php"><input type="button" value="Home"
onclick="main1.php = this.value"></a><br><br></center>
</form>
