<?php

$dbname = "localhost";
$username = "root";
$password = "";
$database = "portal_habbo_agency";

$mysqli = new mysqli($dbname, $username, $password, $database);

$query_promotion = "SELECT * FROM promotion where hname='$habboname'";
if ($checkrun = mysqli_num_rows(mysqli_query($mysqli,$query_profile))>0) {
  $new=0;
} else {
  header("location:notfound");
}
?>