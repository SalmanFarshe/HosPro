<?php
$server_name = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'thehosprodb';

$connection = mysqli_connect($server_name, $dbusername, $dbpassword);
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

$db_selected = mysqli_select_db($connection, $dbname);
if (!$db_selected) {
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/01.HosPro/install.php">';
    $create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
    if (!mysqli_query($connection, $create_db)) {
        die("Error creating database: " . mysqli_error($connection));
    }
}
$connection = mysqli_connect($server_name, $dbusername, $dbpassword, $dbname);
if (!$connection) {
    die('Error reconnecting to the new database: ' . mysqli_connect_error());
}
?>
