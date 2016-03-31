<?php include '../database/db_connect.php'; 

$Product = $_GET['ProdID'];

$sqlDeleteProduct = "Delete FROM products WHERE Product_ID =" . $Product;
$result = $conn->query($sqlDeleteProduct);

header("Location: prodUpdate.php");	

$conn->close();

?>