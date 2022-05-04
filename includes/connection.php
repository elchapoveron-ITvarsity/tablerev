<?php
require("constants.php");

$connection = mysql_connect(_SERVER,_USER,_PASS,_NAME);

mysqli_set_charset($connection, "utf8");

if ($connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
