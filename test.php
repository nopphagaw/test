<?php
echo "test";
?>

<?php
$servername = "localhost";
$username = "userDXP";
$password = "7x8Nk7kVQI8dqxQk";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
