<?php
session_start();
include '../database/db_connect.php';

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

$username = $_POST["adminUsername"];
$password = $_POST["adminPassword"];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		 $dbUsername=$row["username"];
		 $dbPassword=$row["password"];
		 $AdminID=$row["ID"];
		 
		if ($dbUsername == $username && $dbPassword == $password){
			$_SESSION['login'];
			header("Location: AdminHome.php?AdminID=$AdminID");			 
		}	 
	}
}	 
$conn->close();

include '../includes/AdminHeader.php';
?>
<br><br><br>
	
	<div class="container">
		<div class="bs-docs-section">
			
			<div class="row">
			  <div class="col-lg-12">
				<div class="page-header">
				  <h1 align="center"> Incorrect Login! Please go <a href="adminLogin.php"><u>back</u></a> and enter correct login details. </h1>
				</div>
			  </div>
			</div>

			<div class="row">
			  <div class="col-lg-12">
				<div class="page-header">
				  <h1 align="center">If you've forgotten your username/password please <a href="forgottenpassword.php"></u>click here</u></a>.</h1>
				</div>
			  </div>
			</div>				
		</div>
	</div>
		
<?php include '../includes/AdminFooter.php'; ?>
