<?php

include '../database/db_connect.php';

$title = $_GET["title"];
$description = $_GET["description"];
$image = $_GET["image"];
$category = $_GET["Category"];
$price = $_GET["Price"];
$rating = $_GET["Rating"];


$sql = "INSERT INTO Products(Title,Description,Image,Category,Price,Rating)
VALUES('$title','$description','$image','$category','$price','$rating')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>