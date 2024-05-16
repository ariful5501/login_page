<?php
require_once "db_Connection.php";
$username=$_REQUEST["username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

$sql = "INSERT INTO userinfo(name, email, password) VALUES ('$username','$email','$password')";
mysqli_query($conn , $sql);
// echo "Data Added Successfully";

header("Location:index.html");


?>