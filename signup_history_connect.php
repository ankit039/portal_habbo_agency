<?php

$dbname = "localhost";
$username = "root";
$password = "";
$database = "portal_habbo_agency";

$mysqli = new mysqli($dbname, $username, $password, $database);

$query = "SELECT * FROM logindetail";
if ($checkrun = mysqli_num_rows(mysqli_query($mysqli,$query))>0) {
  $new=0;
} else {
  header("location:notfound");
}
?>