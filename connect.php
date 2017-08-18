<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "college_database";

// Create connection
$db = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$db) {
    die("Not Connected!....Try Again...." . mysqli_connect_error);
}
echo "<font color ='green'>Connected.....</font>";
?>
