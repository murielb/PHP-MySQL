<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1><a href="index.php">WEB</a></h1>
	
	<ol>
	<?php 
	 $list = scandir('./data');
	 
	 $i=0;
	 while($i<count($list)){
		if($list[$i] != '.'){ 
			if($list[$i] != '..'){
			// echo substr("\"<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>/n\"",0,-4);
			echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
			}
		}
		 $i=$i+1;
	 }
	 
	 /*
	 echo "<li>$list[0]</li>/n"; // 여기서 /n은 줄바꿈을 하라는 뜻이야..
	 echo "<li>$list[1]</li>/n";
	 echo "<li>$list[2]</li>/n";
	 echo "<li>$list[3]</li>/n";
	 echo "<li>$list[4]</li>/n";
	 echo "<li>$list[5]</li>/n";
	 */
	
	?>
<!--	<li><a href="index.php?id=HTML">HTML</a></li>
		<li><a href="index.php?id=CSS">CSS</a></li>
		<li><a href="index.php?id=JavaScript">JavaScript</a></li>
		<li><a href="index.php?id=PHP">PHP</a></li> -->
	</ol>
	<h2>
		<?php 
		if(isset($_GET['id'])){
			echo $_GET['id'];
			} else {
				echo "Welcome";
			};
		?>
	</h2>
	<p>
		<?php 
		if(isset($_GET['id'])){
			echo file_get_contents("data/".$_GET['id']/*.".txt"*/);
			} else {
				$welcome = "Web is blabla... But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?";
				echo $welcome;
			}
		?>
	</p>
	
	

</body>
</html>