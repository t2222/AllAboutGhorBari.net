<?php include('includes/functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="styles/login_style.css">
</head>

				<script>
					function getRndInteger() {
						var min = 210001012011;
						var max = 99999999999999999;
						var r = Math.floor(Math.random() * (max - min + 1) ) + min;
						document.getElementById("demo").value = r;
					}
				</script>

				
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Random number</label>
			<input type="integer" name="random_num" value="Random number" id = "demo">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn" onclick="getRndInteger()">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>