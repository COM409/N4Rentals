<?php include '../database/db_connect.php';

session_start();
$_SESSION['userID'];

$CustomerID = $_GET['CustID'];
$custFirstName = $_POST["custFirstName"];
$custLastName = $_POST["custLastName"];
$address = $_POST["address"];
$town = $_POST["town"];
$county = $_POST["county"];
$pcode = $_POST["pcode"];
$country = $_POST["country"];

$sqlUpdateCustomer = "UPDATE customer SET custFirstName='$custFirstName', custLastName='$custLastName', address='$address', town='$town', county='$county', pcode='$pcode', country='$country'
WHERE '$CustomerID' = id";
$result = $conn->query($sqlUpdateCustomer);


if (mysqli_query($conn, $sqlUpdateCustomer)) {
    header("Location: updateCustDetails.php?CustID=$CustomerID");	
} else {
    echo "Error: " . $sqlUpdateCustomer . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>