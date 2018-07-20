<?php 
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
mysqli_query($conn, "INSERT INTO topic (title, description, created) VALUE ('MySQL', 'MySQL is...', NOW())");

$sql = "INSERt INTO topic (title, description, created) VALUES ('MySQL', 'MySQL is...', NOW())";

$result = mysqli_query($conn, $sql);
if($result === false){
	echo mysqli_error($conn);
}

?>