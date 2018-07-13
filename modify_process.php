<?php
	rename("data/".$_POST['old_title'],'data/'.$_POST['title'].".txt");
	file_put_contents('data/'.$_POST['title'].'.txt', $_POST['description']);
	header('Location: /index.php?id='.$_POST['title'].'.txt');
?>