<?php 
function print_title(){
	if(isset($_GET['id'])){
		echo substr_replace($_GET['id'],"",-4); //-4를 쓰면 끝에서 4글자 뺀다는 거고, 4를 쓰면 앞에서부터 4글자만 보여주겠다는거야
	} else {
		echo "Welcome";
	}
}
function print_list(){
	$list = scandir('./data'); 
	//scandir은 그 폴더에 소속된 파일들의 목록을 배열로 불러올 수 있는 함수야!!
	// 디렉토리 불러올때, 점이 하나(.)이면 현재 디렉토리이고, 점이 두개(..)이면 상위 디렉토리를 뜻 해
	// var_dump($list); 새로운 함수등을 사용하면... 그 형식이 어떤거지 확인하기 위해 var_dump로 확인하기
	 $i=0;
	 while($i<count($list)){
		if($list[$i] != '.'){ 
			if($list[$i] != '..'){
			// $list[$i]값이 . 이나 .. 이 아니면...  아래 표현식을 진행해라!! 사실$i=2;로 하면 더 쉽지만.. scandir의 [0]에 . 과 [1]에 .. 가 되리라는 확신이 없어..
			echo "<li><a href=\"index.php?id=$list[$i]\">".substr_replace($list[$i],"",-4)."</a></li>";
			}
		}
		 $i=$i+1;
	 }
}
function print_description(){
	if(isset($_GET['id'])){
			echo file_get_contents("data/".$_GET['id']); //현실에서는 이런식으로 코딩하는건 아니야... 보안이 해결되지 않거든... 그러나 교육적으로는 꽤 좋아.. 이해하기가 좋거던...
			} else {
				$welcome = "Web is blabla... But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?";
				echo $welcome;
			}
}
?>