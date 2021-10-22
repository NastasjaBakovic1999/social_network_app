<?php include "inc/header.php" ?>

<?php
if(isset($_SESSION['email'])) : ?>
	
	<form method="POST">
		<h3> Create new post </h3>
		<textarea name="post_content" cols="60" rows="10" placeholder="Post content..."></textarea>
		<input type="submit" value="Post" name="submut"/>
	</form>

<?php else : ?>
	

<?php endif; ?>

<?php include "inc/footer.php" ?>