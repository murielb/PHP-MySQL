<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<h1>Array</h1>
	<?php
	$coworkers = array('egoing', 'leezche', 'duru', 'taco'); 
	//array를 수납상자라고 생각해봐.. 그럼 이제 꺼내는 방법을 알아야 겠지...
	echo $coworkers[1].'<br>';
	echo $coworkers[3].'<br>';
	// 그 다음은 array에 몇개가 들어있는가를 알아볼까?
	var_dump(count($coworkers)); // 여기서 var-dump는 형식을 알려주는 거야.. ()안에는 문자의 수를 알려주고..
	//그냥 count()로 하면 숫자로 알려줘~~
	array_unshift($coworkers, 'muriel'); //배열 앞에 추가하기
	array_push($coworkers, 25); // 배열 끝에 추가하기
	var_dump($coworkers);
	?>
</body>
</html>