<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>function2</title>
</head>
<body>
	<h1>Function2</h1>
	<h2>Basic => 반복적으로 같은걸 써주는 재생의 의미가 있지</h2>
	<?php
			function basic(){ // 아무 의미없는 이름 basic 이라는 함수를 만들어 보는 중이야..
				print("Lorem ipsum doller...<br>");
				print("Lorem ipsum doller...<br>");
				// 생각해봐... basic(){} 안에 있는 내용이 엄청나게 많고, 또 이것을 홈페이지 군데군데 사용한다고 생각하면... basic 같은 관련된 이름을 붙인 함수로 묶어서 쉽게 가져다 쓰는게 훨씬 편할꺼잖아..  반대로 함수를 고쳐서 쓴다면... 여기 한군데서만 고치면 모두가 싹 바뀌는 거잖아... 이게 함수의 특징이야..!!
			}
			
			basic();
			basic();
	?>
	
	<h2>parameter(매개변수) &amp; argument(표현식) => 주어진 입력값(매개변수)에 따라 (표현식의 결과)값이 변하는 함수야</h2>
	<?php 
		function sum($left, $right){
			print($left+$right); // sum이라는 함수는 $left 와 $right값을 더한다... 그리고 출력(print)하는 2가지 기능으로 이루어져 있어... 그런데 이렇게 쓰면 함수가 제한적으로 사용하게 돼!! 반드시 그런건 아니지만... 함수의 활용성을 높이려면 하나의 함수에 하나의 기능이 들어가는게 좋아.
			print("<br>");
		}
		
		sum(2,4);
		sum(4,6);
	?>
	
	<h2>return => 결과값을 return하는 것으로 출력하는 print보다 훨씬 쓸모가 많아</h2>
	<?php 
	function sum2($left, $right){
		return $left+$right; // 아래에 뭐라뭐라 쓰여 있어도 함수는 return을 만나는 순간 거기서 종료되기 때문에 작동을 하지 않는다는 사실을 기억하기.. 또한 결국 sum2는 $left+$right가 되는거야!!
		// echo 블라블라~ 
	}
	print(sum2(2,4)); // return된 결과값을 출력한다
	file_put_contents('result.txt',sum2(2,4)); // return된 결과값을 result.txt에 저장한다
	// email('murielb@naver.com', sum2(2,4)); // return된 결과값을 메일로 보낸다 등등..
	?>
	
	
</body>
</html>