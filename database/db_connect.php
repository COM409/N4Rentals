<?php
$servername = "localhost";
$username = "COM409";
$password = "";
$dbname = "com409";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>