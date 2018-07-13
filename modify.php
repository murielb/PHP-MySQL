<?php  
	require_once('lib/print.php');
	require_once('view/top.php');
?>
	
	<?php if(isset($_GET['id'])){ ?>
		<a href="modify.php?id=<?php echo $_GET['id']; ?>">수정</a>
	<?php } ?>
	<!-- 위의 <?php echo $_GET['id']; ?> 대신에 <?=$_GET['id']?>를 써도 같아.. 그리고 이걸 넣어줘야 주소에 id를 나타내주는(물고 들어가는) 효과가 있어 --> 
	
	<form action="modify_process.php" method="post"> <!-- form 안의 모든 내용들을 post 형식으로 받아온다는 거야 -->
		<input type="hidden" name="old_title" value="<?=$_GET['id']?>">
		<!-- hidden을 써서 안보이게 만들지만 값은 받아와야 파일명을 바꾸지 -->
		<p>
			<input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
		</p>
		<p>
			<textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
		</p>
		<p>
			<input type="submit">
		</p>
	</form>
	
<?php
	require('view/bottom.php');
?>