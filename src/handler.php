<?php
require_once "db_Connection.php";
$username=$_REQUEST["username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];

$sql = "INSERT INTO userinfo(name, email, password) VALUES ('$username','$email','$password')";
// mysqli_query($conn , $sql);
// echo "Data Added Successfully";

// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    // If the query was successful, display a success alert
    echo "<script type='text/javascript'>
            alert('Data added successfully');
            window.location.href = 'index.html';
          </script>";
} else {
    // If the query failed, display an error alert
    echo "<script type='text/javascript'>
            alert('Error adding data: " . mysqli_error($conn) . "');
            window.location.href = 'index.html';
          </script>";
}

?>