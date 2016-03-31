<?php include '../database/db_connect.php'; 

$User = $_GET['UserID'];

$sqlDeleteUser = "Delete FROM customer WHERE id=" . $User;
$result = $conn->query($sqlDeleteUser);

header("Location: custManage.php");	

$conn->close();

?>