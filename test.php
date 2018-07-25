<?php
echo "test 1";
?>

<?php
$servername = "mysql://mysql:3306/";
$username = "user5YW";
$password = "k45WnAQoojrkj01Y";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
