<?php include "inc/header.php" ?>

<form method="post">
	<input type="text" name="first_name" placeholder="First Name" required>
	<input type="text" name="last_name" placeholder="Last Name" required>
	<input type="text" name="username" placeholder="Username" required>
	<input type="email" name="email" placeholder="Email" required>
	<input type="password" name="password" placeholder="Password" required>
	<input type="password" name="confirm_password" placeholder="First Holder" required>
	<input type="submit" name="register-submit" placeholder="Register Now" required>
</form>

<?php include "inc/foother.php"?>