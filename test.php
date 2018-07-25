<?php
echo "test";
?>

<?php
$servername = getenv("dbn");
$username = getenv("dbu")
$password = getenv("dbp");

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
