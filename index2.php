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


$article = array(
	'title' => 'Welcom',
	'description' => 'Hello, Web'
);

$update_link = '';
$delete_link = '';
$author = '';

if(isset($_GET['id'])){
$filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT * FROM topic LEFT JOIN author ON topic.author_id = author.id WHERE topic.id={$filtered_id}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$article['title'] = htmlspecialchars($row['title']);
$article['description'] = htmlspecialchars($row['description']);
$article['name'] = htmlspecialchars($row['name']);

$update_link = '<a href="update2.php?id='.$_GET['id'].'">update</a>';
$delete_link = '
	<form action="process_delete2.php" method="post">
		<input type="hidden" name="id" value="'.$_GET['id'].'">
		<input type="submit" value="delete">
	</form>
';
	$author = "<p>by {$article['name']}</p>";
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>WEB</title>
</head>
<body>
	<h1><a href="index2.php">WEB</a></h1>
	<a href="author2.php">author</a>
	<ol>
		<?=$list?>
	</ol>
	<p><a href="create2.php">create</a></P>
	<?=$update_link?>
	<?=$delete_link?>
	<h2><?=$article['title']?></h2>
	<?=$article['description']?>
	<?=$author?>
</body>
</html>