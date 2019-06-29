<?php include 'includes/include_check_login_status.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>login status</title>
	<link rel="stylesheet" type="text/css" href="styles/login_style.css">
	<link rel="stylesheet" type="text/css" href="styles/homestyle.css">
	<link rel="stylesheet" type="text/css" href="styles/footer-style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php include('includes/include_heading.php') ?>
<body>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
	<a href = "home.php"><p style="text-align: center; background-color: orange;">Hey, you are logged in! Please click here to continue</p></a>
	<?php include('includes/include_footer.php') ?>
</body>

</html>