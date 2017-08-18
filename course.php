<?php
include ('connect.php');

session_start();
if (! empty($_SESSION['login_user']))
{

	?>
	    <br>
	    <a href='logout.php'><font color = 'white'>logout</font></a>

	   <?php
	}
	else
	{
	    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
	}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$coursename=mysqli_real_escape_string($db,$_POST['cname']);
	$courseoutcome=mysqli_real_escape_string($db,$_POST['coutcome']);
	$courseno=mysqli_real_escape_string($db,$_POST['cno']);
	$noofcredits=mysqli_real_escape_string($db,$_POST['nocredits']);

	if(empty($coursename) || empty($courseoutcome) || empty($courseno)|| empty($noofcredits) )
		echo "<font color = 'red' size='4'><center><u> You did not fill out the required fields.</u></center></font>";
	else
	{

	$query = mysqli_query($db, "INSERT INTO course (cname,coutcome,cno,nocredits)VALUES ('$coursename','$courseoutcome','$courseno','$noofcredits')");

	if($query)
	{
		$last_id = mysqli_insert_id($db);
		echo "<font size='6' color = blue><center> Course registered with ID $last_id.!!</center></font>";
	}



}

}

?>


<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center><font size = "8" color="white"><b>COURSE ENTRY</b></font><br></center>
<br>
<form action="course.php" method = "post">

<font size = "5" color="white">Course no:</font><br>
<input type="text" name="cno">
<br>
<font size = "5" color="white">Course name:</font><br>
<input type="text" name="cname">
<br>
<font size = "5" color="white">Course outcome:</font><br>
<input type="text" name="coutcome"><br>
<font size = "5" color="white">No of Credits: </font><br>
<input type="text" name="nocredits"><br>
<br>
<center><input type="Submit" value="Submit">
<a href="main1.php"><input type="button" value="Home"
onclick="main1.php = this.value"></a></center><br><br>
</form>
