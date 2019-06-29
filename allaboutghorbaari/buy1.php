<?php include 'includes/include_check_login_status.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Buy home</title>
    <link rel="stylesheet" type="text/css" href="styles/buy-style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php include 'includes/include_heading.php'?>
<?php include 'includes/include_navbar.php'?>
<?php include 'includes/db.php'?>

    <h2 style="text-align:center">Available homes</h2>
    <?php


            $query = "SELECT * FROM buy_houses";
            $select_all_posts_query = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                $buy_id = $row['buy_id'];
                $owner_name = $row['owner_name'];
                $price = $row['price'];
                $type = $row['types'];
                $address = $row['address'];
                $image_id = $row['image_id'];
                $latitude = $row['latitude'];
                $longitude = $row['longitude'];
            ?>
    <div class="card">
      
      <img src="images/<?php echo $image_id; ?>.jpg" alt="not loaded" style="width:100%">
      <h4>ID: <?php echo $buy_id; ?></h4>
      <h3>Owner: <?php echo $owner_name; ?></h3>
      <p class="price">Price: <?php echo $price; ?></p>
      <h2>Type: <?php echo $type; ?> </h2>
      <h3><?php echo $address; ?></h3>
      <p><button style="background-color: yellow;"><a href = maps/<?php echo $image_id; ?>map.html target="_blank" name="map_btn">See it on map</a></button></p>
      <p><button><a href = buy_submit_order.php target="_blank"> Buy it! </a></button></p>
      <br><br>
    </div>

            <?php } ?>
        
</body>
    
    <h2 style="text-align: center">Pages:</h2>
    <?php include 'includes/include_pagination.php'?>
    <?php include 'includes/include_footer.php'?>
</html>