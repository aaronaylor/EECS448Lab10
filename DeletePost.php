<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "aaronaylor", "Fredonia1!", "aaronaylor");

if ($mysqli->connect_errno) 
{
die("Connect failed: " . $mysqli->connect_error);
}

$PostIds = $_POST['Checks'];

echo ("<p>Deleted the following post id's</p>");

for($x = 0; $x < count($PostIds); $x++) {
	
	$query = "DELETE FROM Posts WHERE post_id = '$PostIds[$x]'";

	if($mysqli->query($query) === TRUE)
	{
		echo $PostIds[$x];
		echo "<br>";
	}
}

$mysqli->close();

?>