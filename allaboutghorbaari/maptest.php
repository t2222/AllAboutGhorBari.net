<?php 
	include('includes/functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buy home</title>
    <link rel="stylesheet" type="text/css" href="styles/buy-style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<?php include 'includes/include_heading.php'?>
<?php include 'includes/include_navbar.php'?>
<?php include 'includes/db.php'?>


<!DOCTYPE html>
<html>
  <head>

  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          <?php $lat = $_SESSION['lat']; $long = $_SESSION['long']; ?>
          
          center: {lat: parseFloat(<?php echo $lat; ?>), lng: parseFloat(<?php echo $long; ?>)},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTPAaf2WPMmS58GL5WZjiX1SVkZYBzu5U&callback=initMap"
    async defer></script>
  </body>
</html>