<?php include '../database/db_connect.php';

session_start();
$_SESSION['userID'];

$CustomerID = $_GET['CustID'];
$custNewPass = $_POST["newPass"];
$custConfirmPass = $_POST["cNewPass"];

$sqlUpdatePassword = "UPDATE customer SET pword='$custNewPass', cPword='$custConfirmPass' WHERE '$CustomerID' = id";
$result = $conn->query($sqlUpdatePassword);


if (mysqli_query($conn, $sqlUpdatePassword)) {
    header("Location: updatePassword.php?CustID=$CustomerID");	
} else {
    echo "Error: " . $sqlUpdatePassword . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>