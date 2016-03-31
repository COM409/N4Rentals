<?php include '../database/db_connect.php';

session_start();

$Product = $_GET['ProdID'];

$ProductPrice = $_POST["Price"];


$sqlUpdateProduct = "UPDATE products SET price='$ProductPrice' WHERE Product_ID =" . $Product;
$result = $conn->query($sqlUpdateProduct);


if (mysqli_query($conn, $sqlUpdateProduct)) {
    echo " Success!";
} else {
    echo "Error: " . $sqlUpdateProduct . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>