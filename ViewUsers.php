<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$mysqli = new mysqli("mysql.eecs.ku.edu", "aaronaylor", "Fredonia1!", "aaronaylor");

if ($mysqli->connect_errno) 
{
die("Connect failed: " . $mysqli->connect_error);
}

$query = "SELECT user_id FROM User";

if ($result = $mysqli->query($query))
{
	echo ("<h2>Current Users</h2><br><table>");
	echo ("<tr><th>user_id</th></tr>");
	while($row = $result->fetch_assoc())
	{
		echo ("<tr><th>" . $row["user_id"] . "</th></tr>");
	}
	echo ("</table>");
	$result->free();
}
else {
	echo("<p>ERROR</p>");
}

$mysqli->close();

?>