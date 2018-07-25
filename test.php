<?php
echo "test";
?>

<?php
$servername = "localhost";
$username = "userT3S";
$password = "cEClU60SkHS82Obn";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
