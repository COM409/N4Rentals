<?php include '../database/db_connect.php';

session_start();

$Product = $_GET['ProductID'];
$ProductPrice = $_POST["Price"];

$sqlUpdateProduct = "UPDATE products SET Price='$ProductPrice' WHERE Product_ID =" . $Product;
$result = $conn->query($sqlUpdateProduct);


if (mysqli_query($conn, $sqlUpdateProduct)) {
    header("Location: prodUpdate.php");	
} else {
    echo "Error: " . $sqlUpdateProduct . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>