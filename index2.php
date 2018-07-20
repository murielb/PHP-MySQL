<?php 
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
	// <li><a href=\"index.php?id=13\">MySQL</a></li> 이렇게 링크를 만들어주고 싶어..
	$list = $list."<li><a href=\"index2.php?id={$row['id']}\">{$row['title']}</a></li>"; // = 다음에 나오는 $list.을 빼니까 마지막 리스트 한개만 나오네..
}


$article = array(
	'title' => 'Welcom',
	'description' => 'Hello, Web'
);

if(isset($_GET['id'])){
$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$article['title'] = $row['title'];
$article['description'] = $row['description'];

// print_r($article);

// echo $sql;
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>WEN</title>
</head>
<body>
	<h1><a href="index2.php">WEB</a></h1>
	<ol>
		<?=$list?>
	</ol>
	<a href="create2.php">create</a>
	<h2><?=$article['title']?></h2>
	<?=$article['description']?>
</body>
</html>