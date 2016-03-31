<?php include '../database/db_connect.php';

session_start();


$custFirstName = $_POST["custFirstName"];
$custLastName = $_POST["custLastName"];
$address = $_POST["address"];
$town = $_POST["town"];
$county = $_POST["county"];
$pcode = $_POST["pcode"];
$country = $_POST["country"];

$sqlUpdateCustomer = "UPDATE customer SET custFirstName='$custFirstName', custLastName='$custLastName', address='$address', town='$town', county='$county', pcode='$pcode', country='$country'
WHERE $custFirstName = custFirstName";
$result = $conn->query($sqlUpdateCustomer);


if (mysqli_query($conn, $sqlUpdateCustomer)) {
    echo " Success!";
} else {
    echo "Error: " . $sqlUpdateCustomer . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>