<?php 
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
	$escaped_title = htmlspecialchars($row['title']);
	// <li><a href=\"index.php?id=13\">MySQL</a></li> 이렇게 링크를 만들어주고 싶어..
	$list = $list."<li><a href=\"index2.php?id={$row['id']}\">{$escaped_title}</a></li>"; 
	// = 다음에 나오는 $list.을 빼니까 마지막 리스트 한개만 나오네..
}

$sql = "select * from author";
$result = mysqli_query($conn, $sql);
$select_form = '<select name="author_id">';
while($row = mysqli_fetch_array($result)){
	$select_form .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
	
}
$select_form = $select_form.'</select>';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>WEB</title>
</head>
<body>
	<h1><a href="index2.php">WEB</a></h1>
	<ol>
		<?=$list?>
	</ol>
	<a href="create2.php">create</a>
	<form action="process_create2.php" method="post">
		<p><input type="text" name="title" placeholder="Title"></p>
		<p><textarea name="description" placeholder="Description"></textarea></p>
		<?=$select_form?>
		<p><input type="submit"></p>
	</form>
</body>
</html>