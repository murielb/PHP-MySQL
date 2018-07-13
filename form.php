<?php
	// echo "<p>Title: ".$_GET['title']."</p>";
	// echo "<p>Description: ".$_GET['description']."</p>";
	
	// 위의 내용은 그때그때 보여주고, 입력된 정보가 바뀌면 그 전 내용이 사라지니...
	// 결과값을 파일에 저장하는 방법으로 변경해줘야 해
	
	file_put_contents('data/'.$_POST['title'].'.txt', $_POST['description']);
	// $_GET['description'] 내용을 data/$_GET['title'] 제목의 텍스트 파일에 저장하라는 뜻이야..
	
	// 그런데 문제는 url(파라미터)에 내용이 다 나타나게 되어 주소를 복사해서 공유하면 파일이 저절로 또 생기는 등 여러 문제가 생겨.. 또한 보안을 위해서라도 url(파라미터)을 통하지 않고, 서버에 은밀하게 전송을 해야 할 필요가 있어!! 그래서 GET이 아닌 POST를 사용해줘.. 그러면 url이 바뀌지 않게 돼!!
	
	
?>