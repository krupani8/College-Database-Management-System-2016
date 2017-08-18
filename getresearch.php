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

?>
<center><font size = "8" color="white" ><b>Research Data</b></font></center><br>
<br>
<form action="getresearch.php" method="post">
<center>
<label><font size = "5" color="white" >Enter Research Title:</font></label><br>
<input type="text" name="title1"><br>

</center>
<br>
<center><input type="submit" name = "submit" value="Submit"></center>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$mytitle1=mysqli_real_escape_string($db,$_POST['title1']);
	$sql = "SELECT * FROM research WHERE title = '$mytitle1'";
	$result = $db->query($sql);
	echo "<br>";
	if ($result->num_rows > 0) {
		//echo "<br><table><tr><th>First name</th><th>Room No.</th><th>Name</th><th>Gender</th><th>Phone No.</th><th>Age</th><th>Address</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<center><font size = '5' color = white><tr><td>Research Title: ".$row["title"]."</td></tr><br>";
			echo "<tr><td>Description: ".$row["description"]."</td></tr><br>";

echo "<tr><td>Mandate: ".$row["mandate"]."</td></tr><br>";
echo "<tr><td>Faculties: ".$row["faculty"]."</td></tr><br>";
echo "<tr><td>Facilities: ".$row["facility"]."</td></tr><br>";
echo "<tr><td>Equipment: ".$row["equipment"]."</td></tr><br>";
echo "<tr><td>Budget: ".$row["budget"]."</td></tr><br><br></font></center>";


		}

	} else {
		echo "<center><font size = 6px color = white>Data not found</font></center>";
	}
	$db->close();
}
?>

<form>
<br>
<center>
<a href="main2.php"><input type="button" value="Home"
onclick="main2.php = this.value"></a></center><br>
</form>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
