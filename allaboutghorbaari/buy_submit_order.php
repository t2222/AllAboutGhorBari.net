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
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


</style>

</head>

<?php include 'includes/include_heading.php'?>
<?php include 'includes/include_navbar.php'?>
<?php include 'includes/db.php'?>

<body>
<h3 style = "text-align: center;">Are you sure you want to buy this? Please insert the ID no of your desired house.<br>
This is to prove that you are not a robot.</h3>
<br><br>
<form action="buy_submit_order.php" method="post">

<div style = "text-align: center;">
<label>ID</label>
<input name = 'id_no' id="numb">
<p id="demo"></p>
</div>

<br><br>

<div style = "text-align: center;">
<button type = "submit" name = "selected_id" class = "button" onclick="checkInt()">BUY!</button>
<button type = "submit" name = "nope" class = "button" style = "background-color: red">DON'T BUY!</button>
</div>

</form>

<script>
    function checkInt() {
        var x, text;

        // Get the value of the input field with id="numb"
        x = document.getElementById("numb").value;

        // If x is Not a Number or less than one or greater than 10
        if (isNaN(x) || x < 1 || x > 10) {
            text = "Input not valid, must be integer";
        } else {
            text = "Input OK";
        }
        document.getElementById("demo").innerHTML = text;
        }
</script>

<?php
if (isset($_POST['nope'])) {
    header('location: buy1.php');
}
if (isset($_POST['selected_id'])) {
    $buy_id = $_POST['id_no'];
    $query = "DELETE FROM buy_houses WHERE buy_id = $buy_id";
    if(mysqli_query($connection, $query)) {
        echo "<h3>Item Bought and deleted from advertisement. This will not be shown in our advertise list anymore.</h3>" ;
        echo "<h3>Please go to billing section for transaction.</h3>";
    }
    // else {
    //     echo "<h3>OOPS! WRONG ID. Please check from previous page again.";
    // }
}
?>

</body>
    
    <?php include 'includes/include_footer.php'?>
</html>






