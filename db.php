<?php

require "config/constants.php";

$servername = "w1h4cr5sb73o944p.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "wv9r44h48fawzx5f";
$password = "z1d5zygsa9ofznzk";
$db = "w097q6whh3wvphvp";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
