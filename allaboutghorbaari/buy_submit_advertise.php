<?php include 'includes/include_check_login_status.php'?>
<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Buy home</title>
    <link rel="stylesheet" type="text/css" href="styles/login_style.css">
    <link rel="stylesheet" type="text/css" href="styles/buy-style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php include 'includes/include_heading.php'?>
<?php include 'includes/include_navbar.php'?>

<body>
<div class="header">
		<h2>Submit your advertise</h2>
	</div>
	
	<form method="post" action="buy_submit_advertise.php" >

		<div class="input-group">
			<label>Your name</label>
			<input type="text" name="name" required>
        </div>
        
		<div class="input-group">
			<label>House type</label>
			<input type="text" name="house-type" required>
        </div>
        
        <div class="input-group">
			<label>Price</label>
			<input type="number" name="price" required>
        </div>
        
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" required>
        </div>
        
		<div class="input-group">
			<button type="submit" class="btn" name="finished_advertise_btn">Submit</button>
		</div>
		<h3>
			For uploading image please contact <a href="profile-card.html">admin</a>.
        </h3>
    </form>
    

</body>
    
    <?php include 'includes/include_footer.php'?>
</html>