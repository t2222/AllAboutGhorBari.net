<?php
$connection = mysqli_connect('localhost', 'root', '', 'website');
if (!$connection) {
    echo "database connection failed!";
}