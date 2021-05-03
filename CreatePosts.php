<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "aaronaylor", "Fredonia1!", "aaronaylor");

if ($mysqli->connect_errno) 
{
die("Connect failed: " . $mysqli->connect_error);
}

$UserId = $_POST['UserId'];
$textData = $_POST['textEntry'];

$query = "INSERT INTO Posts (content, author_id) VALUES('$textData','$UserId')";
$query2 = "SELECT user_id FROM User WHERE user_id = '$UserId'";
if ($textData != "" && $result = $mysqli->query($query2))
{
		if($result["user_id"] == $UserID && $mysqli->query($query))
		{
		echo("<p>Created post by User ID: $UserId</p><br><p>Post Text: $textData</p>");
		}
		else
		{
			echo("<p>Error in creating Post... User ID does not exist</p>")
		}
	
	$result->free();
}
else {
	echo("<p>Error in creating Post... Text field possibly empty.</p>");
}

$mysqli->close();

?>