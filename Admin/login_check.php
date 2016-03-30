<?php
session_start();
include '../database/db_connect.php';

$username = $_POST["adminUsername"];
$password = $_POST["adminPassword"];


if ($username == "jonathan" && $password=="JonathanMcCrink1"){
	$_SESSION['login'] = $username;
	header("location: adminHome.html");
}
else{
	header("location: AdminLogin.html");
}

?>