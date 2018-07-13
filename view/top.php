<?php  
	require_once('lib/print.php');
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php 
			print_title();
		?>
	</title>
</head>
<body>
	<h1><a href="index.php">WEB</a></h1>
	
	<ol>
		<?php 
			print_list();
		?>
	</ol>
	<a href="create.php">글쓰기</a>
	
	<!-- 이런식으로 싹뚝싹뚝 잘라서 만들 수가 있는거구나.. 
		그런데 그냥 이렇게 가져오면 HTML안에 쓰여진 PHP가 어디서 온건지 모르니까... 위에다가 경로를 명시해 줘야해!!
		
		그런데 그렇게 하면... Index.php 파일에서 
		require('lib/print.php'); 할 때 한번 읽고,
		require('view/top.php'); 할 때 두번째 읽게 되기 때문에
		
		print_title() 함수가 중복(redeclare)으로 설정되었다고 에러문구가 나와!!

		그래서 require_once로 쓰는 거야.. 이건 한번 읽은 내용이 다음에 또 나올 때는 무시하라는 뜻이거든..
	
		대체적으로 _once를 붙여서 쓰는게 정신건강에 좋아ㅎㅎ
		
		내가 방금 생각해 낸 건데... 만약에...
		
		index.php파일에서 require('lib/print.php'); 를 지우고 곧바로 require('view/top.php'); 로 오게끔 하면 오자마자 require('lib/print.php'); 를 읽게 되는 셈이니까... _once 없이도 작동을 하더라고~~ ㅎㅎ 
		
		
	-->