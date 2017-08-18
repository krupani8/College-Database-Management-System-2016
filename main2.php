<?php

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
	?>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center><font size = "8" color="white"><b>COLLEGE DATABASE MANAGEMENT SYSTEM</b></font><br></center>
<br>
<form>
<center><h2><font color="white"click to fetch data:</h2></center><br>
<p>
<center>
<select name="specify" onChange="window.location.href=this.value">
<option value="">Select...</option>
  <option value="getteacher.php">Teacher</option>
  <option value="getstudent.php">Student</option>
   <option value="getdepartment.php">Department</option>
   <option value="getcourse.php">Course</option>
    <option value="getresearch.php">Research</option>
     <option value="getemployee.php">Non Teacher</option>

</select>
</center>
</p>
</form>
<form>
<br>
<center><a href="middle.php"><input type="button" value="Go Home"
onclick="middle.php = this.value"></a></center><br>
</form>
</html>
