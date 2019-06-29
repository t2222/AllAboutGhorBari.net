<?php include 'includes/include_check_login_status.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Buy home</title>
    <link rel="stylesheet" type="text/css" href="styles/buy-style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style> 
        input[type=text] {
        width: 130px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchicon.png');
        background-position: 10px 10px; 
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
        width: 100%;
        }
    </style>

</head>
<?php include 'includes/include_heading.php'?>
<?php include 'includes/include_navbar.php'?>
<?php include 'includes/db.php'?>

<br><br>
<body>
<form method="post" action="buy_search.php">
        <div class="input-group">
	        <label>Search keyword</label>
			<input type="text" name="searched_contents" placeholder="Search..">
        </div>
        
		<div class="input-group">
			<button type="submit" class="btn" name="search_submit">Search</button>
        </div>
</form>
        
<br><br>

<?php
if (isset($_POST['search_submit'])) {
    $search = $_POST['searched_contents'];

    $query = "SELECT * FROM buy_houses WHERE types LIKE '%$search%' ";
    $search_query = mysqli_query($connection,$query);
    if (!$search_query) {
        die("Query failed!!!" . mysqli_error($connection));
    }
    $count = mysqli_num_rows($search_query);
    if ($count == 0) {
        echo "No result!";
    }
    else {
        echo "found.";
        while ($row = mysqli_fetch_assoc($search_query)) {
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
  <p><button><a href = buy_submit_order.php> Buy it! </a></button></p>
  <br><br>
</div>

        <?php } ?>
    <?php } ?>  
        <?php } ?>


<?php include('includes/include_footer.php') ?>
</body>
</html>