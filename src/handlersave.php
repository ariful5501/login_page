<?php
require_once "db_Connection";

// $username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// $conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbdatabaseName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from form
$email = $_POST["email"];
$pass = $_POST['password'];

// Validate user input
if (!empty($email) && !empty($pass)) {
    // Prepare SQL query
    $sql = "SELECT * FROM userinfo WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // Generate access code
        $access_code = bin2hex(random_bytes(5));
        header("Location:index.html");
    } else {
        // echo "Invalid email or password.";
        echo "<script type='text/javascript'>
            alert('Invalid email or password, try again');
            window.location.href = 'login.php';
          </script>";
    }

    $stmt->close();
} else {
    echo "Please enter both email and password.";
}

$conn->close();
?>