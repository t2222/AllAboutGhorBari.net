<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Please log in to continue to the website.</title>
	<link rel="stylesheet" type="text/css" href="styles/login_style.css">
    <link rel="stylesheet" type="text/css" href="styles/homestyle.css">
	<link rel="stylesheet" type="text/css" href="styles/footer-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php include 'includes/include_heading.php'?>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" required>
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

	<?php include('includes/include_footer.php') ?>
</body>
</html>