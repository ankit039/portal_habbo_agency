<?php
//database configuration
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "portal_habbo_agency";

//get ip address
include './ip_address.php';
$store_ip = get_ip_address();

//connecting sql database
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname,3306);

//if connection get failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
