<?php
include ('connect.php');

session_start();
if (! empty($_SESSION['login_user']))
{

	?>
	    <br>
	    <a href='logout.php'><font color = 'brown'>logout</font></a>

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
	$myqualification=mysqli_real_escape_string($db,$_POST['qualification']);
	if(empty($myfname) || empty($mylname) || empty($mysex) || empty($myqualification) )
		echo "<font color = 'red' size='4'><center><u> You did not fill out the required fields.</u></center></font>";
	else
	{

	$query = mysqli_query($db, "INSERT INTO teacher (id,fname,lname,sex,qualification )VALUES (LAST_INSERT_ID(),'$myfname','$mylname','$mysex','$myqualification' )");

	if($query)
	{

		$last_id = mysqli_insert_id($db);
		echo "<font size='6' color = white><center> Successfuly registered as Teacher with ID $last_id..!!</center></font>";


	}

	}

}

?>



<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<center><font size = "8" color="white" ><b>TEACHER LOGIN</b></font><br></center>
<br>
<form action="teacher.php" method = "post">

<label><font size = "5" color="white">First name:</font></label><br>
<input type="text" name="fname">
<br>
<label><font size = "5" color="white">Last name:</font></label><br>
<input type="text" name="lname">
<br>
<label><font size = "5" color="white">Sex:<br>
<input type="radio" name="sex" value="male" checked> Male
<input type="radio" name="sex" value="female"> Female</font></label>
<br>
<label><font size = "5" color="white">Teacher Qualifications:</font><br></label>
<input type="text" name="qualification"><br><br>
<center><input type="submit" value="Submit">
<a href="main1.php"><input type="button" value="Home"
onclick="main1.php = this.value"></a></center><br><br>
</form>
