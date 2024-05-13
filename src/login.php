<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Process your form data here, e.g., save to database

    // For demonstration, let's just print the received data
    echo "<h1>Thank you for signing up!</h1>";
    echo "<p>Username: $username</p>";
    echo "<p>Email: $email</p>";
    // Do not display the password in real-life scenarios
}
?>