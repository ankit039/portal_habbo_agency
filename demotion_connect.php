<?php

$dbname = "localhost";
$username = "root";
$password = "";
$database = "portal_habbo_agency";

$mysqli = new mysqli($dbname, $username, $password, $database);

$query_demotion = "SELECT * FROM demotion where hname='$habboname'";
if ($checkrun = mysqli_num_rows(mysqli_query($mysqli,$query_profile))>0) {
  $new=0;
} else {
  header("location:notfound");
}
?>