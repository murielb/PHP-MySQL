<?php
	file_put_contents('data/'.$_POST['title'].'.txt', $_POST['description']);
	
	// 여기까지 했을 때, 제출 버튼을 누르고 나면 하얀 화면이 보이니까 별로잖아..
	// 그래서 수정된 화면을 보여주게 하도록... 즉, 내가 설정한 주소로 사용자를 튕겨 버리기 위해 아래 코드를 작성해 주어야 해
	
	header('Location: /index.php?id='.$_POST['title'].'.txt');
?>