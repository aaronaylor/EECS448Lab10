<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "aaronaylor", "Fredonia1!", "aaronaylor");

if ($mysqli->connect_errno) 
{
die("Connect failed: " . $mysqli->connect_error);
}

$UserId = $_POST['UserId'];

$query = "INSERT INTO User (user_id) VALUES('$UserId')";

if ($UserId != "" && $mysqli->query($query) === TRUE)
{
	echo("<p>Created user with User ID: $UserId</p>");
}
else {
	echo("<p>Error in creating User.</p>");
}

$mysqli->close();

?>