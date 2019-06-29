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

    <style>
            h3 {
                font-family: cursive;
                color: red;
                text-align: center;
                padding: 10p;
            }
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 30px 60px;
                text-align: center;
                text-decoration: none;
                display: block;
                max-width: 300px;
                font-size: 25px;
                margin: auto;
                cursor: pointer;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
            }

            .button:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
            }
    </style>
</head>

<?php include('includes/include_heading.php') ?>
<body>
<br>
    <h3>We all know now a days, it is too difficult to find and buy houses because there are 
        so many choices. Our website brings nothing but the best houses available for you to buy. 
        Please select from our vivid section.</h3>
    <br><br>
    <a href="buy1.php" class="button" text-align = "center" target="_blank">See available houses</a><br><br>
    <a href="buy_submit_advertise.php" class="button" text-align = "center" style = "background-color: orange" target="_blank" >Submit your advertise</a> <br><br>
    <a href="buy_search.php" class="button" text-align = "center" style = "background-color: blue" target="_blank" >Search</a> <br>
    

    <?php include('includes/include_footer.php') ?>
</body>
</html>