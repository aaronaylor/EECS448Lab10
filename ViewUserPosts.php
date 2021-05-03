<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "aaronaylor", "Fredonia1!", "aaronaylor");

if ($mysqli->connect_errno) 
{
die("Connect failed: " . $mysqli->connect_error);
}

$UserId = $_POST["UserSelect"];

$query = "SELECT post_id, content FROM Posts WHERE author_id = '$UserId'";

if ($result = $mysqli->query($query))
{
	echo ("<h2>Post from " . $UserId . "</h2><br><table>");
	echo ("<tr><th>post_id</th><th>content</th></tr>");
	while($row = $result->fetch_assoc())
	{
		echo ("<tr><th>" . $row["post_id"] . "</th><th>" . $row["content"] . "</th></tr>");
	}
	echo ("</table>");
	$result->free();
}
else {
	echo("<p>ERROR</p>");
}

$mysqli->close();

?>