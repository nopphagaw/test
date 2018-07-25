<?php
echo "test 1";
?>

<?php
$dbhost = "mysql";
$dbport = "3306";
$dbuser = "user5YW";
$dbpwd = "k45WnAQoojrkj01Y";
$dbname = "sampledb";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
