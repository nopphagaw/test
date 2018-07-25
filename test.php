<?php
echo "test 1";
?>

<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = "user5YW";
$dbpwd = "k45WnAQoojrkj01Y";
$dbname = "sampledb";
echo $dbhost.":".$dbport.":".$dbuser.":".$dbpwd;
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
