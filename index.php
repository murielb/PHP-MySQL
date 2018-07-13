<?php  
	require_once('lib/print.php');
	require_once('view/top.php');
?>

	
	<?php if(isset($_GET['id'])){ ?> 
		<a href="modify.php?id=<?php echo $_GET['id']; ?>">수정</a> 
		
		<form action="delete_process.php" method="post">
			<input type="hidden" name="id" value="<?=$_GET['id']?>">
			<input type="submit" value="삭제">
		</form>
	<?php } ?>
	
	
	
	<h2>
		<?php 
			print_title();
		?>
	</h2>
	<p>
		<?php 
			print_description();
		?>
	</p>
	
<?php
	require('view/bottom.php');
?>