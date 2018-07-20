<?php 
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');


echo "<h1>==single row==</h1>";
$sql = "SELECT * FROM topic WHERE id=13";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h2>'.$row['title'].'</h2>';
echo '<p>'.$row['description'].'<p>';


echo "<h1>==multiful row==</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_array($result)){
echo '<h2>'.$row['title'].'</h2>';
echo '<p>'.$row['description'].'<p>';
}



?>