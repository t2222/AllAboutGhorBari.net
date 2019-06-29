<?php include 'includes/include_check_login_status.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>Buy home</title>
    <link rel="stylesheet" type="text/css" href="styles/buy-style.css">
    <link rel="stylesheet" type="text/css" href="styles/footer-style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script>
            know = {
                "hello" : "hi",
                "how are you?" : "good",
                "ok" : ":)",
                "how many houses" : "10",
                "can you get me a piece of land" : "sure, please contact with the admin",
                "phone number" : "Yes, 01521410609",
                "what is your name": "MY NAME IS AllAboutGhorBari.net."
            };
            function talk() {
                var user = document.getElementById("userBox").value;
                document.getElementById("userBox").value = "";
                document.getElementById("chatLog").innerHTML += user+"<br>"+">>>";
                if (user in know) {
                    document.getElementById("chatLog").innerHTML += know[user]+"<br>";
                } else {
                    document.getElementById("chatLog").innerHTML += "I don't understand...<br>";
                }
            } 
        </script>
</head>

<?php include 'includes/include_heading.php'?>
<?php include 'includes/include_navbar.php'?>
<?php include 'includes/db.php'?>

    <body>
        <p id="chatLog">Hey I am AllAboutGhorBari.net. Please ask me anything about this website.<br></p>
        <input id="userBox" type="text" onkeydown="if (event.keyCode == 13) {talk()}">
    </body>
    
    <?php include 'includes/include_footer.php'?>
</html>
