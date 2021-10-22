<?php 
include "inc/header.php"; 
?>

<?php
if(isset($_SESSION['email'])) : ?>
	
	<form method="POST">
		<h3> Create new post </h3>
		<textarea name="post_content" cols="60" rows="10" placeholder="Post content..."></textarea>
		<input type="submit" value="Post" name="submut"/>
	</form>

<?php else : ?>
	
	<div class="homepage">
		<h1>Welcome to My Social Network</h1>
		<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo distinctio voluptatem ipsa commodi possimus sapiente architecto! Harum perferendis in maiores quas eum saepe optio tempore nam. Vitae maiores inventore corporis?</p>

		<h2>Click <a href="login.php">here</a> to login!</h2>
		<img src="css/img/social.jpg" alt="">
	</div>

<?php endif; ?>

<?php include "inc/footer.php" ?>