<?php
include ('connect.php');
session_start();
if (! empty($_SESSION['login_user']))
{

	?>
	    <br>
	    <a href='logout.php'><font color="brown">logout</font></a>

	   <?php
	}
	else
	{
	    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
	}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$mytitle=mysqli_real_escape_string($db,$_POST['title']);
	$mydesc=mysqli_real_escape_string($db,$_POST['description']);
	$mymand=mysqli_real_escape_string($db,$_POST['mandate']);
	$myfac=mysqli_real_escape_string($db,$_POST['faculty']);
	$myfaci=mysqli_real_escape_string($db,$_POST['facility']);
	$myequip=mysqli_real_escape_string($db,$_POST['equipment']);
	$mybudget=mysqli_real_escape_string($db,$_POST['budget']);
	if(empty($mytitle) ||empty($mydesc) || empty($mymand) || empty($myfac)|| empty($myfaci)|| empty($myequip)|| empty($mybudget) )
		echo "<font color = 'red' size='4'><center><u> You did not fill out the required fields.</u></center></font>";
	else
	{

	$query = mysqli_query($db, "INSERT INTO research (title,description,mandate,faculty,facility,equipment,budget)VALUES ('$mytitle','$mydesc','$mymand','$myfac','$myfaci','$myequip','$mybudget' )");


	if($query)
	{
		echo "<font size='6' color = blue><center> Successfully registered.!!</center></font>";
	}
	}


}



?>


<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center><font size = "8" color="white"><b>RESEARCH LOGIN</b></font><br></center>
<br>
<form action="research.php" method = "post">

<font size = "5" color="white">Title:</font><br>
<input type="text" name="title">
<br>
<font size = "5" color="white">Description:</font><br>
<input type="text" name="description">
<br>
<font size = "5" color="white">Mandate:</font><br>
<input type="text" name="mandate">
<font size = "5" color="white">Faculties:</font><br>
<input type="text" name="faculty"><br>
<font size = "5" color="white">Facilities:</font> <br>
<input type="text" name="facility"><br>
<font size = "5"color="white">Equipment</font><br>
<input type="text" name="equipment"><br><br>
<font size = "5" color="white">Budget</font><br>
<input type="text" name="budget"><br><br>

<center><input type="Submit" value="Submit">
<a href="main1.php"><input type="button" value="Home"
onclick="main1.php = this.value"></a></center><br><br>
</form>
